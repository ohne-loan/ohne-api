<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Jobs\ProcessLoanRequest;
use App\Http\Requests\LoanSimulationRequest;
use Illuminate\Http\Request;
use App\Http\Requests\D4SignRequest;
use App\Http\Requests\GetLoanRequest;
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
use App\Services\LoanSimulatedService;
use App\Services\IOFService;
use App\Services\CETService;
use App\Services\SpouseService;
use App\Services\PersonalReferenceService;
use App\Services\PhoneService;
use App\Services\ConfigurationService;
use App\Services\BadCreditService;
use App\Services\UserRegisterStatusService;
use App\Services\HttpService;
use App\Services\FacialBiometryService;
use App\Services\FinanceService;
use App\Libraries\Finance\Client;
use App\Rules\Money;
use App\Http\Controllers\LoanController;

class LoanControllerTest extends TestCase
{
    /**
     * @var LoanController
     */
    private $loanController;

    private function setUpEnvironment()
    {
        $documentService = new DocumentsService();
        $httpService = new HttpService($documentService);
        $bankAccountService = new BankAccountService();
        $rgService = new RgService();
        $maritalStatusService = new MaritalStatusService();
        $contractService = new ContractsService();
        $backgroundCheckService = new BackgroundCheckService($httpService);
        $sorocredService = new SorocredService($maritalStatusService);
        $topazioService = new TopazioService();
        $financialProductService = new FinancialProductService($sorocredService, $topazioService);
        $iOFService = new IOFService();
        $cETService = new CETService();
        $loanSimulatedService = new LoanSimulatedService($iOFService, $cETService);
        $addressService = new AddressService();
        $spouseService = new SpouseService();
        $phoneService = new PhoneService();
        $personalReferenceService = new PersonalReferenceService($phoneService);
        $badCreditService = new BadCreditService();
        $userRegisterStatusService = new UserRegisterStatusService();
        $facialBiometryService = new FacialBiometryService($documentService, $httpService);
        $financeClient = new Client($httpService);
        $financeService = new FinanceService($financeClient);
                
        $loanService = new LoanService(
                $contractService,
                $financialProductService,
                $backgroundCheckService,
                $loanSimulatedService,
                $topazioService,
                $financeService
        );

        $configurationService = new ConfigurationService();

        $userService = new UserService(
            $documentService,
            $backgroundCheckService,
            $loanService,
            $loanSimulatedService,
            $rgService,
            $addressService,
            $bankAccountService,
            $spouseService,
            $personalReferenceService,
            $phoneService,
            $badCreditService,
            $userRegisterStatusService,
            $facialBiometryService,
            $configurationService
        );

        $this->loanController = new LoanController(
            $loanService,
            $userService,
            $addressService,
            $bankAccountService,
            $rgService,
            $backgroundCheckService,
            $financialProductService,
            $documentService,
            $contractService,
            $loanSimulatedService,
            $userRegisterStatusService
        );
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPostBackD4Sign()
    {
        $this->setUpEnvironment();

        $input = [
            'uuid' => 'd7dfa6b8-eaf3-4a4b-b0af-d05ce54c9449',
            'type_post' => '1'
        ];

        $request = new D4SignRequest();
        
        $request->merge($input);

        $result = $this->loanController->postBackD4Sign($request);

        $this->assertTrue(true);
    }

    public function AcceptLoan()
    {
        $this->setUpEnvironment();

        $input = [
            'loan_id' => 9
        ];

        $request = new Request();

        $request->merge($input);
        
        $result = $this->loanController->approve($request);
        
        $this->assertTrue(true);
    }

    public function ShouldSimulateLoan()
    {
        $this->setUpEnvironment();

        $request = new LoanSimulationRequest();

        $request->merge(['amount' => 100.00]);
        $request->merge(['monthly_rate' => 3.5]);
        $request->merge(['user_id' => 22]);
        $request->merge(['num_installments' => 3]);

        $this->loanController->simulate($request);

        $this->assertTrue(true);
    }

    public function GetLoan()
    {
        $this->setUpEnvironment();

        $input = [
            'userId' => 3432
        ];

        $request = new GetLoanRequest();
        
        $request->merge($input);

        $result = $this->loanController->getLoan($request);

        $this->assertTrue(true);
    }
}
