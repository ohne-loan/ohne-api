<?php

namespace App\Services;

use App\Exceptions\ApiException;
use App\Models\Loan;
use App\Models\LoanInstallment;
use App\Models\Parameter;
use App\Models\ScoreCheck;
use App\Models\User;
use App\Models\BankAccount;
use App\Models\UserBankAccount;
use App\Models\Bank;
use App\Models\LoanObservation;
use App\Models\LoanTag;
use App\Mail\RejectedLoanMail;
use App\Mail\AcceptedLoanMail;
use App\Services\LoanSimulatedService;
use App\Services\TopazioService;
use App\Services\FinanceService;
use App\Services\InvoiceService;
use App\Services\LoanTagService;
use Carbon\Carbon;
use http\Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use DateTime;
use stdClass;

class LoanService
{
    /**
     * @var ContractsService
     */
    private $contractsService;

    /**
     * @var FinancialProductService
     */
    private $financialProductService;

    /**
     * @var BackgroundCheckService
     */
    private $backgroundCheckService;

    /**
     * @var LoanSimulatedService
     */
    private $loanSimulatedService;

    /**
     * @var TopazioService
     */
    private $topazioService;

    /**
     * @var FinanceService
     */
    private $financeService;

    /**
     * @var InvoiceService
     */
    private $invoiceService;

    /**
     * @var LoanTagService
     */
    private $loanTagService;

    public function __construct(
        ContractsService $contractsService,
        FinancialProductService $financialProductService,
        BackgroundCheckService $backgroundCheckService,
        LoanSimulatedService $loanSimulatedService,
        TopazioService $topazioService,
        FinanceService $financeService,
        InvoiceService $invoiceService,
        LoanTagService $loanTagService
    ) {
        $this->contractsService = $contractsService;
        $this->financialProductService = $financialProductService;
        $this->backgroundCheckService = $backgroundCheckService;
        $this->loanSimulatedService = $loanSimulatedService;
        $this->topazioService = $topazioService;
        $this->financeService = $financeService;
        $this->invoiceService = $invoiceService;
        $this->loanTagService = $loanTagService;
    }

    public function all($perPage, $status, $loanTag)
    {
        $query = Loan::query();
        $status = !is_array($status) ? [$status] : $status;
        $this->filterByQuery($query, $status, $loanTag);

        $loans = $query->with('user')
            ->orderByRaw('CASE ' .
                    'WHEN loans.status=\'PENDING_PRE_APPROVAL\' THEN 1 ' .
                    'WHEN loans.status=\'PENDING_APPROVAL\' THEN 2 ' .
                    'WHEN loans.status=\'WAIT_SIGN\' THEN 3 ' .
                    'WHEN loans.status=\'IN_PROGRESS\' THEN 4 ' .
                    'WHEN loans.status=\'FINISHED\' THEN 5 ' .
                    'ELSE 6 END')
                ->orderBy('loans.updated_at', 'DESC')
                ->paginate($perPage);

        return $loans;
    }

    private function filterByQuery($query, array $status, $loanTag)
    {
        if (request()->has('status')) {
            $query->whereIn('status', $status);
        }
        if (request()->has('user_name') && strlen(request()->get('user_name')) >= 4) {
            $query->join('users as u', 'u.id', 'loans.user_id')
                ->where('u.name', 'like', request()->get('user_name') . '%');
        }
        if (request()->has('loanTag')) {
            $query->whereRaw("(SELECT tag FROM loan_tags WHERE loan_id = loans.id) = " . "'" . $loanTag . "'");
        }
    }

