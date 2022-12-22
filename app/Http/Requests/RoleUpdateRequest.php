<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleUpdateRequest extends FormRequest
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
    	$id = $this->input('id');
        return [
			'name'        => 'required|max:40|unique:roles,name,' . $id,
			'permissions' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name'        => 'nome',
            'permissions' => 'permissões'
        ];
    }
}
