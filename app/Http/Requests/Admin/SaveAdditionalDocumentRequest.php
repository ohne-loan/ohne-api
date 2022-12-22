<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SaveAdditionalDocumentRequest extends FormRequest
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
            'user.document.uuid' => 'required|string|exists:user_documents,uuid',
            'user.document.name' => 'required|string'
       ];
    }

    public function attributes()
    {
        return [
            'user.document.uuid' => 'Uuid do documento',
            'user.document.name' => 'Nome do documento'
        ];
    }

    public function messages()
    {
        return ['user.document.uuid.required' => 'É necessário selecionar o documento.'];
    }
}
