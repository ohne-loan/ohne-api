<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserDocumentRequest extends FormRequest
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
            'file' => 'required|mimes:png,jpeg,jpg,pdf,doc,docx,mpeg,ogg,wav,mp3|max:10240'
        ];
    }

    public function attributes()
    {
        return [
            'file' => 'arquivo',
        ];
    }

    public function messages()
    {
        return [
            'file.max' => 'O arquivo deve ter no máximo 10 megabytes.',
            'file.mimes' => 'O arquivo deve ter extensão png, jpeg, jpg, pdf, mpeg, ogg, wav, mp3, doc ou docx.'
        ];
    }
}
