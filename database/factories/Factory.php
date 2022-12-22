<?php

use App\Models\Address;
use App\Models\Bank;
use App\Models\City;
use App\Models\CompanyBankAccount;
use App\Models\Contract;
use App\Models\Country;
use App\Models\EducationLevel;
use App\Models\EmailToken;
use App\Models\FAQ\Categorie;
use App\Models\FAQ\FAQ;
use App\Models\IncomeTaxRate;
use App\Models\Investment;
use App\Models\InvestmentInstallment;
use App\Models\InvestmentRate;
use App\Models\Invoice;
use App\Models\InvoiceModifier;
use App\Models\Loan;
use App\Models\LoanInstallment;
use App\Models\MaritalStatus;
use App\Models\Parameter;
use App\Models\Phone;
use App\Models\RG;
use App\Models\ScoreCheck;
use App\Models\ScoreRate;
use App\Models\State;
use App\Models\Transfer;
use App\Models\TransferModifier;
use App\Models\User;
use App\Models\UserBankAccount;
use App\Models\UserDocument;
use App\Models\UserPersonalInfo;
use App\Models\UserPreferences;
use App\Models\BankAccount;
use Faker\Factory;
use Faker\Generator as Faker;
use Illuminate\Auth\Events\PasswordReset;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$profissoes = [
    'Assistente Operacional',
    'Assistente Paralegal',
    'Assistente Pedagógico',
    'Assistente Social',
    'Assistente Societário',
    'Assistente Técnico',
    'Assistente Técnico de Campo',
    'Assistente Técnico de Edificações',
    'Assistente Técnico de Vendas',
    'Advogado Consumerista',
    'Advogado Criminalista',
    'Advogado de Contratos',
    'Advogado de Propriedade Intelectual',
    'Advogado Eleitoral',
    'Advogado Empresarial',
    'Advogado Imobiliário',
    'Advogado Securitário',
    'Advogado Societário',
    'Advogado Trabalhista',
    'Advogado Tributarista',
    'Arquiteto de Soluções',
    'Arquiteto Especificador',
    'Arquiteto Java',
    'Arquiteto Paisagista',
    'Arquiteto Urbanista',
    'Arquiteto Vendedor',
    'Arquivista',
    'Arrematador',
    'Arte-finalista',
    'Artesão',
    'Articulador Social',
    'Ascensorista',
    'Assessor Científico',
    'Assessor de Comunicação',
    'Assessor de Imprensa',
    'Assessor de Investimentos',
    'Assessor de Marketing',
];

$generator = Factory::create('pt_BR');

// countries
$factory->define(Country::class, function () use ($generator) {
	return [
		'name' => $generator->name
	];
});

// states
$factory->define(State::class, function () use ($generator) {
	return [
		'name' => $generator->name,
		'uf' => str_random(2)
	];
});

// cities
$factory->define(City::class, function () use ($generator) {
	$state = State::inRandomOrder()->first();

	return [
		'name' => $generator->name,
		'state_id' => $state->id
	];
});

// user_documents
$factory->define(UserDocument::class, function () use ($generator) {
	return [
		'uuid' => $generator->uuid,
		'path' => str_random(32),
        'url' => $generator->url
	];
});

// addresses
$factory->define(Address::class, function () use ($generator) {
	$city = City::inRandomOrder()->first();

	return [
		'postal_code' => str_random(10),
		'number' => $generator->randomNumber(),
		'address' => $generator->name,
		'neighborhood' => $generator->name,
		'state' => 'PR',
		'city' => 'Curitiba'
	];
});

// marital_statuses
$factory->define(MaritalStatus::class, function () use ($generator) {
	return [
		'title' => $generator->name,
	];
});

// users
$factory->define(User::class, function () use ($profissoes, $generator) {
	$address = Address::inRandomOrder()->first();
	$maritalStatus = MaritalStatus::inRandomOrder()->first();

	return [
		'name' => $generator->name,
		'cpf' => $generator->cpf(false),
		'email' => $generator->unique()->safeEmail,
		'password' => bcrypt('123'),
		'birthday' => $generator->date(),
		'gender' => $generator->randomElement(User::GENDERS),
		'active' => true,
		'gross_income' => $generator->randomFloat(2, 1000, 5000),
		'address_id' => $address->id,
		'marital_status_id' => $maritalStatus->id,
		'profession' => $generator->randomElement($profissoes),
		'uuid' => '38e16c3b-1f5e-4312-9f90-242b30982791'
	];
});

// user_personal_infos
$factory->define(UserPersonalInfo::class, function () use ($generator) {
	$user = User::inRandomOrder()->first();
	$eduLevel = EducationLevel::inRandomOrder()->first();
    $state = State::inRandomOrder()->first();

	return [
		'user_id' => $user->id,
		'education_level_id' => $eduLevel,
		'mother_name' => $generator->firstNameFemale,
		'father_name' => $generator->firstNameMale,
        'naturality' => $generator->city,
        'naturality_id' => $state->id,
        'nacionality' => 'Brasil'
	];
});

