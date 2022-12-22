<?php

namespace App\Services;

use App\Models\Loan;
use Illuminate\Support\Collection;
use App\Libraries\Finance\Client;
use stdClass;

class FinanceService
{
    /**
     * @var Client $client
     */
    private $client;
    
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Calculate the installments amount
     * @param Loan $loan
     * @param Collection $installments
     * @param string $paymentDate
     */
    public function getInstallmentsAmount(
        Loan $loan,
        Collection $installments,
        string $paymentDate
    ) {
        try {
            $result = $this->client->calculateInstallmentsAmount($loan, $installments, $paymentDate);

            return $result;
        } catch (\Exception $ex) {
            handle($ex, 'Erro ao calcular o valor das parcelas', 500, true);
        }
    }
}
