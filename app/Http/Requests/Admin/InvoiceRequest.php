<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
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
	        'loan_installment_id' => 'required|integer|exists:loan_installments,id',
	        'expiration_date' => 'required|date',
			'amount' => 'required|float',
	        'modifiers' => 'array',
	        'modifiers.$.value' => 'sometimes|required|float',
	        'modifiers.$.description' => 'sometimes|required|string',
        ];
    }

    public function attributes()
    {
        return [
            'loan_installment_id' => 'parcela',
            'expiration_date' => 'data de expiração',
            'amount' => 'montante',
            'modifiers' => 'modificadores',
            'modifiers.$.value' => 'valor do modificador',
            'modifiers.$.description' => 'descrição do modificador',
        ];
    }
}