    /**
     * @param Loan $loan
     * @return Collection
     */
    public function calculateInstallments(Loan $loan): Collection
    {
        $installmentValue = $loan->installment_value;

        $total = $installmentValue * $loan->num_installments;

        $balance = $loan->amount;
        $balance_due = $total;

        $installments = new Collection();

        for ($i = 0; $i < $loan->num_installments; $i++) {
            $interest = $balance * \divideByOneHundred(($loan->monthly_effective_cost));
            $amortisation = $installmentValue - $interest;
            $balance = $balance - $amortisation;
            $balance_due = $balance_due - $installmentValue;

            $installment = new LoanInstallment();
            $installment->balance = $balance;
            $installment->amount = $installmentValue;
            $installment->amortisation = $amortisation;
            $installment->interest = $interest;
            $installment->balance_due = $balance_due;
            $installment->status = LoanInstallment::PENDING;

            $installments->push($installment);
        }

        return $installments;
    }

    public function getSimulatedInstallments(int $userId)
    {
        $installments = $this->loanSimulatedService->getInstallments($userId);

        if (!isset($installments)) {
            return null;
        }

        $installmentsWithStatusPending = new Collection();

        foreach ($installments as $installmentSimulated) {
            $installment = new LoanInstallment();
            $installment->balance = $installmentSimulated->balance;
            $installment->amount = $installmentSimulated->amount;
            $installment->amortisation = $installmentSimulated->amortisation;
            $installment->interest = $installmentSimulated->interest;
            $installment->balance_due = $installmentSimulated->balance_due;
            $installment->date = $installmentSimulated->date;
            $installment->number = $installmentSimulated->number;
            $installment->status = LoanInstallment::PENDING;

            $installmentsWithStatusPending->push($installment);
        }

        return $installmentsWithStatusPending;
    }

    public function calculateDischarge(Loan $loan): Collection
    {
        $current_debt_amount = money($loan->installments()
                ->where('status', '<>', LoanInstallment::PAID)
                ->sum('loan_installments.amount'));

        $total = $loan->current_debt_amount;

        $balance = $loan->amount;
        $balance_due = $total;

        $collection = new Collection();

        $interest = $balance * \divideByOneHundred(($loan->monthly_effective_cost));
        $amortisation = $current_debt_amount - $interest;
        $balance = $balance - $amortisation;
        $balance_due = $balance_due - $current_debt_amount;

        $discharge = new LoanInstallment();
        $discharge->balance = $balance;
        $discharge->amount = $current_debt_amount;
        $discharge->amortisation = $amortisation;
        $discharge->interest = $interest;
        $discharge->balance_due = $balance_due;
        $discharge->status = LoanInstallment::PENDING;
        $discharge->is_discharge = true;
        $collection->push($discharge);

        return $collection;
    }

    /**
     * @param Loan $loan
     * @return float
     */
    public function calculateInstallmentValue(Loan $loan): float
    {
        $installmentMonthlyValue = (1 + $loan->monthly_rate) ** $loan->num_installments;
        return ($loan->amount / (($installmentMonthlyValue - 1) / ($installmentMonthlyValue * $loan->monthly_rate)));
    }

