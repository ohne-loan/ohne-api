<?php

namespace App\Http\Requests;

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
            'loan_id' => 'required|integer|exists:loans,id',
            'installment_id' => 'required|integer'
        ];
    }

    public function attributes()
    {
        return [
            'loan_id' => 'empréstimo',
            'installment_id' => 'parcela'
        ];
    }

}
