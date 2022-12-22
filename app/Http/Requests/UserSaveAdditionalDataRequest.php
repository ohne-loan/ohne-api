<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Rules\Money;
use Illuminate\Foundation\Http\FormRequest;


class UserSaveAdditionalDataRequest extends FormRequest
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
            
            'user.ppe' => 'required',
            'user.ppe_since' => 'required_if:user.ppe,Sim|date|before_or_equal:today',

            'rg.rg' => 'required|min:6|max:19',
			'rg.issuing_body' => 'required|string',
            'rg.issuing_state' => 'required|exists:states,id',
			'rg.issuing_date' => 'required|date|before_or_equal:today',
            'rg.expiration_date' => 'required_if:rg.issuing_body,Detran|after_or_equal:today',
            
            'user.gender' => 'required|string|in:' . implode(',', User::GENDERS),

            'personal_info.naturality.city' => 'required|string',
            'personal_info.naturality.uf.id' => 'required|int|exists:states,id',
            'personal_info.nacionality' => 'required|string|alpha_spaces',
            'personal_info.mother_name' => 'required|string',
            'personal_info.father_name' => 'required|string',
            'personal_info.education_level_id' => 'required|integer|exists:education_levels,id',
            'loan_reason.id' => 'required|integer|exists:loan_reasons,id',
            'loan_reason.description' => 'required_if:loan_reason.id,6|string',
        ];
    }

    public function attributes()
    {
        return [
            'user.id' => 'ID do usuário',

            'user.ppe' => "Pessoa Politicamente Exposta",

            'rg.rg' => 'número do RG',
			'rg.issuing_body' => 'orgão emissor',
			'rg.issuing_state' => 'estado emissor',
			'rg.issuing_date' => 'data de emissão',
            'rg.expiration_date' => 'data de validade do documento',

            'user.gender' => 'gênero',

            'personal_info.naturality' => 'naturalidade',
            'personal_info.nationality' => 'nacionalidade',
			'personal_info.mother_name' => 'nome da mãe',
            'personal_info.father_name' => 'nome do pai',
            'personal_info.education_level_id' => 'escolaridade',
            'loan_reason.id' => 'motivo do empréstimo',
            'loan_reason.description' => 'descrição do motivo do empréstimo',
        ];
    }

    public function messages()
    {
        return [
			'rg.issuing_date.before_or_equal' => 'Data de expedição inválida.',
			'rg.expiration_date.after_or_equal' => 'Data de validade inválida.',
        ];   
    }
}