    /**
     * @param Loan $loan
     * @param User $user
     * @param Collection $installments
     * @return \App\Models\Contract
     * @throws \Exception
     */
    public function createContract(Loan $loan, User $user, Collection $installmentsCollection)
    {
        $installments = $installmentsCollection->toArray();

        $bankAccount = $user->bankAccounts()->first();
        $name = "Contrato Empréstimo #{$loan->id}";
        setlocale(LC_MONETARY, 'en_US');

        $template = Parameter::get('loan.contract.template.topazio');

        $params = [
            "NUMERO_CCB" => $loan->id,
            "NOME_COMPLETO" => $user->name,
            "CPF" => $user->cpf,
            "ENDERECO" => $user->address->address . ', ' . $user->address->number . ', '. $user->address->neighborhood . ', '. $user->address->city . ' - '. $user->address->state,
            "DATA_EMISSAO" => Carbon::now()->format('d/m/Y'),
            "VALOR_PRINCIPAL" => number_format($loan->amount, 2, ',', '.'),
            "VALOR_LIBERADO" => number_format($loan->amount, 2, ',', '.'),
            "VALOR_JUROS" => number_format(money($installmentsCollection->sum('amount') - $loan->amount), 2, ',', '.'),
            "TAXA_JUROS_AO_MES" => $loan->monthly_effective_cost,
            "TAXA_JUROS_AO_ANO" => $loan->annual_effective_cost,
            "IOF" => number_format(money($loan->iof_value), 2, ',', '.'),
            "VALOR_TOTAL_CEDULA" => number_format(money($loan->amount + $loan->iof_value), 2, ',', '.'),
            "CET_AO_MES" => $loan->monthly_cet_rate,
            "CET_AO_ANO" => $loan->cet_rate,
            "DATA_POR_EXTENSO" => dataPorExtenso(),
            "VALOR_TOTAL_PARCELAS" => number_format(money($installmentsCollection->sum('amount')), 2, ',', '.'),

            "BANCO" => $bankAccount->bank->name,
            "AGENCIA" => $bankAccount->agency_number,
            "CONTA" => $bankAccount->account_number,

            "PARCELA_1" => $this->fillInstallmentNumber(1, $installments),
            "VENCIMENTO_PARCELA_1" => $this->fillInstallmentDueDate(1, $installments),
            "VALOR_PARCELA_1" => $this->fillInstallmentValue(1, $installments),

            "PARCELA_2" => $this->fillInstallmentNumber(2, $installments),
            "VENCIMENTO_PARCELA_2" => $this->fillInstallmentDueDate(2, $installments),
            "VALOR_PARCELA_2" => $this->fillInstallmentValue(2, $installments),

            "PARCELA_3" => $this->fillInstallmentNumber(3, $installments),
            "VENCIMENTO_PARCELA_3" => $this->fillInstallmentDueDate(3, $installments),
            "VALOR_PARCELA_3" => $this->fillInstallmentValue(3, $installments),

            "PARCELA_4" => $this->fillInstallmentNumber(4, $installments),
            "VENCIMENTO_PARCELA_4" => $this->fillInstallmentDueDate(4, $installments),
            "VALOR_PARCELA_4" => $this->fillInstallmentValue(4, $installments),
            
            "PARCELA_5" => $this->fillInstallmentNumber(5, $installments),
            "VENCIMENTO_PARCELA_5" => $this->fillInstallmentDueDate(5, $installments),
            "VALOR_PARCELA_5" => $this->fillInstallmentValue(5, $installments),

            "PARCELA_6" => $this->fillInstallmentNumber(6, $installments),
            "VENCIMENTO_PARCELA_6" => $this->fillInstallmentDueDate(6, $installments),
            "VALOR_PARCELA_6" => $this->fillInstallmentValue(6, $installments),

            "PARCELA_7" => $this->fillInstallmentNumber(7, $installments),
            "VENCIMENTO_PARCELA_7" => $this->fillInstallmentDueDate(7, $installments),
            "VALOR_PARCELA_7" => $this->fillInstallmentValue(7, $installments),

            "PARCELA_8" => $this->fillInstallmentNumber(8, $installments),
            "VENCIMENTO_PARCELA_8" => $this->fillInstallmentDueDate(8, $installments),
            "VALOR_PARCELA_8" => $this->fillInstallmentValue(8, $installments),

            "PARCELA_9" => $this->fillInstallmentNumber(9, $installments),
            "VENCIMENTO_PARCELA_9" => $this->fillInstallmentDueDate(9, $installments),
            "VALOR_PARCELA_9" => $this->fillInstallmentValue(9, $installments),

            "PARCELA_10" => $this->fillInstallmentNumber(10, $installments),
            "VENCIMENTO_PARCELA_10" => $this->fillInstallmentDueDate(10, $installments),
            "VALOR_PARCELA_10" => $this->fillInstallmentValue(10, $installments),

            "PARCELA_11" => $this->fillInstallmentNumber(11, $installments),
            "VENCIMENTO_PARCELA_11" => $this->fillInstallmentDueDate(11, $installments),
            "VALOR_PARCELA_11" => $this->fillInstallmentValue(11, $installments),

            "PARCELA_12" => $this->fillInstallmentNumber(12, $installments),
            "VENCIMENTO_PARCELA_12" => $this->fillInstallmentDueDate(12, $installments),
            "VALOR_PARCELA_12" => $this->fillInstallmentValue(12, $installments),

            "PARCELA_13" => $this->fillInstallmentNumber(13, $installments),
            "VENCIMENTO_PARCELA_13" => $this->fillInstallmentDueDate(13, $installments),
            "VALOR_PARCELA_13" => $this->fillInstallmentValue(13, $installments),

            "PARCELA_14" => $this->fillInstallmentNumber(14, $installments),
            "VENCIMENTO_PARCELA_14" => $this->fillInstallmentDueDate(14, $installments),
            "VALOR_PARCELA_14" => $this->fillInstallmentValue(14, $installments),

            "PARCELA_15" => $this->fillInstallmentNumber(15, $installments),
            "VENCIMENTO_PARCELA_15" => $this->fillInstallmentDueDate(15, $installments),
            "VALOR_PARCELA_15" => $this->fillInstallmentValue(15, $installments),

            "PARCELA_16" => $this->fillInstallmentNumber(16, $installments),
            "VENCIMENTO_PARCELA_16" => $this->fillInstallmentDueDate(16, $installments),
            "VALOR_PARCELA_16" => $this->fillInstallmentValue(16, $installments),

            "PARCELA_17" => $this->fillInstallmentNumber(17, $installments),
            "VENCIMENTO_PARCELA_17" => $this->fillInstallmentDueDate(17, $installments),
            "VALOR_PARCELA_17" => $this->fillInstallmentValue(17, $installments),

            "PARCELA_18" => $this->fillInstallmentNumber(18, $installments),
            "VENCIMENTO_PARCELA_18" => $this->fillInstallmentDueDate(18, $installments),
            "VALOR_PARCELA_18" => $this->fillInstallmentValue(18, $installments)
        ];

        $contract = $this->contractsService->createContract($loan, $name, $template, $params);

        $this->contractsService->addSignatories($contract, [$user->email]);

        $this->contractsService->sendToSigners($contract);

        $this->contractsService->setWebHook($contract);

        return $contract;
    }

