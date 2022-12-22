<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Rules\Cpf;
use App\Rules\Gender;
use App\Rules\Money;
use App\Rules\UniqueLoan;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class UserRegisterRequest extends FormRequest
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
        $dtAge = new Carbon();
        $dtMinDate = new Carbon();
        $minDate = $dtMinDate->subYears(120)->format('Y-m-d');
        $age = $dtAge->subYears(18)->format('Y-m-d');

        return [
			'name' => 'required|alpha_spaces',
			'cpf' => [ 'required', new Cpf()],
			'email' => 'required|email',
			'email_confirmation' => 'required|email',
			'birthday' => 'required|date|after_or_equal:' . $minDate . '|before_or_equal:' . $age,
			'terms' => 'required|accepted',
			'phones.landline' => 'string|nullable',
            'phones.cellphone' => 'required|string'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'cpf' => 'CPF',
            'email' => 'e-mail',
            'email_confirmation' => 'e-mail de confirmação',
            'birthday' => 'data de nascimento',
            'terms' => 'termos e condições',
            'phones.landline' => 'telefone fixo',
            'phones.cellphone' => 'telefone celular'
        ];
    }

    public function messages()
    {
        return [
            'birthday.after_or_equal' => 'Ops! a data de nascimento não é válida.',
            'birthday.before_or_equal' => 'Ops! para obter um empréstimo você deve ter no mínimo 18 anos.',
            'email.email' => 'Ops! o e-mail informado não é válido.'
        ];
    }
}
