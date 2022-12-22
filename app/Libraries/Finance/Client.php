<?php

namespace App\Libraries\Finance;

use App\Models\Loan;
use Illuminate\Support\Collection;
use App\Services\HttpService;
use stdClass;

class Client
{
    /**
     * @var HttpService
     */
    private $httpService;

    /**
     * @var string
     */
    private $baseUri;

    const FINE = 0.02;
    const INTEREST = 0.01;

    public function __construct(HttpService $httpService)
    {
        $this->httpService = $httpService;
        $this->baseUri = env('OHNE_API_FINANCE_URI');
    }
    
    public function calculateInstallmentsAmount(
        Loan $loan,
        Collection $installments,
        string $paymentDate
    ) {
        $body = $this->makeBodyToCalculateInstallmentsAmount($loan, $installments, $paymentDate);
        $header = ['Content-Type' => 'application/json'];

        $uri = $this->baseUri . "v1/finance/calculateInstallmentsAmount";

        $result = $this->httpService->post($uri, $header, $body);

        return $result;
    }

    public function makeBodyToCalculateInstallmentsAmount(
        Loan $loan,
        Collection $installments,
        string $paymentDate
    ) {
        $bodyClass = new stdClass();

        $bodyClass->fine = $this::FINE;
        $bodyClass->interest = $this::INTEREST;
        $bodyClass->dischargeDate = $paymentDate;

        $bodyClass->loan = new stdClass();
        $bodyClass->loan->id = $loan->id;
        $bodyClass->loan->monthlyCetRate = $loan->monthly_cet_rate;

        $bodyClass->loan->installments = array();
        
        foreach ($installments as $installment) {
            $installmentAmount = new stdClass();

            $installmentAmount->id = $installment->id;
            $installmentAmount->date = $installment->date->format('Y-m-d');
            $installmentAmount->amount = $installment->amount;

            $bodyClass->loan->installments[] = $installmentAmount;
        }

        return $bodyClass;
    }
}
