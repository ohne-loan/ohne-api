<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSaveFacialBiometryCameraBlockedInformationRequest extends FormRequest
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
            'cameraBlocked' => 'required|boolean'
        ];
    }

    public function attributes()
	{
		return [
            'user.id' => 'ID do usuário',
            'cameraBlocked' => 'Usuário permitiu o acesso à câmera?'
        ];
	}
}
