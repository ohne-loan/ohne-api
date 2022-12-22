<?php

namespace App\Http\Requests;

use App\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UserConfirmEmailRequest extends FormRequest
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
        	'email_token' => 'required|integer'
        ];
    }

    public function attributes()
    {
        return [
            'user.id' => 'ID do usuário',
            'email_token' => 'token de ativação'
        ];
    }
}
