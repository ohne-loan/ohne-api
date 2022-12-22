<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Cpf;

class UserGetFacialBiometryAppKeyRequest extends FormRequest
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
            'name'          => 'required|max:120|alpha_spaces',
            'cpf'           => [ 'required', new Cpf() ],
            'birthday.date' => 'required|date'
        ];
    }

    public function attributes()
    {
        return [
            'user.id' => 'ID do usuário',
            'name'      => 'Nome',
            'cpf'       => 'Cpf',
            'birthday.date'  => 'Data de nascimento'
        ];
    }
}
