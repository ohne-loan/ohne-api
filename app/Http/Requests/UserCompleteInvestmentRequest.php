<?php

namespace App\Http\Requests;

use App\Models\RG;
use App\Rules\Money;
use Illuminate\Foundation\Http\FormRequest;

class UserCompleteInvestmentRequest extends FormRequest
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
			'email_token' => 'required|string',

        	'user.gross_income' => [ 'required', new Money() ],
			'user.profession' => 'required|string',
			'user.marital_status_id' => 'required|integer|exists:marital_statuses,id',
			'user.identity_proof_front_uuid' => 'required|string|exists:user_documents,uuid',
			'user.identity_proof_back_uuid' => 'required|string|exists:user_documents,uuid',

			'address.postal_code' => 'required|regex:/^\d{5}-\d{3}$/',
			'address.address' => 'required|string',
			'address.address_extra' => 'string',
			'address.number' => 'required|string',
			'address.neighborhood' => 'string',
			'address.city_id' => 'required|integer|exists:cities,id',
			'address.address_proof_uuid' => 'required|string|exists:user_documents,uuid',

			'rg.rg' => 'required|string',
			'rg.issuing_body' => 'required|in:' . implode(',', RG::ISSUING_BODIES),
			'rg.issuing_state' => 'required|string|exists:states,uf',
			'rg.issuing_date' => 'required|date',

			'bank_account.bank_id' => 'required|integer|exists:banks,id',
			'bank_account.owner' => 'required|string',
			'bank_account.agency_number' => 'required|integer',
			'bank_account.account_number' => 'required|integer',

			'investment.amount' => [ 'required', new Money() ],
			'investment.monthly_rate' => 'required|exists:investment_rates,rate',
			'investment.payment_day' => 'required|integer|min:1|max:31'
        ];
    }

    public function attributes()
    {
        return [
			'email_token' => 'token de identificação',

        	'user.gross_income' => 'salário bruto',
			'user.profession' => 'profissão',
			'user.marital_status_id' => 'estado civil',
			'user.identity_proof_front_uuid' => 'comprovante da identidade (frente)',
			'user.identity_proof_back_uuid' => 'comprovante da identidade (verso)',

			'address.postal_code' => 'CEP',
			'address.address' => 'logradouro',
			'address.address_extra' => 'complemento',
			'address.number' => 'número',
			'address.neighborhood' => 'bairro',
			'address.city_id' => 'cidade',
			'address.address_proof_uuid' => 'comprovante de residência',

			'rg.rg' => 'número do rg',
			'rg.issuing_body' => 'orgão emissor do rg',
			'rg.issuing_state' => 'estado emissor do rg',
			'rg.issuing_date' => 'data de emissão do rg',

			'bank_account.bank_id' => 'banco',
			'bank_account.owner' => 'proprietário da conta',
			'bank_account.agency_number' => 'número da agência',
			'bank_account.account_number' => 'número da conta',

			'investment.amount' => 'montante',
			'investment.monthly_rate' => 'taxa de rendimento mensal',
			'investment.payment_day' => 'data de pagamento'
        ];
    }
}