// user_preferences
$factory->define(UserPreferences::class, function () use ($generator) {
	$user = User::inRandomOrder()->first();
	$paymentDays = [ 5, 10, 15 ];
	$receiptDays = [ 20, 25, 30 ];

	return [
		'user_id' => $user->id,
		'payment_day' => $generator->randomElement($paymentDays),
		'receipt_day' => $generator->randomElement($receiptDays)
	];
});

// phones
$factory->define(Phone::class, function () use ($generator) {
	$user = User::inRandomOrder()->first();

	return [
		'country_code' => $generator->randomNumber(),
		'area_code' => $generator->randomNumber(),
		'phone' => $generator->randomNumber(),
		'type' => $generator->randomElement(Phone::TYPES)
	];
});

// rg_documents
$factory->define(RG::class, function () use ($generator) {
	$user = User::inRandomOrder()->first();
	$state = State::inRandomOrder()->first();

	return [
		'user_id' => $user->id,
		'rg' => $generator->randomNumber(8),
		'issuing_body' => $generator->randomElement(RG::ISSUING_BODIES),
        'issuing_state' => $state,
		'issuing_date' => $generator->date()
	];
});

// score_checks
$factory->define(ScoreCheck::class, function () use ($generator) {
	$user = User::inRandomOrder()->first();

	return [
		'user_id' => $user->id,
		'code' => $generator->randomNumber(5),
		'type' => $generator->randomElement(ScoreCheck::TYPES),
		'status' => $generator->randomElement(ScoreCheck::STATUSES),
		'score' => $generator->randomNumber(3)
	];
});

// email_tokens
$factory->define(EmailToken::class, function () use ($generator) {
	$user = User::inRandomOrder()->first();

	return [
		'user_>id' => $user->id,
		'uid' => str_random(),
		'expires_at' => $generator->dateTime,
		'confirmation_date' => $generator->dateTime
	];
});

// contracts
$factory->define(Contract::class, function () use ($generator) {
	return [
		'uuid' => '38e16c3b-1f5e-4312-9f90-242b30982791',
		'status' => $generator->randomElement(Contract::STATUSES)
	];
});

// loans
$factory->define(Loan::class, function () use ($generator) {
	$user = User::inRandomOrder()->first();
	$contract = Contract::inRandomOrder()->first();

	return [
		'user_id' => $user->id,
		'contract_id' => $contract->id,
		'amount' => $generator->randomFloat(2, 1000, 5000),
		'num_installments' => rand(12, 48),
		'installment_value' => $generator->randomFloat(2, 1000, 1200),
		'monthly_rate' => $generator->randomFloat(3, 0.01, 0.2),
        'yearly_rate' => $generator->randomFloat(3, 0.1, 0.3),
        'expiration_day' => 20,
		'status' => $generator->randomElement(Loan::STATUSES),
		'monthly_effective_cost' => $generator->randomFloat(3, 0.01, 0.2),
		'monthly_cet_rate' => $generator->randomFloat(1, 0.01, 0.2),
		'cet_rate' => $generator->randomFloat(3, 0.01, 0.2),
		'annual_effective_cost' => $generator->randomFloat(3, 0.5, 0.9),
		'amount_effective_cost' => $generator->randomFloat(2, 1000, 5000),
		'iof_value' => $generator->randomFloat(3, 0.1, 0.3)
	];
});

// loan_installments
$factory->define(LoanInstallment::class, function () use ($generator) {
	$loan = Loan::inRandomOrder()->first();

	return [
		'loan_id' => $loan->id,
		'date' => $generator->date(),
		'balance' => $generator->randomFloat(2, 1000, 5000),
		'amount' => $generator->randomFloat(2, 1000, 5000),
		'amortisation' => $generator->randomFloat(2, 1000, 5000),
		'interest' => $generator->randomFloat(2, 1000, 5000),
		'balance_due' => $generator->randomFloat(2, 1000, 5000),
		'status' => $generator->randomElement(LoanInstallment::STATUSES)
	];
});

// invoices
$factory->define(Invoice::class, function () use ($generator) {
	$installment = LoanInstallment::inRandomOrder()->first();

	return [
		'loan_installment_id' => $installment->id,
		'payment_date' => $generator->dateTime,
		'uuid' => '38e16c3b-1f5e-4312-9f90-242b30982791',
		'code' => str_random(),
		'link' => $generator->url,
		'expiration_date' => $generator->date()
	];
});

// invoice_modifiers
$factory->define(InvoiceModifier::class, function () use ($generator) {
	$invoice = Invoice::inRandomOrder()->first();
	$invoice = Invoice::inRandomOrder()->first();

	return [
		'invoice_id' => $invoice->id,
		'value' => $generator->randomFloat(2, 100, 1000),
		'description' => substr($generator->text, 0, 100)
	];
});

