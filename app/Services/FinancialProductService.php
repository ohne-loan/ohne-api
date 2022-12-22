<?php


namespace App\Services;

use App\Contracts\FinancialProduct;
use App\Models\ScoreRate;
use App\Models\Loan;
use App\Services\TopazioService;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class FinancialProductService
{
    /**
     * @var TopazioService
     */
    private $topazioService;

    public function __construct(
        TopazioService $topazioService
    ) {
        $this->topazioService = $topazioService;
    }

    /**
     * @param Collection $installments
     * @param int $day
     */
    public function createInstallments(Collection $installments, int $day) : Collection
    {
        $date = Carbon::create(now()->year, now()->month, $day);
		$i = 1;

        foreach ($installments as $installment) {
            $date->addMonth();

            $installment->date = $date->toDateString();
            
            $installment->number = $i;
            
            $i++;
        }

        return $installments;        
    }

    public function getRateFromScoreCheck($scoreCheck)
    {
        $scoreRate = ScoreRate::select('rate')
            ->where('min', '<=', $scoreCheck['score'])
            ->where('max', '>=', $scoreCheck['score'])
            ->firstOrFail();

        return $scoreRate->rate;
    }

    /**
     * @param Loan $loan
     */
    public function addLoan(Loan $loan)
    {
        $addWithSuccess = $this->topazioService->addLoan($loan);

        if (!$addWithSuccess) {
            $e = new \Exception("Erro ao incluir proposta");
            throw $e;
        }
    }

    public function calculateFine(float $percentageFine, float $originalAmountInstallment) : float
    {
        return $percentageFine * $originalAmountInstallment;
    }

    public function calculateInterest(float $percentageInterest, float $originalAmountInstallment, int $daysInArrears) : float
    {
        $interest = 0;

        $percentageInterestByDay = $percentageInterest / 30;

        if($daysInArrears <= 30){
            $interest = $originalAmountInstallment * $percentageInterestByDay * $daysInArrears;
        }
        else if($daysInArrears >= 30 && $daysInArrears <= 60){
            $interest = ($originalAmountInstallment * $percentageInterest) +
                ($originalAmountInstallment * $percentageInterestByDay * ($daysInArrears - 30));
        }
        else if($daysInArrears > 60 && $daysInArrears <= 90){
            $interest = (2 * ($originalAmountInstallment * $percentageInterest)) + 
                ($originalAmountInstallment * $percentageInterestByDay) *
                ($daysInArrears - 60);
        }

        return $interest;
    }
}
