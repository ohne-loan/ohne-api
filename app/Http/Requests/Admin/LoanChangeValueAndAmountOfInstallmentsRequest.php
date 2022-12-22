<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Money;

class LoanChangeValueAndAmountOfInstallmentsRequest extends FormRequest
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
            'user_id' => 'required|integer|exists:users,id',
            'amount' => [ 'required', new Money() ],
            'num_installments' => 'required|integer'
        ];
    }
}
