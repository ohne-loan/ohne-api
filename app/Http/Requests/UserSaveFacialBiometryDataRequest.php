<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSaveFacialBiometryDataRequest extends FormRequest
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
            'facial_biometry.app_key' => 'nullable|string',
            'facial_biometry.success' => 'boolean',
            'facial_biometry.code_result' => 'nullable|string',
            'facial_biometry.cause_result' => 'nullable|string',
            'facial_biometry.protocol' => 'nullable|string',
            'facial_biometry.image' => 'required|string'
        ];
    }

    public function attributes()
	{
		return [
            'user.id' => 'ID do usuário',
            'facialbiometry.app_key' => 'Appkey utilizado para obter a biometria facial (BF)',
            'facialbiometry.success' => 'Resultado da análise da BF',
            'facialbiometry.code_result' => 'Código do resultado da análise da BF',
            'facialbiometry.cause_result' => 'Causa do resultado da análise da BF',
            'facialbiometry.protocol' => 'Protocolo do processamento da BF',
            'facialbiometry.image' => 'Imagem do cliente utilizada na BF'
        ];
	}
}