    private function fillInstallmentDueDate(int $numberInstallment, $installments)
    {
        $installment = tryGetValueArray($installments, $numberInstallment - 1);

        if (!isset($installment)) {
            return '';
        }

        $date = new DateTime($installment['date']);

        return $date->format('d/m/Y');
    }

    private function fillInstallmentValue(int $numberInstallment, $installments)
    {
        $installment = tryGetValueArray($installments, $numberInstallment - 1);

        if (!isset($installment)) {
            return '';
        }

        return 'R$ ' . number_format(money($installment['amount']), 2, ',', '.');
    }

    private function fillInstallmentNumber(int $number, $installments)
    {
        $installment = tryGetValueArray($installments, $number - 1);

        if (!isset($installment)) {
            return '';
        }
        
        return $number;
    }

    /**
     * @param User $user
     * @return Loan|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Query\Builder
     */
    public function getCurrentLoan(User $user)
    {
        return Loan::query()
            ->where('user_id', $user->id)
            ->with([
                'contract',
            ])
            ->latest()
            ->first();
    }

    public function getInstallments(Loan $loan)
    {
        return $loan->installments()
            ->with([
                'invoices',
            ])
            ->orderBy('date')
            ->get();
    }

    public function find(User $user, int $id)
    {
        return LoanInstallment::query()
            ->belongsTo($user)
            ->findOrFail($id);
    }

    public function hasLoan(User $user)
    {
        return Loan::query()
            ->where('user_id', $user->id)
            ->exists();
    }

