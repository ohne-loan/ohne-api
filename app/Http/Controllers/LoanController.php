<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\D4SignRequest;
use App\Http\Requests\GetLoanRequest;
use App\Http\Requests\LoanSimulationRequest;
use App\Http\Requests\LoanGetPaymentDetailsRequest;
use App\Http\Resources\LoanInstallmentResource;
use App\Http\Resources\LoanClientResource;
use App\Http\Resources\LoanPaymentDetailsResource;
use App\Http\Resources\StateResource;
use App\Http\Resources\StatusResource;
use App\Http\Responses\FailResponse;
use App\Http\Responses\SuccessResponse;
use App\Models\Contract;
use App\Models\Loan;
use App\Models\LoanInstallment;
use App\Models\LoanSimulated;
use App\Models\Parameter;
use App\Models\ScoreCheck;
use App\Models\User;
use App\Models\LoanTag;
use App\Models\UserRegisterStatus;
use App\Services\AddressService;
use App\Services\BackgroundCheckService;
use App\Services\BankAccountService;
use App\Services\ContractsService;
use App\Services\DocumentsService;
use App\Services\FinancialProductService;
use App\Services\LoanService;
use App\Services\RgService;
use App\Services\UserService;
use App\Services\LoanSimulatedService;
use App\Services\UserRegisterStatusService;
use App\Services\InvoiceService;
use App\Services\UserDeviceDataService;
use Carbon\Carbon;
use http\Env\Request;
use http\Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Param;
use SoapClient;
use App\Jobs\ProcessLoan;
use App\Jobs\ProcessPostBackD4Sign;
use stdClass;

class LoanController extends Controller
{
    /**
     * @var LoanService
     */
    private $loanService;

    /**
     * @var UserService
     */
    private $userService;

    /**
     * @var AddressService
     */
    private $addressService;

    /**
     * @var DocumentsService
     */
    private $documentsService;

    /**
     * @var BankAccountService
     */
    private $bankAccountService;

    /**
     * @var RgService
     */
    private $rgService;

    /**
     * @var BackgroundCheckService
     */
    private $backgroundCheckService;

    /**
     * @var FinancialProductService
     */
    private $financialProductService;

    /**
     * @var ContractsService
     */
    private $contractsService;

    /**
     * @var LoanSimulatedService
     */
    private $loanSimulatedService;

    /**
     * @var UserRegisterStatusService
     */
    private $userRegisterStatusService;

    /**
     * @var UserDeviceDataService
     */
    private $userDeviceDataService;

    public function __construct(
        LoanService $loanService,
        UserService $userService,
        AddressService $addressService,
        BankAccountService $bankAccountService,
        RgService $rgService,
        BackgroundCheckService $backgroundCheckService,
        FinancialProductService $financialProductService,
        DocumentsService $documentsService,
        ContractsService $contractsService,
        LoanSimulatedService $loanSimulatedService,
        UserRegisterStatusService $userRegisterStatusService,
        UserDeviceDataService $userDeviceDataService
    ) {
        $this->loanService = $loanService;
        $this->userService = $userService;
        $this->addressService = $addressService;
        $this->documentsService = $documentsService;
        $this->bankAccountService = $bankAccountService;
        $this->rgService = $rgService;
        $this->backgroundCheckService = $backgroundCheckService;
        $this->financialProductService = $financialProductService;
        $this->contractsService = $contractsService;
        $this->loanSimulatedService = $loanSimulatedService;
        $this->userRegisterStatusService = $userRegisterStatusService;
        $this->userDeviceDataService = $userDeviceDataService;
    }

    public function show()
    {
        try {
            $user = Auth::user();
            $loan = $this->loanService->getCurrentLoan($user);

            if (!isset($loan)) {
                return new LoanClientResource($loan);
            }

            if ($loan->installment_value === null) {
                $loan->installment_value = money($this->loanService->calculateInstallmentValue($loan));
            }
            if (!empty($loan->installments)) {
                $loan = $this->loanService->getExtraData($loan);
                $loan->installments = $loan->installments->sortBy('number');
            }

            return new LoanClientResource($loan->load(['installments', 'tag']));
        } catch (\Exception $e) {
            handle($e, $e->getMessage(), 500);
        }
    }

