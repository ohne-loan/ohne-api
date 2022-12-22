<?php


namespace App\Services;

use DateTime;
use Illuminate\Support\Collection;

class IOFService
{
    const PERCENTAGE_IOF_AMOUNT = 0.0038;
    const PERCENTAGE_IOF_DAILY = 0.0082;
    const MAXIMUM_PERCENTAGE_IOF_ON_INSTALLMENT_VALUE = 0.03;

    public function getIOFValue(float $amount, Collection $installments) : float
    {        
        $currentDate = date('Y-m-d');

        $iOFAmount = $this->getIOFAmountValue($amount, self::PERCENTAGE_IOF_AMOUNT);

        $sumIOFDeadlineValue = $this->getSumIOFDeadlineValue($installments, $currentDate, self::PERCENTAGE_IOF_DAILY, 
            self::PERCENTAGE_IOF_AMOUNT, self::MAXIMUM_PERCENTAGE_IOF_ON_INSTALLMENT_VALUE);

        $iOFValue = ($amount * ($iOFAmount + $sumIOFDeadlineValue) / ($amount - ($iOFAmount + $sumIOFDeadlineValue)));

        $iOFValue = adjustDecimalPlaces($iOFValue);

        return $iOFValue;
    }

    private function getIOFDeadlineDay(string $installmentDueDate, string $releaseDate) : int
    {
        $installmentDueDateDateTime = new DateTime($installmentDueDate);
        $releaseDateDateTime = new DateTime($releaseDate);
        $deadLineInDays = $releaseDateDateTime->diff($installmentDueDateDateTime);

        return $deadLineInDays->days;
    }

    private function getIOFDeadlineValue(float $amortisation, float $percentageIOFDaily, float $iOFDeadlineDay) : float
    {
        $deadLineValue = adjustDecimalPlaces(($amortisation * ($percentageIOFDaily * $iOFDeadlineDay))/100);

        return $deadLineValue;
    }

    private function getIOFDeadlineValueAdjusted(float $iOFDeadlineValue, float $amortisation, float $maximumPercentageIOF)
    {
        $iOFMaximumAmount = adjustDecimalPlaces($amortisation * $maximumPercentageIOF);

        $deadLineValueAdjusted = 0;

        if ($iOFDeadlineValue < $iOFMaximumAmount) {
            $deadLineValueAdjusted = $iOFDeadlineValue;
        } else {
            $deadLineValueAdjusted = $iOFMaximumAmount;
        }

        return $deadLineValueAdjusted;
    }

    private function getSumIOFDeadlineValue(Collection $installments, string $currentDate, 
        float $percentageIOFDaily, float $percentageIOFAmount, float $maximumPercentageIOF)
    {
        $sumIOFDeadline = 0;

        foreach ($installments as $installment) {
            $iOFDeadlineDay = $this->getIOFDeadlineDay($installment->date, $currentDate);

            $iOFDeadlineValue = $this->getIOFDeadlineValue($installment->amortisation, $percentageIOFDaily, $iOFDeadlineDay);

            $iOFDeadlineValueAdjusted = $this->getIOFDeadlineValueAdjusted($iOFDeadlineValue, $installment->amortisation, $maximumPercentageIOF);

            $sumIOFDeadline = $sumIOFDeadline + $iOFDeadlineValueAdjusted;
        }

        return $sumIOFDeadline;
    }

    private function getIOFAmountValue(float $amount, float $percentageIOFAmount) : float
    {
        $iOFAmount = adjustDecimalPlaces($percentageIOFAmount * $amount);

        return $iOFAmount;
    }
}