    public function getLastLoan(User $user)
    {
        $loan = Loan::query()
            ->where('user_id', $user->id)
            ->latest()
            ->first();

        return $loan;
    }

    public function loanIsActive(Loan $loan)
    {
        if (in_array($loan->status, Loan::ACTIVE_GROUP_ARRAY)) {
            return true;
        }

        return false;
    }

    public function loanBeingRegistered(Loan $loan)
    {
        return $loan->status === Loan::USER_REGISTERING;
    }

    public function loanRequestedMoreThan90Days(Loan $loan)
    {
        $now = Carbon::now()->startOfDay();
        $created = Carbon::parse($loan->created_at)->startOfDay();

        $days = $now->diff($created)->days;

        return $days > 90;
    }

    public function hasRejectedLoan90Days(User $user)
    {
        return ScoreCheck::query()
            ->where('user_id', $user->id)
            ->whereRaw('(status = \'REPROVADO\' OR (status = \'PENDENTE\' AND score IS NULL))')
            ->whereRaw('DATE_PART(\'day\', now() - created_at) <= 90')
            ->exists();
    }

    /**
     * @param User $user
     * @param array $data
     * @return void
     * @throws \Exception
     */
    public function store(User $user, array $data) : int
    {
        $loan = Loan::firstOrNew([
            'user_id' => $user->id,
            'status' => Loan::USER_REGISTERING
        ]);

        $loan->fill($data);
        $loan->user_id = $user->id;
        $loan->saveOrFail();

        return $loan->id;
    }

    public function preApprove(Loan $loan) : void
    {
        try {
            DB::beginTransaction();

            $loan->status = Loan::PENDING_APPROVAL;
            $loan->save();

            $this->loanTagService->store($loan->id, LoanTag::AMC);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw new ApiException($e->getMessage(), 422);
        }
    }

    /**
     * @param Loan $loan
     * @return Loan
     * @throws ApiException
     * @throws \Exception
     */
    public function acceptLoan(Loan $loan)
    {
        $loanIsPending = $loan->status === Loan::PENDING_APPROVAL;

        if (!$loanIsPending) {
            throw new ApiException("Este empréstimo não está pendente de aprovação.", 422);
        }

        try {
            DB::beginTransaction();

            $user = $loan->user;
            $loanTag = $loan->tag->tag;

            $nextWorkDay = $this->topazioService->getNextWorkDay($loanTag);
            $nextWorkDay->addDay();
            
            $nextWorkDayString = $nextWorkDay->format('Y-m-d');
            $firstDueDate = $nextWorkDay;

            $loan->expiration_day = $firstDueDate->day;

            $this->changeDueDateInstallments($loan, $nextWorkDayString);

            $loanInstallments = $loan->installments()->orderBy('number')->get();

            $contract = $this->createContract($loan, $user, $loanInstallments);

            $loan->status = Loan::WAIT_SIGN;
            $loan->contract_id = $contract->id;
            $loan->save();

            $userBankAccount = UserBankAccount::where("user_id", $loan->user_id)->first();
            $bankAccount = BankAccount::find($userBankAccount->bank_account_id);
            $bank = Bank::find($bankAccount->bank_id);
            $contactLink = env("APP_URL") . "/fale-conosco/";

            $firstDueDate->addMonth();

            $this->sendAcceptedLoanMail($user, $loan, $bankAccount, $bank, $contactLink, $firstDueDate);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            \handle($e, "Erro ao gerar contrato", 422, true);
        }

        return $loan;
    }

    /**
     * @param $loan
     * @throws ApiException
     */
    public function rejectLoan($loan)
    {
        $this->_rejectLoan($loan, Loan::REJECTED);
    }

    /**
     * @param $loan
     * @throws ApiException
     */
    public function rejectLoanByPartner($loan)
    {
        $this->_rejectLoan($loan, Loan::REJECTED_BY_PARTNER);
    }

