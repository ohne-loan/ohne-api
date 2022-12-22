<?php

namespace App\Http\Requests;

use App\Rules\Money;
use Illuminate\Foundation\Http\FormRequest;

class InvestmentSimulationRequest extends FormRequest
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
	 * @throws \Exception
	 */
    public function rules()
    {
        return [
            'amount' => [ 'required', new Money() ]
        ];
    }

    public function attributes()
	{
		return [
			'amount' => 'montante',
		];
	}
}
