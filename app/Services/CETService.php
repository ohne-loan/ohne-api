<?php


namespace App\Services;

use DateTime;
use Illuminate\Support\Collection;
use App\Libraries\Nyholm\Calculator;
use App\Libraries\FinancialClass\Financial;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class CETService
{
    public function getCETMonthly(float $cETTotal)
    {
        $cETMonthly = (pow((1 + $cETTotal), (30/365)) - 1);

        return $cETMonthly;
    }

    public function getCETTotal(float $amount, float $installmentValueWithIOF, int $numInstallments, 
        $dueDatesArray, float $customerInternalMonthlyRate)
    {
        $financial = new Financial();

        $values = array(-$amount);

        for ($i=0; $i < $numInstallments; $i++) {
            array_push($values, $installmentValueWithIOF);
        }

        $totalCET = $financial->XIRR($values, $dueDatesArray);

        return $totalCET;
    }
}