    /**
     * @param $loan
     * @throws ApiException
     */
    private function _rejectLoan($loan, $status)
    {
        try {
            DB::beginTransaction();

            $loan->status = $status;
            $loan->save();

            $user = User::find($loan->user_id);

            $this->sendRejectedLoanMail($user);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw new ApiException($e->getMessage(), 422);
        }
    }

    public function getExtraData(Loan $loan)
    {
        $loan->total_amount = money($loan->amount + $loan->iof_value);
        $loan->paid_installments = $loan->installments()->where('loan_installments.status', LoanInstallment::PAID)->count();
        $loan->pending_installments = $loan->installments()->where('loan_installments.status', '<>', LoanInstallment::PAID)->count();
        $loan->arrear_installments = $loan->installments()->whereIn('loan_installments.status', [ LoanInstallment::ARREAR, LoanInstallment::ACCELERATED ])->count() > 0 ? 'Sim' : 'Não';
        $loan->has_arrear_installments_more_than_90_days = $loan->installments()
            ->whereIn('loan_installments.status', [ LoanInstallment::ARREAR, LoanInstallment::ACCELERATED ])
            ->whereRaw('DATE_PART(\'day\', now() - loan_installments.date) >= 90')
            ->count() > 0 ? true : false;

        $installments = $loan->installments;
        $lastInvoice = null;
        $loan->has_invoice_issued_in_last_24_hours = false;

        foreach ($installments as $installment) {
            if ($loan->has_invoice_issued_in_last_24_hours === true) {
                break;
            }

            if (count($installment->invoiceInstallments) === 0) {
                continue;
            }

            $invoiceIssuedInLastDay = $installment->invoiceInstallments->last()->invoice()
                ->where('issued_by_client', true)
                ->whereRaw('DATE_PART(\'day\', now() - created_at) <= 1')
                ->first();

            if ($invoiceIssuedInLastDay === null) {
                continue;
            }

            $loan->has_invoice_issued_in_last_24_hours = true;
            $loan->invoice_issued_in_last_24_hours_link = $invoiceIssuedInLastDay->link;
        }
        
        $loan->paid_amount = money($loan->installments()->where('loan_installments.status', LoanInstallment::PAID)->sum('loan_installments.amount'));
        $loan->total_debt_amount = money($loan->amount_effective_cost);
        
        $currentInstallment = $loan->installments()->where('loan_installments.date', '>=', Carbon::today()->day(1))->orderBy('number')->first();

        if ($currentInstallment != null) {
            $loan->expiration_next_installment = $currentInstallment->date;
        } else {
            $date = Carbon::today()->day($loan->expiration_day);
            $date->month++;

            $loan->expiration_next_installment = $date;
        }

        if ($loan->pending_installments == 0) {
            $loan->pending_installments = $loan->num_installments;
        }
        
        $loan->current_debt_amount = money($loan->installments()->where('loan_installments.status', '<>', LoanInstallment::PAID)->sum('loan_installments.amount'));
        $loan->discharge_percentage = $loan->total_amount != 0 ? money(($loan->paid_amount * 100) / $loan->total_amount) : 0;

        $loan->accumulated_rate = money($loan->installments()->where('loan_installments.status', LoanInstallment::PAID)->sum('loan_installments.interest'));

        return $loan;
    }

