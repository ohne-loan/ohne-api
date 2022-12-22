<?php

namespace App\Http\Requests;

use App\Rules\FloatRule;
use App\Rules\Money;
use Illuminate\Foundation\Http\FormRequest;

class LoanSimulationRequest extends FormRequest
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
            'amount' => ['required', new Money()],
            'monthly_rate' => ['sometimes', new FloatRule()]
        ];
    }

    public function attributes()
    {
        return [
            'amount' => 'montante',
            'monthly_rate' => 'taxa mensal',
            'userId' => 'Id do usuário'
        ];
    }
}
