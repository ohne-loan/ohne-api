<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepositProofRequest extends FormRequest
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
            'deposit_proof_uuid' => 'required|string|exists:user_documents,uuid'
        ];
    }

    public function attributes()
	{
		return [
			'deposit_proof_uuid' => 'comprovante de depósito'
		];
	}
}
