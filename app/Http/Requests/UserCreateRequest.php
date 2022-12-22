<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Rules\Cpf;
use App\Rules\Money;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'name'     => 'required|max:120|alpha_spaces',
			'email'    => 'required|email|unique:users',
            'cpf' => [ 'required', new Cpf() ],
            'birthday.date' => 'required|date|before_or_equal:' . $age,
            'gender' => 'required|string|in:' . implode(',', User::GENDERS),
            'gross_income' => [ 'required', new Money() ],
            'profession' => 'required|string',
            'politically_exposed_person' => 'required|boolean',
        ];
    }

    public function attributes()
    {
        return [
            'name'     => 'nome',
            'email'    => 'e-mail',
            'cpf' => 'cpf',
            'birthday' => 'data de nascimento',
            'gender' => 'gênero',
            'gross_income' => 'renda bruta',
            'profession' => 'profissão',
            'ppe' => 'Pessoa Politicamente Exposta',
        ];
    }
}
