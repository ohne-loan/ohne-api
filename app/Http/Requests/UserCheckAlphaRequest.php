<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCheckAlphaRequest extends FormRequest
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
			'userId' => 'required|integer',
			'badCredit' => 'required|boolean',
        ];
    }

    public function attributes()
    {
        return [
            'userId' => 'ID do cliente',
            'badCredit' => 'Indica se o cliente está com o CPF negativado',
        ];
    }
}
