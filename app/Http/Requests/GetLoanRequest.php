<?php

namespace App\Http\Requests;

use App\Models\BankAccount;
use App\Models\MaritalStatus;
use App\Models\RG;
use App\Models\User;
use App\Rules\Cpf;
use App\Rules\FloatRule;
use App\Rules\Money;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class GetLoanRequest extends FormRequest
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
			'userId' => 'integer',
        ];
    }

    public function attributes()
	{
		return [
		    'userId' => 'ID do usuário',
		];
	}
}