    public function getPaymentDetails(Loan $loan, Collection $installments, string $paymentDate)
    {
        $installmentsResource = [];

        $installmentsAmount = $this->financeService->getInstallmentsAmount($loan, $installments, $paymentDate);

        for ($i=0; $i < count($installments); $i++) {
            $installmentsResource[$i] = new stdClass();
            $installmentsResource[$i]->id = $installments[$i]->id;
            $installmentsResource[$i]->number = $installments[$i]->number;
            $installmentsResource[$i]->date = $installments[$i]->date;
            $installmentsResource[$i]->amount = $installments[$i]->amount;
            $installmentsResource[$i]->status = $installments[$i]->status;

            $installmentsResource[$i]->payment_amount = 0;
            $installmentsResource[$i]->fine_amount = 0;
            $installmentsResource[$i]->interest_amount = 0;
            $installmentsResource[$i]->difference_amount = 0;
            $installmentsResource[$i]->accumulated_amount = 0;
            $installmentsResource[$i]->invoice_link = null;

            $invoice = $this->invoiceService->getLastPayableOrPaidInvoiceByInstallmentId($installments[$i]->id);

            if ($invoice !== null) {
                $installmentsResource[$i]->invoice_link = $invoice->link;
            }

            if ($installmentsResource[$i]->status === LoanInstallment::PAID || $invoice !== null) {
                $installmentsResource[$i]->payment_amount = 0;
                $installmentsResource[$i]->fine_amount = 0;
                $installmentsResource[$i]->interest_amount = 0;
                $installmentsResource[$i]->difference_amount = 0;
                $installmentsResource[$i]->accumulated_amount = 0;
            } else {
                foreach ($installmentsAmount as $installmentAmount) {
                    if ($installmentAmount->installmentId === $installmentsResource[$i]->id) {
                        $installmentsResource[$i]->payment_amount = $installmentAmount->installmentAmount;
                        $installmentsResource[$i]->fine_amount = $installmentAmount->fineAmount;
                        $installmentsResource[$i]->interest_amount = $installmentAmount->interestAmount;
                    }
                }
    
                $installmentsResource[$i]->difference_amount = $installmentsResource[$i]->payment_amount - $installmentsResource[$i]->amount;
    
                if ($i > 0 && $installmentsResource[$i-1]->status !== LoanInstallment::PAID) {
                    $installmentsResource[$i]->accumulated_amount = $installmentsResource[$i-1]->accumulated_amount + $installmentsResource[$i]->payment_amount;
                } else {
                    $installmentsResource[$i]->accumulated_amount = $installmentsResource[$i]->payment_amount;
                }
    
                $installmentsResource[$i]->accumulated_amount = (float)$installmentsResource[$i]->accumulated_amount;
            }

            switch ($installmentsResource[$i]->status) {
                    case LoanInstallment::PAID:
                        $installmentsResource[$i]->status = "Paga";
                        break;
                    case LoanInstallment::PENDING:
                        $installmentsResource[$i]->status = "Pendente";
                        break;
                    case LoanInstallment::ARREAR:
                        $installmentsResource[$i]->status = "Vencida";
                        break;
                    case LoanInstallment::ACCELERATED:
                        $installmentsResource[$i]->status = "Acelerada";
                        break;
                    default:
                        $installmentsResource[$i]->status = "Outro";
                        break;
            }
        }

        $paymentDetails = new stdClass();
        $paymentDetails->id = $loan->id;
        $paymentDetails->installmentsResource = $installmentsResource;

        return $paymentDetails;
    }

    private function sendRejectedLoanMail(User $user)
    {
        $mail = new RejectedLoanMail($user);
        Mail::to($user->email)->send($mail);
    }

    private function sendAcceptedLoanMail(User $user, Loan $loan, BankAccount $bankAccount, Bank $bank, string $contactLink, Carbon $firstDueDate)
    {
        $mail = new AcceptedLoanMail($user, $loan, $bankAccount, $bank, $contactLink, $firstDueDate);
        Mail::to($user->email)->send($mail);
    }

    public function addObservation(array $observationArray)
    {
        $loanObservation = new LoanObservation();

        $loanObservation->fill($observationArray);
        $loanObservation->saveOrFail();

        return $loanObservation;
    }

