<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Exceptions\ApiException;
use App\Http\Requests\InvoiceDischargeRequest;
use App\Http\Requests\InvoiceRequest;
use App\Http\Requests\PostBackBoletoRequest;
use App\Http\Resources\InvoiceResource;
use App\Http\Resources\LoanInstallmentResource;
use App\Http\Responses\SuccessResponse;
use App\Models\Invoice;
use App\Models\Loan;
use App\Models\LoanInstallment;
use App\Models\User;
use App\Services\FinancialProductService;
use App\Services\InvoiceService;
use App\Services\LoanService;
use Carbon\Carbon;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\InvoiceController;
use App\Jobs\ProcessLoanRequest;
use App\Http\Requests\LoanSimulationRequest;
use App\Http\Requests\D4SignRequest;
use App\Services\UserService;
use App\Services\DocumentsService;
use App\Services\ContractsService;
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
use App\Services\HttpService;
use App\Services\SpouseService;
use App\Services\PhoneService;
use App\Services\PersonalReferenceService;
use App\Services\BadCreditService;
use App\Services\UserRegisterStatusService;
use App\Services\FacialBiometryService;

use App\Rules\Money;

class InvoiceControllerTest extends TestCase
{

    /**
     * @var InvoiceController
     */
    private $invoiceController;

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
                
        $loanService = new LoanService(
                $contractService,
                $financialProductService,
                $backgroundCheckService,
                $loanSimulatedService,
                $topazioService
        );

        $invoiceService = new InvoiceService($httpService);

        $this->invoiceController = new InvoiceController($invoiceService, $loanService, $financialProductService);
    }

    /**
     * A basic test example
     *
     * @return void
     */
    public function testPostBackBoletoBancario()
    {
        $this->setUpEnvironment();

        $request = new PostBackBoletoRequest();

        $input = [
            'paymentToken' => 'C37674883C608A92A6F9DA01E7816E0F62032965194AA16F'
        ];
        
        $request->merge($input);

        $uuid = "9594db21-5c18-4cc5-9afe-4f5fa12edebc";        

        $result = $this->invoiceController->update($request, $uuid);

        $this->assertTrue(true);
    }
}