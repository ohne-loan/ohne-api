<?php

namespace App\Http\Requests;

use App\Models\BankAccount;
use Illuminate\Foundation\Http\FormRequest;

class UserSaveBankDetailsRequest extends FormRequest
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
            'bank_account.type' => 'required|in:' . implode(',', BankAccount::TYPES),
            'bank_account.bank_id' => 'required|integer|exists:banks,id',
			'bank_account.owner' => 'required|string',
			'bank_account.agency_number' => 'required|string|min:4',
			'bank_account.account_number' => 'required|string|min:6',
        ];
    }

    public function attributes()
	{
		return [
            'bank_account.type' => 'tipo da conta',
            'bank_account.bank_id' => 'banco',
            'bank_account.owner' => 'nome do titular da conta',
			'bank_account.agency_number' => 'número da agência',
			'bank_account.account_number' => 'número da conta',
		];
	}
}