    private function changeLoanAmount(int $loanId, float $amount, int $numInstallments = 0) : Loan
    {
        try {
            $loan = Loan::find($loanId);

            $user = $loan->user;

            $scoreCheck = $this->backgroundCheckService->getLatestScore($user, ScoreCheck::ALPHA);

            $monthlyRate = $this->financialProductService->getRateFromScoreCheck($scoreCheck);

            $customerInternalMonthlyRate = adjustDecimalPlaces(multiplyByOneHundred($monthlyRate));

            $numInstallments = $numInstallments > 0 ? $numInstallments : $loan->num_installments;

            $loanSimulated = $this->loanSimulatedService->simulate(
                $amount,
                $numInstallments,
                $customerInternalMonthlyRate,
                $user->id
            );

            $loan->amount = $amount;
            $loan->installment_value = $loanSimulated->installment_value;
            $loan->num_installments = $numInstallments;
            $loan->monthly_rate = $loanSimulated->monthly_customer_rate;
            $loan->yearly_rate = divideByOneHundred($loanSimulated->yearly_customer_rate);
            $loan->monthly_effective_cost = $loanSimulated->monthly_customer_rate;
            $loan->annual_effective_cost = $loanSimulated->yearly_customer_rate;
            $loan->amount_effective_cost = $loanSimulated->gross_value;
            $loan->monthly_cet_rate = $loanSimulated->monthly_cet_rate;
            $loan->cet_rate = $loanSimulated->total_cet_rate;
            $loan->iof_value = $loanSimulated->iof_value;
            $loan->expiration_day = date("d", strtotime($loanSimulated->first_due_date));
            $loan->save();

            $loan->installments()->delete();
            $installments = $this->getSimulatedInstallments($user->id);
            $installmentsWithDateAdjusted = $this->financialProductService->createInstallments($installments, $loan->expiration_day);
            $loan->installments()->saveMany($installmentsWithDateAdjusted);

            return $loan;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    private function changeDueDateInstallments(Loan $loan, string $firstDueDate)
    {
        $newFirstDueDate = new Carbon($firstDueDate);
        $newFirstDueDate->addMonth();

        $installments = $loan->installments()->orderBy('number')->get();

        foreach ($installments as $installment) {
            $installment->date = $newFirstDueDate;
            $installment->updated_at = Carbon::now();
            $installment->save();

            $newFirstDueDate->addMonth();
        }
    }

    public function patch(array $requestArray) : Loan
    {
        try {
            DB::beginTransaction();

            $loanId = $requestArray['loan_id'];

            $loan = Loan::find($loanId);

            if ($loan->status != Loan::PENDING_PRE_APPROVAL) {
                throw new ApiException("Ops, só é permitido editar empréstimos pendentes", 422);
            }

            if (str_contains($requestArray['amount'], ",")) {
                $newAmount = \money($requestArray['amount'], true);
            } else {
                $newAmount = \money($requestArray['amount']);
            }
             
            $newNumInstallments = $requestArray['num_installments'];

            if ($newAmount < 1000 || $newAmount > 40000) {
                throw new ApiException("Ops, o valor do empréstimo deve estar entre 1.000 e 40.000", 422);
            }

            if ($newNumInstallments < 1 || $newNumInstallments > 18) {
                throw new ApiException("Ops, o número de parcelas deve estar entre 1 e 18", 422);
            }

            if ($loan->amount != $newAmount) {
                activity('Atualização dos dados do empréstimo')
                    ->performedOn($loan)
                    ->causedBy(Auth::user())
                    ->log(":causer.name modificou o valor do empréstimo :subject.id de R$:subject.amount para R$" . $newAmount);

                $loan = $this->changeLoanAmount($loanId, $newAmount);
            }

            if ($loan->num_installments != $newNumInstallments) {
                activity('Atualização dos dados do empréstimo')
                    ->performedOn($loan)
                    ->causedBy(Auth::user())
                    ->log(":causer.name modificou a quantidade de parcelas do empréstimo :subject.id de :subject.num_installments para " . $newNumInstallments);

                $loan = $this->changeLoanAmount($loanId, $newAmount, $newNumInstallments);
            }

            DB::commit();

            return $loan;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
