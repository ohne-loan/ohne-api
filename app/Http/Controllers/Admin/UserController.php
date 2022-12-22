<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use App\Http\Requests\MyAccountRequest;
use App\Http\Requests\UserChangePasswordRequest;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\Admin\SaveAdditionalDocumentRequest;
use App\Http\Resources\UserAdminResource;
use App\Http\Resources\UserResource;
use App\Http\Responses\SuccessResponse;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Spatie\Permission\Models\Role;
use App\Services\Admin\UserService;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;

    /**
     * Create a new controller instance.
     *
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->middleware('auth');
        $this->userService = $userService;
    }

    /**
     * Show the application users list.
     *
     * @internal param Request $request
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $resources = $this->userService->all();
        return UserAdminResource::collection($resources);
    }

    /**
     * @param $id
     * @return UserResource
     * @throws ApiException
     */
    public function show($id)
    {
        try{

            $resource = User::findOrFail($id);

        } catch (\Exception $e) {
            throw new ApiException("Usuário não encontrado!", 422);
        }

	    return new UserResource($resource->load(['maritalStatus', 'personalInfo', 'address', 'phones', 'roles', 'scoreChecks']));
    }

    /**
     * Store a newly created user in storage.
     *
     * @param UserCreateRequest $request
     *
     * @return UserAdminResource
     * @throws \App\Exceptions\ApiException
     */
    public function store(UserCreateRequest $request)
    {
        $data = $request->all();
        $resource = $this->userService->storeAdmin($data);

        activity('Novo usuário com permissão de administrador')
            ->performedOn($resource)
            ->causedBy(Auth::user())
            ->log(":causer.name registrou um novo usuário (:subject.email) com permissão de admin.");

        return new UserAdminResource($resource->load('roles'));
    }

    /**
     * Update the specific user in storage.
     *
     * @param UserUpdateRequest $request
     * @param Integer $id
     *
     * @return UserAdminResource
     * @throws ApiException
     */
    public function update(UserUpdateRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $resource = User::findOrFail($id);
            $resource->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'gender' => $data['gender'],
                'birthday' => Carbon::parse($data['birthday']['date'])->format('Y-m-d'),
                'gross_income' => money($data['gross_income'], true),
                'profession' => $data['profession'],
                'politically_exposed_person' => $data['politically_exposed_person'],
                'password' => $data['password']
            ]);
            $resource->roles()->detach();

            if ($data['roles']) {
                $roles = collect($data['roles'])->pluck('id')->toArray();
                $resource->assignRole($roles);
            }

            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            throw new ApiException($e->getMessage(), 422);
        }

        activity('Atualização de dados de usuário')
            ->performedOn($resource)
            ->causedBy(Auth::user())
            ->log(":causer.name atualizou dados do usuario :subject.name");

        return new UserAdminResource($resource->load('roles'));
    }

    /**
     * Remove the specific user from storage.
     *
     * @param Integer $id
     * @internal param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws ApiException
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            if(Auth::user()->id == $id){
                throw new ApiException("Não é possível excluir a si próprio.", 422);
            }
            $user = User::findOrFail($id);
            $user->name = $user->name . " (Inativo)";
            $user->save();
            $user->delete();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw new ApiException($e->getMessage(), 422);
        }
        activity('Exclusão de usuário')
            ->performedOn($user)
            ->causedBy(Auth::user())
            ->log(":causer.name excluiu o usuário :subject.name");
        return response()->json(true, 200);
    }

    /**
     * Update password from a specific user in storage.
     *
     * @param UserChangePasswordRequest $request
     * @param Integer $id
     *
     * @return UserAdminResource
     * @throws ApiException
     */

    public function changePassword(UserChangePasswordRequest $request, $id)
    {
        $resource = $this->userService->changePassword($request, $id);
        activity('Trocou a senha')
            ->performedOn($resource)
            ->log("O usuário :subject.name alterou a senha.");
        return new UserAdminResource($resource);
    }

    public function myAccount(MyAccountRequest $request, int $id)
    {
        try {

            DB::beginTransaction();

            $data = $request->only('name', 'email');
            $resource = User::findOrFail($id);
            $resource->update($data);

            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            throw new ApiException($e->getMessage(), 422);
        }

        activity('Atualização de dados cadastrais')
            ->performedOn($resource)
            ->causedBy(Auth::user())
            ->log(":causer.name atualizou os dados cadastrais do usuário :subject.name");
        return new UserAdminResource($resource->load('roles'));
    }

    /**
     * @param SaveAdditionalDocumentRequest $request
     * @param int $id
     * @return SuccessResponse
     */
    public function saveAdditionalDocument(SaveAdditionalDocumentRequest $request, int $id)
    {
        try {
            DB::beginTransaction();

            $user = User::findOrFail($id);

            $this->userService->saveAdditionalDocument($request, $user);

            activity('Novo documento anexado')
                ->performedOn($user)
                ->causedBy(Auth::user())
                ->log(":causer.name anexou um novo documento para o cliente com cpf: (:subject.cpf).");

            DB::commit();

            return new SuccessResponse("attached");
        } catch (\Exception $exception) {
            DB::rollBack();
            handle($exception, $exception->getMessage(), 500, true);
        }
    }
}
