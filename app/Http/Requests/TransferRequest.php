<?php

namespace App\Http\Requests;

use App\Rules\Money;
use Illuminate\Foundation\Http\FormRequest;

class TransferRequest extends FormRequest
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
	        'investment_installment_id' => 'required|integer|exists:investment_installments,id',
	        'company_bank_account_id' => 'required|integer|exists:company_bank_accounts,id',
	        'user_bank_account_id' => 'required|integer|exists:user_bank_accounts,id',
	        'amount' => [ 'required', new Money() ],
	        'description' => 'required|string',
	        'modifiers' => 'array',
	        'modifiers.$.value' => [ 'sometimes|required', new Money() ],
	        'modifiers.$.description' => 'sometimes|required|string',
        ];
    }

    public function attributes()
    {
        return [
            'investment_installment_id' => 'parcela',
            'company_bank_account_id' => 'conta da empresa',
            'user_bank_account_id' => 'conta do usuário',
            'amount' => 'montante',
            'description' => 'descrição',
            'modifiers' => 'modificadores',
            'modifiers.$.value' => 'valor do modificador',
            'modifiers.$.description' => 'descrição do modificador',
        ];
    }
}
