<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Http\Requests\RoleUpdateRequest;
use App\Http\Resources\RoleResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application roles list.
	 *
	 * @internal param Request $request
	 *
	 * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
	public function index()
	{
        $perPage = request()->has('perPage') ? request()->input('perPage') : 15;
	    $query = Role::query();
	    $this->filter($query);
		$resources = $query->paginate($perPage);
		return RoleResource::collection($resources);
	}

    public function show($id)
    {
        $resource = Role::find($id);
        return new RoleResource($resource);
    }

    /**
     * Store a newly created role in storage.
     *
     * @param RoleRequest $request
     *
     * @return RoleResource
     * @throws ApiException
     */
	public function store(RoleRequest $request)
	{
		try {

			DB::beginTransaction();

			$name['name'] = $request->input('name');
			$resource = Role::create($name);
            $resource->givePermissionTo($request->input('permissions'));

            activity('Criação de novo perfil de usuário')
                ->performedOn($resource)
                ->causedBy(Auth::user())
                ->log(":causer.name criou uma nova role :subject.name");

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw new ApiException($e->getMessage(), 422);
        }
        return new RoleResource($resource);
	}

    /**
     * Update the specific role in storage.
     *
     * @param RoleUpdateRequest $request
     * @param Integer $id
     *
     * @return RoleResource
     * @throws ApiException
     */
	public function update(RoleRequest $request, $id)
	{

		try {

			$resource = Role::findOrFail($id);
			$input = $request->only(['name']);
			$resource->fill($input)->save();

            $resource->syncPermissions($request->input('permissions'));

            activity('Atualização de perfil de usuário')
                ->performedOn($resource)
                ->causedBy(Auth::user())
                ->log(":causer.name atualizou o pefil de usuário :subject.name");

            DB::commit();

			return new RoleResource($resource);

		} catch (Exception $e) {
			DB::rollback();
            throw new ApiException($e->getMessage(), 422);

		}
	}

    /**
     * Remove the specific role from storage.
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

			$role = Role::findOrFail($id);
			$role->delete();
            activity('Exclusão de perfil de usuário')
                ->performedOn($resource)
                ->causedBy(Auth::user())
                ->log(":causer.name excluiu o pefil de usuário :subject.name");

			return response()->json(true, 200);

		} catch (Exception $e) {
            throw new ApiException($e->getMessage(), 422);
		}
	}

    private function filter($query)
    {
        if ( request()->has('name') && strlen(request()->get('name')) >= 4) {
            $query->where('name', 'like', request()->get('name') . '%');
        }
    }
}
