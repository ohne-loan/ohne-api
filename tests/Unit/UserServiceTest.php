<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Jobs\ProcessLoanRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Services\UserService;
use App\Services\DocumentsService;
use App\Services\LoanService;
use App\Services\ContractsService;
use App\Services\FinancialProductService;
use App\Services\BackgroundCheckService;
use App\Services\AddressService;
use App\Services\BankAccountService;
use App\Services\RgService;
use App\Services\SorocredService;
use App\Services\TopazioService;
use App\Services\MaritalStatusService;
use App\Rules\Money;
use App\Models\User;

class UserServiceTest extends TestCase
{
    public function shouldSendEmailGetLoanCompleted()
    {
        $user = new User();
        $user->id = 55;
        $user->email = 'notreve.miranda@gmail.com';
        $user->name = 'Everton Miranda de Oliveira';

        $documentService = new DocumentsService();
        $userService = new UserService($documentService);

        $user = $userService->sendGetLoanCompletedEmail($user);

        $this->assertTrue(true);
    }

    public function shouldReproveClient()
    {
        $request = new UserRegisterRequest();

        $request->name = 'Felipe Roberto Cauã da Mata';
        $request->cpf = '52321474122';
        $request->email = 'feliperobertocauadamata..feliperobertocauadamata@renoveseuseguro.com';
        $request->birthday = '1975-06-08';
        $request->terms = 'true';

        $documentService = new DocumentsService();
        $contractService = new ContractsService();
        $financialProductService = new FinancialProductService();
        $backgroundCheckService = new BackgroundCheckService();
        
        $iOFService = new IOFService();
        $cETService = new CETService();
        $loanSimulatedService = new LoanSimulatedService($iOFService, $cETService);

        $loanService = new LoanService(
            $contractService,
            $financialProductService,
            $backgroundCheckService,
            $loanSimulatedService
        );

        $userService = new UserService($documentService, 
            $backgroundCheckService, 
            $loanService);

        $result = $userService->register($request);

        $this->assertTrue(true);
    }

    public function testShouldRegisterClient()
    {
        $request = new UserRegisterRequest();

        $input = [
            'name' => 'Everton Miranda de Oliveira',
            'cpf' => '23378118830',
            'email' => 'notreve.miranda@gmail.com',
            'birthday' => '1994-22-06',
            'terms' => 'true'
        ];

        $request->merge($input);

        $documentService = new DocumentsService();
        $addresService = new AddressService();
        $bankAccountService = new BankAccountService();
        $rgService = new RgService();
        $maritalStatusService = new MaritalStatusService();
        $contractService = new ContractsService();
        $backgroundCheckService = new BackgroundCheckService();
        $sorocredService = new SorocredService($maritalStatusService);
        $topazioService = new TopazioService();
        $financialProductService = new FinancialProductService($sorocredService, $topazioService);
                
        $loanService = new LoanService($contractService, $financialProductService, $backgroundCheckService);

        $userService = new UserService($documentService, $backgroundCheckService, $loanService);

        $result = $userService->register($request);

        $this->assertTrue(true);
    }
}
