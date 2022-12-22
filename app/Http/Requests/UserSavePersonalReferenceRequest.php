<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSavePersonalReferenceRequest extends FormRequest
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
            'personal_reference.name' => 'required|string|max:60|alpha_spaces',
            'personal_reference.phone' => 'required|string',
        ];
    }

    public function attributes()
	{
        return [
            'user.id' => 'ID do usuário',
            'personal_reference.name' => 'nome da referência pessoal',
            'personal_reference.phone' => 'telefone da referência pessoal',
        ];
	}
}