// bank_accounts
$factory->define(BankAccount::class, function () use ($generator) {
	$bank = Bank::inRandomOrder()->first();

	return [
		'bank_id' => $bank->id,
		'agency_number' => $generator->randomNumber(5),
		'account_number' => $generator->randomNumber(7),
		'owner' => $generator->name,
		'type' => $generator->randomElement(BankAccount::TYPES)
	];
});

// company_bank_accounts
$factory->define(CompanyBankAccount::class, function () use ($generator) {
	$account = BankAccount::inRandomOrder()->first();

	return [
		'bank_account_id' => $account->id
	];
});

// user_bank_accounts
$factory->define(UserBankAccount::class, function () use ($generator) {
	$user = User::inRandomOrder()->first();

	return [
		'user_id' => $user->id,
		'bank_account_id' => factory(BankAccount::class)->create()->id
	];
});

// investments
$factory->define(Investment::class, function () use ($generator) {
	$user = User::inRandomOrder()->first();
	$contract = Contract::inRandomOrder()->first();
	$companyBankAccount = CompanyBankAccount::inRandomOrder()->first();

	return [
		'user_id' => $user->id,
		'contract_id' => $contract->id,
		'company_bank_account_id' => $companyBankAccount->id,
		'amount' => $generator->randomFloat(2, 10000, 50000),
		'total_earnings' => $generator->randomFloat(2, 10000, 50000),
		'num_installments' => rand(12, 48),
		'monthly_rate' => $generator->randomFloat(3, 0.01, 0.2),
		'status' => $generator->randomElement(Investment::STATUSES),
		'payment_day' => $generator->numberBetween(1, 31)
	];
});

// investment_installments
$factory->define(InvestmentInstallment::class, function () use ($generator) {
	$investment = Investment::inRandomOrder()->first();

	return [
		'investment_id' => $investment->id,
		'date' => $generator->date(),
		'net_interest' => $generator->randomFloat(2, 1000, 5000),
		'returned_amount' => $generator->randomFloat(2, 1000, 5000),
		'gross_installment' => $generator->randomFloat(2, 1000, 5000),
		'accumulated_roi' => $generator->randomFloat(2, 1000, 5000),
		'income_tax_rate' => $generator->randomFloat(3, 0.01, 0.3),
		'income_tax_discount' => $generator->randomFloat(2, 1000, 5000),
		'net_installment' => $generator->randomFloat(2, 1000, 5000)
	];
});

// transfers
$factory->define(Transfer::class, function () use ($generator) {
	$installment = InvestmentInstallment::inRandomOrder()->first();
	$companyAcc = CompanyBankAccount::inRandomOrder()->first();
	$userAcc = UserBankAccount::inRandomOrder()->first();

	return [
		'investment_installment_id' => $installment->id,
		'company_bank_account_id' => $companyAcc->id,
		'user_bank_account_id' => $userAcc->id,
		'amount' => $generator->randomFloat(2, 5000, 10000),
		'description' => str_random()
	];
});

// transfer_modifiers
$factory->define(TransferModifier::class, function () use ($generator) {
    $transfer = Transfer::inRandomOrder()->first();

	return [
		'transfer_id' => $transfer->id,
		'description' => substr($generator->text, 0, 100),
		'value' => $generator->randomFloat(2, 50, 500)
	];
});

// parameters
$factory->define(Parameter::class, function () use ($generator) {
	return [
		'key' => str_random(),
		'value' => str_random(),
		'type' => $generator->randomElement(Parameter::TYPES),
		'alias' => substr($generator->text, 0, 100)
	];
});

// income_tax_rates
$factory->define(IncomeTaxRate::class, function () use ($generator) {
	$min = $generator->randomFloat(2, 100, 5000);
	$max = $generator->randomFloat(2, $min, 5000);
	$rate = $generator->randomFloat(3, 0.01, 0.2);

	return [
		'min' => $min,
		'max' => $max,
		'rate' => $rate
	];
});

// score_rates
$factory->define(ScoreRate::class, function () use ($generator) {
	$min = $generator->randomFloat(2, 100, 5000);
	$max = $generator->randomFloat(2, $min, 5000);
	$rate = $generator->randomFloat(3, 0.01, 0.2);

	return [
		'min' => 0,
		'max' => 100000,
		'rate' => $rate
	];
});

// password_resets
$factory->define(PasswordReset::class, function () use ($generator) {
	return [
		'email' => $generator->email,
		'token' => str_random()
	];
});

// investment_rates
$factory->define(InvestmentRate::class, function () use ($generator) {
	return [
		'rate' => $generator->randomFloat(),
		'contract_template' => str_random(16)
	];
});

// faq_categories
$factory->define(Categorie::class, function () use ($generator) {
	return [
		'title' => $generator->name
	];
});

// faq
$factory->define(FAQ::class, function () use ($generator) {
	$categorie = Categorie::inRandomOrder()->first();

	return [
		'faq_categorie_id' => $categorie->id,
		'question' => $generator->name,
		'answer' => $generator->text
	];
});