<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankAccountRequest extends FormRequest
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
			'bank_id' => 'required|integer|exists:banks,id',
			'agency_number' => 'required|integer',
			'account_number' => 'required|integer',
			'owner' => 'required|string'
		];
    }

    public function attributes()
    {
        return [
            'bank_id' => 'banco',
            'agency_number' => 'número da agência',
            'account_number' => 'número da conta',
            'owner' => 'proprietário'
        ];
    }
}
