<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSaveAddressRequest extends FormRequest
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
            'user.id' => 'required|integer',
            'address.postal_code' => 'required|regex:/^\d{8}$/',
            'address.address' => 'required|string',
            'address.number' => 'required|string',
            'address.address_extra' => 'string',
            'address.state' => 'required|string',
            'address.city' => 'required|string',
            'address.neighborhood' => 'string',
        ];
    }

    public function attributes()
	{
		return [
            'user.id' => 'ID do usuário',
            'address.postal_code' => 'CEP',
			'address.address' => 'logradouro',
            'address.number' => 'número do logradouro',
            'address.address_extra' => 'complemento',
            'address.state' => 'estado',
            'address.city' => 'cidade',
			'address.neighborhood' => 'bairro',
        ];
	}
}
