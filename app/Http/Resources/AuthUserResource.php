<?php

namespace App\Http\Resources;

use App\Models\Phone;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $cellphone = $this->phones()->where('type', Phone::CELLPHONE)->first();
        $landline = $this->phones()->where('type', Phone::LANDLINE)->first();
        $bankAccount = $this->bankAccounts()->first();
        return [
            'id' => $this->id,
            'name' => $this->name,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'birthday' => $this->birthday->toDateString(),
            'gender' => $this->gender,
            'gross_income' => $this->gross_income,
            'politically_exposed_person' => $this->politically_exposed_person,
            'profession' => $this->profession,
            'address' => isset($this->address) ? addressInline($this->address) : null,
            'maritalStatus' => new MaritalStatusResource($this->whenLoaded('maritalStatus')),
            'identityProof' => new UserDocumentResource($this->whenLoaded('identityProof')),
            'phone' => isset($cellphone) ? $cellphone->area_code . $cellphone->phone : null,
            'phones' => [
                'cellphone' => isset($cellphone) ? $cellphone->area_code . $cellphone->phone : null,
                'landline' => isset($landline) ? $landline->area_code . $landline->phone : null,
            ],
            'bankAccounts' => isset($bankAccount) ? new BankAccountResource($bankAccount) : null,
            'rg' => isset($this->rg) ? $this->rg->rg : null,
            'personalInfo' => new PersonalInfoResource($this->whenLoaded('personalInfo')),
            'loans' => LoanResource::collection($this->whenLoaded('loans')),
            'permissions' => PermissionResource::collection($this->getAllPermissions()),
        ];
    }

    /**
     * This method is necessary just to preserve backward compatibility with non-Eloquent resources.
     * The objects inside a JsonResource now must implement ArrayAccess. This means you cannot create a Resource
     * of a Collection of plain objects like we're doing here with a RAW Query.
     *
     * We're applying the changes suggested by Graham Campbell in #29860.
     *
     * More information
     *      https://github.com/laravel/framework/issues/29916
     *      https://github.com/laravel/framework/issues/29858
     *      https://github.com/laravel/framework/pull/29860
     */
    public function offsetExists($offset)
    {
        return (is_array($offset) || $offset instanceof ArrayAccess) && isset($this->resource[$offset]);
    }
}
