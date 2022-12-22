<?php

namespace App\Http\Requests;

use App\Models\MaritalStatus;
use App\Rules\Money;
use App\Rules\Cpf;
use Illuminate\Support\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UserSaveIncomeAndProfessionRequest extends FormRequest
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
        $dt = new Carbon();
        $age = $dt->subYears(18)->format('Y-m-d');

        return [
            'user.id' => 'required|integer',
            'user.profession' => 'required|string',
            'user.professional_class_id' => 'integer|exists:professional_classes,id',

            'user.company_name' => 'required_if:user.professional_class_id,12|string',
            'user.admission_date' => 'date',
            'user.benefit_number' => 'required_if:user.professional_class_id,7|integer',
            'user.gross_income' => [ 'required', new Money() ],
            'user.patrimony' => [ 'required', new Money() ],
            'user.marital_status_id' => 'required|integer|in:' . implode(',', MaritalStatus::STATUS),

            'spouse.name' => 'required_with:spouse|alpha_spaces',
			'spouse.cpf' => [ new Cpf() ],
			'spouse.birthday' => 'date|before_or_equal:' . $age,
			'spouse.phone' => 'string',
			'spouse.has_loans' => 'boolean',
			'spouse.gross_income' => [ new Money() ],
            'spouse.profession' => 'string|max:100',
        ];
    }

    public function attributes()
	{
		return [
            'user.id' => 'ID do usuário',
            'user.profession' => 'profissão',
            'user.professional_class_id' => 'classe profissional',

            'user.company_name' => 'nome da empresa',
            'user.admission_date' => 'data de admissão',
            'user.benefit_number' => 'número do benefício',
            'user.gross_income' => 'renda bruta',
            'user.patrimony' => 'valor total aproximado do patrimônio',
            'user.marital_status_id' => 'estado civil',

            'spouse' => 'cônjuge',
			'spouse.name' => 'nome do cônjuge',
			'spouse.cpf' => 'CPF do cônjuge',
			'spouse.birthday' => 'data de nascimento do cônjuge',
			'spouse.phone' => 'telefone do cônjuge',
			'spouse.has_loans' => 'cônjuge tem empréstimos na OHNE?',
			'spouse.gross_income' => 'renda bruta do cônjuge',
			'spouse.profession' => 'profissão do cônjuge',
        ];
	}

    public function messages()
    {
        return [
            'spouse.birthday.before_or_equal' => 'Cônjuge é necessário possuir no mínimo 18 anos.',
        ];
    }
}