    public function getPaymentDetails()
    {
        try {
            $user = Auth::user();
            $paymentDate = Input::get('paymentDate', null);

            $dtMaxDate = new Carbon();
            $dtMinDate = new Carbon();
            $minDate = $dtMinDate->format('Y-m-d');
            $maxDate = $dtMaxDate->addDays(3)->format('Y-m-d');

            if ($paymentDate === null) {
                return new \Exception("A data de pagamento é inválida.");
            }

            if (!($paymentDate >= $minDate && $paymentDate<= $maxDate)) {
                return new \Exception("A data de pagamento é inválida.");
            }

            $loan = $this->loanService->getCurrentLoan($user);
            
            if($loan->tag->tag === LoanTag::OHNE) {
                return new \Exception("Operação não permitida.");
            }
            
            $installments = $loan->installments()->orderBy('number')->get();

            $resource = $this->loanService->getPaymentDetails($loan, $installments, $paymentDate);

            return new LoanPaymentDetailsResource($resource);
        } catch (\Exception $e) {
            handle($e, $e->getMessage(), 500, true);
        }
    }

    /**
     * @param LoanSimulationRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function simulate(LoanSimulationRequest $request)
    {
        try {
            $amount = (float)$request->input('amount');

            $installmentSets = Parameter::get('loan.installments.sets.site');

            if (request()->has('type') && strtoupper(request()->get('type')) == Parameter::get('loan.simulation.type.app')) {
                $installmentSets = Parameter::get('loan.installments.sets.app');
            }

            $minimumInstallmentAmount = (float)Parameter::get('loan.installments.amount.min');
            $quantityInstallments = (int)$installmentSets[count($installmentSets)-1];

            while (($amount/$quantityInstallments) < $minimumInstallmentAmount) {
                $installmentSets = array_slice($installmentSets, 0, count($installmentSets)-1);
                $quantityInstallments = (int)$installmentSets[count($installmentSets)-1];
            }

            $userIdRequest = $request->input('user_id');
            $userId = isset($userIdRequest) && (int)$userIdRequest > 0 ? (int)$userIdRequest : null;
            $numInstallmentsRequest = $request->input('num_installments');
            $numInstallments = isset($numInstallmentsRequest) && (int)$numInstallmentsRequest > 0 ? (int)$numInstallmentsRequest : null;
            $monthlyRate = Parameter::get('loan.default.rate.month');
            $yearlyRate = Parameter::get('loan.default.rate.year');
            $loans = [];

            if (!isset($userId)) {
                $loans = $this->fakeSimulate($installmentSets, $amount, $monthlyRate, $yearlyRate);

                return response()->json([
                    'data' => $loans
                ]);
            }

            if (($amount/$quantityInstallments) < $minimumInstallmentAmount) {
                throw new ApiException('Ops! não foi possível consultar os dados.', 500);
            }

            $user = $this->userService->find($userId);

            $scoreCheck = $this->backgroundCheckService->getLatestScore($user, ScoreCheck::ALPHA);

            if ($scoreCheck) {
                $monthlyRate = $this->financialProductService->getRateFromScoreCheck($scoreCheck);
            } else {
                throw new ApiException('Ops! não foi possível consultar os dados.', 500);
            }

            $yearlyRate = rateMonthToYear($monthlyRate);

            $loan = new Loan();
            $loan->amount = $amount;
            $loan->num_installments = $numInstallments;
            $loan->monthly_rate = adjustDecimalPlaces(\multiplyByOneHundred($monthlyRate));

            $customerInternalMonthlyRate = $loan->monthly_rate;

            $simulateLoanResult = $this->simulateInternal(
                $amount,
                (int)$numInstallments,
                $customerInternalMonthlyRate,
                $userId
            );

            $loan->monthly_rate = changeFloatToTwoDecimalPlaces($loan->monthly_rate);
            $loan->yearly_rate = changeFloatToTwoDecimalPlaces(\multiplyByOneHundred($yearlyRate));
            $loan->monthly_cet_rate = changeFloatToTwoDecimalPlaces($simulateLoanResult->monthly_cet_rate);
            $loan->cet_rate = changeFloatToTwoDecimalPlaces($simulateLoanResult->cet_rate);
            $loan->installment_value = money($simulateLoanResult->installment_value);
            $loan->net_value = money($simulateLoanResult->net_value);
            $loan->gross_value = money($simulateLoanResult->gross_value);
            $loan->iof_value = money($simulateLoanResult->iof_value);

            $loans[] = $loan;

            return response()->json([
            'data' => $loans
        ]);
        } catch (\Exception $e) {
            handle($e, $e->getMessage(), 500, true);
        }
    }

    private function fakeSimulate($installmentSets, float $amount, float $customerInternalMonthlyRate, float $customerInternalYearlyRate)
    {
        try {
            $loans = [];

            foreach ($installmentSets as $numInstallments) {
                $loan = new Loan();
                $loan->amount = $amount;
                $loan->num_installments = (int)$numInstallments;
                $loan->monthly_rate = $customerInternalMonthlyRate;
                $loan->yearly_rate = $customerInternalYearlyRate;
                $loan->installment_value = money($this->loanService->calculateInstallmentValue($loan));
                $loan->monthly_rate = adjustDecimalPlaces(multiplyByOneHundred($loan->monthly_rate));
                $loan->yearly_rate = adjustDecimalPlaces(multiplyByOneHundred($loan->yearly_rate));

                $loans[] = $loan;
            }

            return $loans;
        } catch (\Exception $e) {
            handle($e, $e->getMessage(), 500, true);
        }
    }

    private function simulateInternal(float $amount, int $numInstallments, float $customerInternalMonthlyRate, int $userId)
    {
        try {
            $response = new stdClass();

            $simulateLoanResult = $this->loanSimulatedService->simulate($amount, (int)$numInstallments, $customerInternalMonthlyRate, $userId);

            $response->monthly_cet_rate = $simulateLoanResult->monthly_cet_rate;
            $response->cet_rate = $simulateLoanResult->total_cet_rate;
            $response->installment_value = $simulateLoanResult->installment_value;
            $response->net_value = $simulateLoanResult->net_value;
            $response->gross_value = $simulateLoanResult->gross_value;
            $response->iof_value = $simulateLoanResult->iof_value;

            return $response;
        } catch (\Exception $e) {
            handle($e, $e->getMessage(), 500, true);
        }
    }

    public function installments()
    {
        try {
            $user = Auth::user();
            $loan = $this->loanService->getCurrentLoan($user);
            $installments = $this->loanService->getInstallments($loan);

            return LoanInstallmentResource::collection($installments);
        } catch (\Exception $e) {
            handle($e, $e->getMessage(), 500, true);
        }
    }

    public function getLoan(GetLoanRequest $request)
    {
        try {
            $data = $request->all();

            $userId = $data['userId'];

            $user = $this->userService->getUserById($userId);
            
            $this->userRegisterStatusService->store($userId, UserRegisterStatus::PROCESSING);

            $userAgent = \tryGetValueArray($_SERVER, 'HTTP_USER_AGENT');
            $this->userDeviceDataService->store($userId, $userAgent);
            
            $loan = Loan::where([
                'user_id' => $userId,
                'status' => Loan::USER_REGISTERING,
            ])->firstOrFail();

            $loan->status = Loan::PROCESSING;

            $loan->save();

            dispatch(new ProcessLoan(
                $user
            ));

            activity('Concluiu a solicitação de empréstimo')
                ->performedOn($user)
                ->causedBy($user)
                ->log(":causer.name concluiu a solicitação de empréstimo.");

            return new SuccessResponse("success");
        } catch (\Exception $e) {
            handle($e, "Houve um erro ao enviar os dados para processamento", 500, true);
        }
    }
    
    /**
     * @param D4SignRequest $request
     * @throws ApiException
     */
    public function postBackD4Sign(D4SignRequest $request)
    {
        try {
            $data = $request->all();

            dispatch(new ProcessPostBackD4Sign(
                $data
            ));
        } catch (\Exception $e) {
            handle($e, $e->getMessage(), 500, true);
        }
    }
}
