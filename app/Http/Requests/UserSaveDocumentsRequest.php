<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSaveDocumentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user.id' => 'required|integer',
            'user.identity_proof_front.uuid' => 'required|string|exists:user_documents,uuid',
            'user.identity_proof_back.uuid' => 'string|exists:user_documents,uuid',
            'address.address_proof.uuid' => 'required|string|exists:user_documents,uuid',
            'personal_info.income_proof.uuid' => 'required|string|exists:user_documents,uuid',
            'spouse.income_proof.uuid' => 'string|exists:user_documents,uuid',
       ];
    }

    public function attributes()
    {
        return [
            'user.id' => 'ID do usuário',
            'user.identity_proof_front.uuid' => 'comprovante de identidade (frente)',
            'user.identity_proof_back.uuid' => 'comprovante de identidade (verso)',
            'address.address_proof.uuid' => 'comprovante de endereço',
            'personal_info.income_proof.uuid' => 'comprovante de renda',
            'spouse.income_proof.uuid' => 'comprovante de renda do cônjuge',
        ];
    }
}
