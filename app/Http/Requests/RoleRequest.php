<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
        switch ( $this->method() ) {

            case 'POST':

                $rules = [
                    'name'            => 'required|string|max:255|unique:roles,name',
                    'permissions'     => 'array',
                    'permissions.*'   => 'integer|exists:permissions,id',
                ];
                break;

            case 'PUT':

                $rules = [
                    'name'            => 'required|string|max:255|unique:roles,name,' . $this->id,
                    'permissions'     => 'array',
                    'permissions.*'   => 'integer|exists:permissions,id',
                ];
                break;

            default:
                $rules = [];

        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'name'        => 'nome',
            'permissions' => 'permissões'
        ];
    }
}
