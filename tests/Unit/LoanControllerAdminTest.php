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
use App\Services\FacialBiometryService;
use App\Services\HttpService;
use App\Services\FinanceService;
use App\Services\InvoiceService;
use App\Services\LoanTagService;
use App\Services\HttpServiceCurl;
use App\Rules\Money;
use App\Libraries\Finance\Client;
use App\Http\Controllers\Admin\LoanController;
use App\Http\Requests\Admin\LoanChangeValueAndAmountOfInstallmentsRequest;

class LoanControllerAdminTest extends TestCase
{
    /**
     * @var LoanController
     */
    private $loanController;

    private function setUpEnvironment()
    {
        $documentService = new DocumentsService();
        $httpService = new HttpService($documentService);
        $httpServiceCurl = new HttpServiceCurl();
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
        $facialBiometryService = new FacialBiometryService($documentService, $httpServiceCurl);
        $configurationService = new ConfigurationService();

        $financeClient = new Client($httpService);
        $financeService = new FinanceService($financeClient);

        $invoiceService = new InvoiceService($httpService, $configurationService);
        $loanTagService = new LoanTagService();
                
        $loanService = new LoanService(
                $contractService,
                $financialProductService,
                $backgroundCheckService,
                $loanSimulatedService,
                $topazioService,
                $financeService,
                $invoiceService,
                $loanTagService
        );

        $this->loanController = new LoanController(
            $loanService
        );
    }

    public function Show()
    {
        $this->setUpEnvironment();

        $id = 9;

        $result = $this->loanController->show($id);

        $this->assertTrue(true);
    }
    
    public function testAcceptLoan()
    {
        $this->setUpEnvironment();

        $input = [
            'loan_id' => 1625
        ];

        $request = new Request();

        $request->merge($input);

        $result = $this->loanController->approve($request);

        $this->assertTrue(true);
    }

    public function ChangeValueAndAmountOfInstallments()
    {
        $maritalStatusService = new MaritalStatusService();
        $contractService = new ContractsService();
        $backgroundCheckService = new BackgroundCheckService();
        $sorocredService = new SorocredService($maritalStatusService);
        $topazioService = new TopazioService();
        $financialProductService = new FinancialProductService($sorocredService, $topazioService);
        $iOFService = new IOFService();
        $cETService = new CETService();
        $loanSimulatedService = new LoanSimulatedService($iOFService, $cETService);
        $loanService = new LoanService($contractService, $financialProductService, $backgroundCheckService, $loanSimulatedService, $topazioService);
        $loanController = new LoanController($loanService, $loanSimulatedService, $backgroundCheckService, $financialProductService);

        $input = [
            'user_id' => 329,
            'loan_id' => 49,
            'amount' => 1500.00,
            'num_installments' => 12
        ];

        $request = new LoanChangeValueAndAmountOfInstallmentsRequest();

        $request->merge($input);

        $loanController->changeValueAndAmountOfInstallments($request);

        $this->assertTrue(true);
    }
}
