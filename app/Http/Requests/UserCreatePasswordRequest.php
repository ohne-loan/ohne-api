<?php

namespace App\Http\Requests;

use App\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UserCreatePasswordRequest extends FormRequest
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
			'password' => ['required', 'string', 'min:8', 'confirmed', new Password() ],
        ];
    }

    public function attributes()
    {
        return [
            'user.id' => 'ID do usuário',
            'password' => 'senha',
            'password_confirmation' => 'confirmação de senha',
        ];
    }
}
