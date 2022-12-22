<?php

namespace App\Services;

use App\Services\IOFService;
use App\Services\CETService;
use App\Models\LoanSimulatedInternal;
use App\Models\LoanSimulatedInternalInstallments;
use App\Models\LoanInstallment;
use stdClass;
use Illuminate\Support\Collection;

use Carbon\Carbon;

class LoanSimulatedService
{
    /**
     * @var IOFService
     */
    private $iOFService;

    /**
     * @var CETService
     */
    private $cETService;

    public function __construct(IOFService $iOFService, CETService $cETService)
    {
        $this->iOFService = $iOFService;
        $this->cETService = $cETService;
    }

    public function simulate(float $amount, int $numInstallments, float $customerInternalMonthlyRate, int $userId) : LoanSimulatedInternal
    {
        $loan = new LoanSimulatedInternal();
        $loan->user_id = $userId;
        
        $customerInternalMonthlyRate = \divideByOneHundred($customerInternalMonthlyRate);

        $dayDueDate = now()->day;

        $firstDueDate = Carbon::create(now()->year, now()->month, $dayDueDate);
        $firstDueDate->addMonth();

        $lastDueDate = Carbon::create(now()->year, now()->month, $dayDueDate);
        $lastDueDate->addMonths($numInstallments);

        $installmentValue = $this->calculateInstallmentValue($amount, $customerInternalMonthlyRate, $numInstallments);
        
        $installments = $this->createInstallments(
            $installmentValue,
            $numInstallments,
            $amount,
            $customerInternalMonthlyRate,
            $firstDueDate
        );

        $iofZeroInitialDate = Carbon::create(2020, 4, 3);
        $iofZeroEndDate = Carbon::create(2020, 7, 3);
        $currentDate = now();

        if($currentDate >= $iofZeroInitialDate && $currentDate <= $iofZeroEndDate){
            $iOFValue = 0;
        }else{
            $iOFValue = $this->iOFService->getIOFValue($amount, $installments);
        }

        $installmentValue = $this->calculateInstallmentValue(($amount + $iOFValue), $customerInternalMonthlyRate, $numInstallments);

        $loan->num_installments = $numInstallments;
        $loan->financed_value = adjustDecimalPlaces($amount);
        $loan->installment_value = adjustDecimalPlaces($installmentValue);
        $loan->principal_value = adjustDecimalPlaces($amount + $iOFValue);
        $loan->gross_value = adjustDecimalPlaces($numInstallments * $installmentValue);
        $loan->net_value = adjustDecimalPlaces($amount);
        $loan->iof_value = adjustDecimalPlaces($iOFValue);
        $loan->monthly_customer_rate = adjustDecimalPlaces(\multiplyByOneHundred($customerInternalMonthlyRate));
        $loan->yearly_customer_rate = adjustDecimalPlaces(\multiplyByOneHundred(\rateMonthToYear($customerInternalMonthlyRate)));

        $firstDueDate = Carbon::create(now()->year, now()->month, $dayDueDate);
        $firstDueDate->addMonth();

        $dueDates = array(mktime(0, 0, 0, $firstDueDate->month-1, $firstDueDate->day, $firstDueDate->year));

        foreach ($installments as $installment) {
            $dt = $installment->date;

            array_push($dueDates, mktime(0, 0, 0, $dt->month, $dt->day, $dt->year));
        }

        $cETTotal = $this->cETService->getCETTotal($amount, $installmentValue, $numInstallments, $dueDates, $customerInternalMonthlyRate);
        $cETMonthly = $this->cETService->getCETMonthly($cETTotal);
        
        $loan->monthly_cet_rate = adjustDecimalPlaces(multiplyByOneHundred($cETMonthly));
        $loan->total_cet_rate = adjustDecimalPlaces(multiplyByOneHundred($cETTotal));

        $loan->first_due_date = $firstDueDate;
        $loan->last_due_date = $lastDueDate;

        $firstDueDate = Carbon::create(now()->year, now()->month, $dayDueDate);
        $firstDueDate->addMonth();

        $installmentsWithIofValue = $this->createInstallments(
            $installmentValue,
            $numInstallments,
            $amount,
            $customerInternalMonthlyRate,
            $firstDueDate
        );

        $this->saveSimulation($loan, $installmentsWithIofValue);

        return $loan;
    }

