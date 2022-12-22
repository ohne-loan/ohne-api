<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Password;

class UserChangePasswordRequest extends FormRequest
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
		    'old_password' => ['required', 'string', 'min:8', 'confirmed', new Password() ],
			'password' => ['required', 'string', 'min:8', 'confirmed', new Password() ],
		];
    }

    public function attributes()
    {
        return [
            'old_password' => 'Senha antiga',
            'password' => 'senha',
            'password_confirmation' => 'confirmação da senha'
        ];
    }
}
