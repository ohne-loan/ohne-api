<?php

namespace App\Services\Admin;

use App\Http\Requests\Admin\SaveAdditionalDocumentRequest;
use App\Http\Requests\UserChangePasswordRequest;
use App\Models\User;
use App\Models\UserAdditionalDocument;
use App\Services\DocumentsService;

use App\Exceptions\ApiException;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserService
{
    /**
     * @var DocumentsService
     */
    private $documentsService;

    public function __construct(
        DocumentsService $documentsService
    ) {
        $this->documentsService = $documentsService;
    }

    public function all()
    {
        $perPage = request()->has('perPage') ? request()->input('perPage') : 15;
        $query = User::query()
                        ->where('email', 'like', '%' .'@ohne.com.br')
                        ->orWhere('email', 'like', '%' .'@amc-brasil.com.br')
                        ->select('id', 'name', 'email');
        $this->filter($query);
        $resources = $query->paginate($perPage);
        return $resources;
    }

    /**
     * @param $data
     * @throws ApiException
     */
    public function storeAdmin($data)
    {
        try {
            DB::beginTransaction();

            $resource = User::create([
                'uuid' => Uuid::uuid4()->toString(),
                'name' => $data['name'],
                'email' => $data['email'],
                'cpf' => $data['cpf'],
                'gender' => $data['gender'],
                'birthday' => Carbon::parse($data['birthday']['date'])->format('Y-m-d'),
                'gross_income' => money($data['gross_income'], true),
                'profession' => $data['profession'],
                'politically_exposed_person' => $data['politically_exposed_person'],
                'password' => $data['password']
            ]);

            if ($data['roles']) {
                $roles = collect($data['roles'])->pluck('id')->toArray();
                $resource->assignRole($roles);
            }

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw new ApiException($exception->getMessage(), 422);
        }

        return $resource;
    }

    /**
     * @param UserChangePasswordRequest $request
     * @param int $id
     * @throws ApiException
     */
    public function changePassword(UserChangePasswordRequest $request, int $id)
    {
        $data = $request->all();
        if (Hash::check(Auth::user()->getAuthPassword(), $request['old_password'])) {
            try {
                $resource = User::find($id);
                $resource->update($data['password']);
            } catch (\Exception $e) {
                throw new ApiException($e->getMessage(), 422);
            }

            return $resource;
        } else {
            throw new ApiException("Ops, a senha antiga está incorreta.", 422);
        }
    }

    /**
     * @param SaveAdditionalDocumentRequest $request
     * @param User $user
     */
    public function saveAdditionalDocument(SaveAdditionalDocumentRequest $request, User $user)
    {
        try {
            $data = $request->all();
            $uuid = $data['user']['document']['uuid'];
            $documentName = $data['user']['document']['name'];
        
            $document = $this->documentsService->find($uuid);

            $this->documentsService->moveToFinal($document);

            $userAdditionalDocument = UserAdditionalDocument::create([
                'user_id' => $user->id,
                'document_name' => $documentName,
                'user_document_id' => $document->id
            ]);
        } catch (\Exception $exception) {
            $this->documentsService->rollBack();
            throw $exception;
        }
    }

    /**
     * @param $query
     */
    private function filter($query)
    {
        if (request()->has('name') && strlen(request()->get('name')) >= 4) {
            $query->where('name', 'like', request()->get('name') . '%');
        }

        if (request()->has('email') && strlen(request()->get('email')) >= 4) {
            $query->where('email', 'like', request()->get('email') . '%');
        }
    }
}