    public function getInstallments(int $userId)
    {
        $loanSimulated = LoanSimulatedInternal::where('user_id', $userId)
            ->orderBy('id', 'desc')
            ->first();

        if(!isset($loanSimulated)){
            return null;
        }

        return $loanSimulated->loanSimulatedInternalInstallments;
    }

    /**
     * @param int $userId
     * @return stdClass
     */
    public function getLoanSimulated(int $userId)
    {
        $response = new stdClass();

        $loanSimulated = LoanSimulatedInternal::where('user_id', $userId)
            ->orderBy('id', 'desc')
            ->first();
            
        $response->num_installments = $loanSimulated->num_installments;
        $response->amount = $loanSimulated->financed_value;
        $response->installment_value = $loanSimulated->installment_value;
        $response->monthly_effective_cost = $loanSimulated->monthly_customer_rate;
        $response->monthly_rate = $loanSimulated->monthly_customer_rate;
        $response->annual_effective_cost = $loanSimulated->yearly_customer_rate;
        $response->yearly_rate = $loanSimulated->yearly_customer_rate;
        $response->monthly_cet_rate = $loanSimulated->monthly_cet_rate;
        $response->cet_rate = $loanSimulated->total_cet_rate;
        $response->iof_value = $loanSimulated->iof_value;
        $response->amount_effective_cost = $loanSimulated->gross_value;
        $response->expiration_day = date("d", strtotime($loanSimulated->first_due_date));

        return $response;
    }

    private function saveSimulation(LoanSimulatedInternal $loanSimulated, Collection $installments)
    {
        $loanSimulated->saveOrFail();

        $localInstallments = new Collection();

        foreach ($installments as $installment) {
            $localInstallment = new LoanSimulatedInternalInstallments();
            $localInstallment->loan_simulated_internal_id = $loanSimulated->id;
            $localInstallment->balance = adjustDecimalPlaces($installment->balance);
            $localInstallment->amount = adjustDecimalPlaces($installment->amount);
            $localInstallment->amortisation = adjustDecimalPlaces($installment->amortisation);
            $localInstallment->balance_due = adjustDecimalPlaces($installment->balance_due);
            $localInstallment->interest = adjustDecimalPlaces($installment->interest);
            $localInstallment->date = $installment->date;
            $localInstallment->number = $installment->number;

            $localInstallments->push($localInstallment);
        }

        $loanSimulated->loanSimulatedInternalInstallments()->saveMany($localInstallments);
    }

    private function createInstallments(
        float $installmentValue,
        int $numInstallments,
        float $amount,
        float $customerInternalMonthlyRate,
        $firstDueDate
    ) : Collection {
        $total = $installmentValue * $numInstallments;

        $balance = $amount;
        $balance_due = $total;

        $installments = new Collection();

        $dueDate = $firstDueDate;

        for ($i = 0; $i < $numInstallments; $i++) {
            $interest = $balance * $customerInternalMonthlyRate;
            $amortisation = $installmentValue - $interest;
            $balance = $balance - $amortisation;
            $balance_due = $balance_due - $installmentValue;

            $installment = new LoanInstallment();
            $installment->balance = $balance;
            $installment->amount = $installmentValue;
            $installment->amortisation = $amortisation;
            $installment->interest = $interest;
            $installment->balance_due = $balance_due;
            $installment->date = $dueDate;
            $installment->number = $i + 1;
            $installment->status = LoanInstallment::PENDING;

            $installments->push($installment);

            $dueDate->addMonth();
        }

        return $installments;
    }

    private function calculateInstallmentValue(float $amount, float $customerInternalMonthlyRate, int $numInstallments): float
    {
        $installmentMonthlyValue = (1 + $customerInternalMonthlyRate) ** $numInstallments;
        return adjustDecimalPlaces(($amount / (($installmentMonthlyValue - 1) / ($installmentMonthlyValue * $customerInternalMonthlyRate))));
    }
}
