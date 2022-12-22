<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\LoanSimulatedService;
use App\Services\IOFService;
use App\Services\CETService;

class LoanSimulatedServiceTest extends TestCase
{
    public function testSimulate()
    {
        $iOFService = new IOFService();
        $cETService = new CETService();
        
        $loanSimulatedService = new LoanSimulatedService($iOFService, $cETService);

        $amount = 3000;
        $numInstallments = 14;
        $customerInternalMonthlyRate = 4.43;
        $userId = 5;

        $result = $loanSimulatedService->simulate($amount, $numInstallments, $customerInternalMonthlyRate, $userId);

        $this->assertTrue(isset($result));
    }
}
