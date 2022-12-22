<?php

namespace App\Services;

use App\Exceptions\ApiException;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserSaveAdditionalDataRequest;
use App\Http\Requests\UserSaveIncomeAndProfessionRequest;
use App\Http\Requests\UserSaveAddressRequest;
use App\Http\Requests\UserSavePersonalReferenceRequest;
use App\Http\Requests\UserSaveDocumentsRequest;
use App\Http\Requests\UserSaveBankDetailsRequest;
use App\Http\Requests\UserCheckAlphaRequest;
use App\Http\Requests\UserSaveFacialBiometryDataRequest;
use App\Http\Requests\UserSaveFacialBiometryCameraBlockedInformationRequest;
use App\Http\Requests\UserGetFacialBiometryAppKeyRequest;
use App\Http\Requests\UserConfirmEmailRequest;
use App\Http\Requests\UserCreatePasswordRequest;
use App\Http\Requests\UserSaveEmailAnalysisPermissionRequest;
use App\Http\Resources\UserRegisterResource;
use App\Mail\AlphaRejectedMail;
use App\Mail\RegisterConfirmationMail;
use App\Mail\WithoutMoneyMail;
use App\Models\EmailToken;
use App\Models\Parameter;
use App\Models\PersonalReference;
use App\Models\Phone;
use App\Models\ScoreCheck;
use App\Models\Spouse;
use App\Models\User;
use App\Models\UserPersonalInfo;
use App\Models\Loan;
use App\Models\UserRegisterStatus;
use App\Models\FacialBiometry;
use App\Models\LoanTag;
use App\Services\BackgroundCheckService;
use App\Services\LoanService;
use App\Services\LoanSimulatedService;
use App\Services\RgService;
use App\Services\AddressService;
use App\Services\BankAccountService;
use App\Services\SpouseService;
use App\Services\PersonalReferenceService;
use App\Services\PhoneService;
use App\Services\BadCreditService;
use App\Services\UserRegisterStatusService;
use App\Services\FacialBiometryService;
use App\Services\LoanTagService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Uuid;
use stdClass;

class UserService
{
    /**
     * @var DocumentsService
     */
    private $documentsService;

    /**
     * @var BackgroundCheckService
     */
    private $backgroundCheckService;

    /**
     * @var LoanService
     */
    private $loanService;

    /**
     * @var LoanSimulatedService
     */
    private $loanSimulatedService;

    /**
     * @var RgService
     */
    private $rgService;

    /**
     * @var AddressService
     */
    private $addressService;

    /**
     * @var BankAccountService
     */
    private $bankAccountService;

    /**
     * @var SpouseService
     */
    private $spouseService;

    /**
     * @var PersonalReferenceService
     */
    private $personalReferenceService;

    /**
     * @var PhoneService
     */
    private $phoneService;

    /**
     * @var BadCreditService
     */
    private $badCreditService;

    /**
     * @var UserRegisterStatusService
     */
    private $userRegisterStatusService;

    /**
     * @var FacialBiometryService
     */
    private $facialBiometryService;

    /**
     * @var ConfigurationService
     */
    private $configurationService;
    
    /**
     * @var LoanTagService
     */
    private $loanTagService;

    /**
     * UserService constructor.
     */
    public function __construct(
        DocumentsService $documentsService,
        BackgroundCheckService $backgroundCheckService,
        LoanService $loanService,
        LoanSimulatedService $loanSimulatedService,
        RgService $rgService,
        AddressService $addressService,
        BankAccountService $bankAccountService,
        SpouseService $spouseService,
        PersonalReferenceService $personalReferenceService,
        PhoneService $phoneService,
        BadCreditService $badCreditService,
        UserRegisterStatusService $userRegisterStatusService,
        FacialBiometryService $facialBiometryService,
        ConfigurationService $configurationService,
        LoanTagService $loanTagService
    ) {
        $this->documentsService = $documentsService;
        $this->backgroundCheckService = $backgroundCheckService;
        $this->loanService = $loanService;
        $this->loanSimulatedService = $loanSimulatedService;
        $this->rgService = $rgService;
        $this->addressService = $addressService;
        $this->bankAccountService = $bankAccountService;
        $this->spouseService = $spouseService;
        $this->personalReferenceService = $personalReferenceService;
        $this->phoneService = $phoneService;
        $this->badCreditService = $badCreditService;
        $this->userRegisterStatusService = $userRegisterStatusService;
        $this->facialBiometryService = $facialBiometryService;
        $this->configurationService = $configurationService;
        $this->loanTagService = $loanTagService;
    }

    /**
     * @param User $user
     * @param array $data
     * @return User
     * @throws \Exception
     */
    public function store(User $user, array $data)
    {
        try {
            DB::beginTransaction();

            $user->fill($data);
            $user->uuid = Uuid::uuid4()->toString();
            $user->password = 'UNDEFINED PASSWORD';
            $user->name = ucwords(strtolower($user->name));
            $user->save();

            if (isset($data['phones']['landline'])) {
                $this->phoneService->store($user, $data['phones']['landline']);
            }

            $this->phoneService->store($user, $data['phones']['cellphone']);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw $exception;
        }

        return $user;
    }

    /**
     * @param User $user
     * @param EmailToken $emailToken
     */
    public function sendConfirmationEmail(User $user, EmailToken $emailToken)
    {
        $mail = new RegisterConfirmationMail($user, $emailToken);
        Mail::to($user->email)->send($mail);
    }

    /**
     * @param User $user
     */
    public function sendWithoutMoneyEmail(User $user)
    {
        $mail = new WithoutMoneyMail($user);
        Mail::to($user->email)->send($mail);
    }

    /**
     * @param UserConfirmEmailRequest $request
     * @return bool
     * @throws ApiException
     */
    public function confirmEmail(UserConfirmEmailRequest $request)
    {
        $data = $request->all();
        
        $userArray = array();
    
        $userArray = $data['user'];
        $emailToken = $data['email_token'];
        $userId = $userArray['id'];

        try {
            $emailToken = EmailToken::with(['user'])
            ->where('token', $emailToken)
            ->where('expires_at', '>', now())
            ->whereNull('confirmation_date')
            ->firstOrFail();
        } catch (\Exception $exception) {
            throw new ApiException("Ops, o código informado não é válido.", 500);
        }

        $user = $emailToken->user;

        if ($user->id !== $userId) {
            throw new ApiException("Ops, o código informado não é válido.", 500);
        }

        $emailToken->confirmation_date = now();
        $emailToken->save();

        activity('Confirmou o e-mail')
                ->performedOn($user)
                ->causedBy($user)
                ->log(":causer.name confirmou o e-mail de cadastro.");

        $this->userRegisterStatusService->store($userId, UserRegisterStatus::CONFIRM_EMAIL);

        return true;
    }

    /**
     * @param UserCreatePasswordRequest $request
     * @throws ApiException
     */
    public function createPassword(UserCreatePasswordRequest $request)
    {
        $data = $request->all();
        
        $userArray = array();

        $userArray = $data['user'];
        $password = $data['password'];
        $userId = $userArray['id'];

        $user = $this->getUserById($userId);

        $user->password = $password;
        $user->active = true;
        $user->save();

        activity('Criou a senha de acesso')
                ->performedOn($user)
                ->causedBy($user)
                ->log(":causer.name criou a senha de acesso.");

        $this->userRegisterStatusService->store($userId, UserRegisterStatus::CREATE_PASSWORD);
    }

    public function sendAlphaRejectedEmail(User $user)
    {
        $mail = new AlphaRejectedMail($user);
        Mail::to($user->email)->send($mail);
    }

    /**
     * @param User $user
     * @param array $data
     * @return void
     */
    public function complete(User $user, array $data)
    {
        if ($data['ppe'] == "Sim") {
            $user->politically_exposed_person = true;
        } else {
            $user->politically_exposed_person = false;
        }
        $user->fill($data);
        $user->save();
    }

    /**
     * @param string $emailToken
     * @return User|\Illuminate\Database\Eloquent\Model|static
     */
    public function getFromToken(string $emailToken)
    {
        try {
            return User::query()
                ->whereHas('emailToken', function ($query) use ($emailToken) {
                    $query->where('token', $emailToken)
                        ->whereNotNull('confirmation_date');
                })
                ->firstOrFail();
        } catch (\Exception $exception) {
            throw new ApiException('Usuário não encontrado', 404);
        }
    }

    public function addPersonalInfo(User $user, array $data)
    {
        $personalInfo = UserPersonalInfo::firstOrNew([
            'user_id' => $user->id
        ]);
        $personalInfo->fill($data);
        $personalInfo->save();
    }

    public function find($id)
    {
        return User::find($id);
    }

    /**
     * @param array $data
     * @return mixed
     * @throws ApiException
     */
    public function findIfExists(array $data)
    {
        $user = User::where('cpf', $data['cpf'])
            ->orWhere('email', $data['email'])
            ->first();

        if ($user) {
            if ($user->cpf !== $data['cpf']) {
                throw new ApiException('Por favor, verifique se os seus dados foram preenchidos corretamente.', 422);
            }

            if (strtolower($user->email) !== strtolower($data['email'])) {
                throw new ApiException('Por favor, verifique se os seus dados foram preenchidos corretamente.', 422);
            }

            return $user;
        } else {
            $user = new User();
            $user->email = $data['email'];
            return $user;
        }
    }

    /**
     * @param User $user
     * @return EmailToken
     * @throws \Exception
     */
    public function getOrCreateEmailToken(User $user)
    {
        $expires = Parameter::get('user.register.expires_time');

        $emailToken = EmailToken::where([
            ['user_id', '=', $user->id],
            ['email', '=', $user->email],
            ['confirmation_date', '=', null],
            ['expires_at', '>', now()->addMinutes(10)]
        ])->first();

        if (!isset($emailToken)) {
            $emailToken = new EmailToken();
            $emailToken->user_id = $user->id;
            $emailToken->email = $user->email;
            $emailToken->token = emailToken();
            $emailToken->expires_at = now()->addHours($expires);

            $emailToken->ip = request()->ip();
            $emailToken->save();
        }

        return $emailToken;
    }

    public function findByEmail(string $email)
    {
        return User::where('email', $email)
            ->firstOrFail();
    }

    public function register(UserRegisterRequest $request)
    {
        $userId = $this->saveUser($request);

        $response = new stdClass();
        
        $response->userId = $userId;
        $response->withoutMoney = false;
        $response->status = true;

        $user = User::find($userId);

        activity('Cliente iniciou um cadastro')
            ->performedOn($user)
            ->causedBy($user)
            ->log(":causer.name iniciou um cadastro.");

        $this->userRegisterStatusService->store($userId, UserRegisterStatus::BASIC_DATA);

        return new UserRegisterResource($response);
    }

    public function checkAlpha(UserCheckAlphaRequest $request)
    {
        $data = $request->all();

        $userId = $data['userId'];
        $badCredit = $data['badCredit'];

        $this->badCreditService->store($userId, $badCredit);

        $user = User::find($userId);

        $response = new stdClass();
        $response->withoutMoney = false;
        $response->userId = $userId;

        if ($badCredit) {
            activity('Cliente informou que está com CPF negativado')
                ->performedOn($user)
                ->causedBy($user)
                ->log(":causer.name informou que está com o CPF negativado, portanto, não seguirá o cadastro.");

            
            $response->status = false;
            return new UserRegisterResource($response);
        }

        $badCreditInLast90Days = $this->badCreditService->isBadCreditInLast90Days($userId);

        if ($badCreditInLast90Days) {
            activity('Cliente está com CPF negativado')
                ->performedOn($user)
                ->causedBy($user)
                ->log(":causer.name informou que está com o CPF negativado há menos de 90 dias, portanto, não seguirá o cadastro.");

            $response->status = false;
            return new UserRegisterResource($response);
        }

        $whereData = [
            ['user_id', $user->id],
            ['type', ScoreCheck::ALPHA]
        ];

        $withoutMoney = $this->configurationService->find('without.money');

        if ($withoutMoney->value === 'true') {
            activity('Sem dinheiro')
                ->performedOn($user)
                ->causedBy($user)
                ->log(":causer.name não seguiu o fluxo pois a plataforma está no modo 'sem dinheiro'.");

            $this->sendWithoutMoneyEmail($user);

            $response->status = false;
            $response->withoutMoney = true;
            return new UserRegisterResource($response);
        }
        
        $locallyScoreCheck = ScoreCheck::where($whereData)->whereRaw('DATE_PART(\'day\', now() - created_at) < 30')->first();
        
        $scoreCheck = new stdClass();

        if (isset($locallyScoreCheck)) {
            $scoreCheck = $locallyScoreCheck;
        } else {
            $scoreCheck = $this->backgroundCheckService->doCheck(ScoreCheck::ALPHA, $user);
        }

        $reproved = ($scoreCheck->status === ScoreCheck::REPROVADO) ||
            ($scoreCheck->status === ScoreCheck::PENDENTE && $scoreCheck->score === null);

        $this->userRegisterStatusService->store($userId, UserRegisterStatus::CHECK_ALPHA);

        if ($reproved) {
            $this->sendAlphaRejectedEmail($user);

            $response->status = false;

            $this->userRegisterStatusService->store($userId, UserRegisterStatus::REJECTED_ALPHA);

            activity('Cliente reprovado na Alpha')
                ->performedOn($user)
                ->causedBy($user)
                ->log(":causer.name foi reprovado na política Alpha.");
        } else {
            $response->status = true;

            $emailToken = $this->getOrCreateEmailToken($user);

            $this->sendConfirmationEmail($user, $emailToken);

            $this->userRegisterStatusService->store($userId, UserRegisterStatus::APPROVED_ALPHA);

            activity('Cliente aprovado na Alpha')
                ->performedOn($user)
                ->causedBy($user)
                ->log(":causer.name foi aprovado na política Alpha.");
        }

        return new UserRegisterResource($response);
    }

    public function saveAdditionalData(UserSaveAdditionalDataRequest $request) : void
    {
        $data = $request->all();

        $personalInfoArray = array();
        $rgArray = array();
        $userArray = array();

        $personalInfoArray = $data['personal_info'];
        $rgArray = $data['rg'];
        $userArray = $data['user'];

        $userId = $userArray['id'];

        $user = $this->getUserById($userId);

        $rgArray['rg'] = preg_replace('/[\W]/', '', $rgArray['rg']);

        $this->rgService->store($user, $rgArray);

        $personalInfoArray['naturality_id'] = $personalInfoArray['naturality']['uf']['id'];
        $personalInfoArray['naturality'] = $personalInfoArray['naturality']['city'];

        $personalInfo = UserPersonalInfo::firstOrNew([
            'user_id' => $userId
        ]);

        $personalInfo->fill($personalInfoArray);
        $personalInfo->mother_name = ucwords(strtolower($personalInfo->mother_name));
        $personalInfo->father_name = ucwords(strtolower($personalInfo->father_name));
        $personalInfo->save();

        if ($userArray['ppe'] == "Sim") {
            $user->politically_exposed_person = true;
            $user->politically_exposed_person_since = $userArray['ppe_since'];
        } else {
            $user->politically_exposed_person = false;
        }

        if (isset($userArray['gross_income'])) {
            $userArray['gross_income'] = money($userArray['gross_income'], true);
        }

        if (isset($userArray['patrimony'])) {
            $userArray['patrimony'] = money($userArray['patrimony'], true);
        }
        
        $user->fill($userArray);
        $user->save();

        $loanSimulated = $this->loanSimulatedService->getLoanSimulated($userId);

        $loanArray = array();

        $loanArray['installment_value'] = $loanSimulated->installment_value;
        $loanArray['monthly_effective_cost'] = $loanSimulated->monthly_effective_cost;
        $loanArray['annual_effective_cost'] = $loanSimulated->annual_effective_cost;
        $loanArray['monthly_cet_rate'] = $loanSimulated->monthly_cet_rate;
        $loanArray['cet_rate'] = $loanSimulated->cet_rate;
        $loanArray['iof_value'] = $loanSimulated->iof_value;
        $loanArray['amount_effective_cost'] = $loanSimulated->amount_effective_cost;
        $loanArray['expiration_day'] = $loanSimulated->expiration_day;
        $loanArray['monthly_rate'] = $loanSimulated->monthly_rate;
        $loanArray['yearly_rate'] = $loanSimulated->yearly_rate;
        $loanArray['amount'] = $loanSimulated->amount;
        $loanArray['num_installments'] = $loanSimulated->num_installments;
        $loanArray['status'] = Loan::USER_REGISTERING;
        $loanArray['loan_reason_id'] = $data['loan_reason']['id'];

        if (isset($data['loan_reason']['description'])) {
            $loanArray['loan_reason_description'] = $data['loan_reason']['description'];
        }

        $loanId = $this->loanService->store($user, $loanArray);

        $this->userRegisterStatusService->store($userId, UserRegisterStatus::ADDITIONAL_DATA);

        $this->loanTagService->store($loanId, LoanTag::OHNE);

        activity('Preencheu o formulário Dados complementares')
            ->performedOn($user)
            ->causedBy($user)
            ->log(":causer.name enviou os dados complementares.");
    }

    public function saveIncomeAndProfession(UserSaveIncomeAndProfessionRequest $request)
    {
        $data = $request->all();

        $userArray = array();
        $spouseArray = array();

        $userArray = $data['user'];
        $userArray['gross_income'] = money($userArray['gross_income'], true);
        $userArray['patrimony'] = money($userArray['patrimony'], true);
        $userId = $userArray['id'];

        $user = $this->getUserById($userId);
        $user->fill($userArray);
        $user->save();

        if (isset($data['spouse'])) {
            $spouseArray = $data['spouse'];

            if (isset($spouseArray['gross_income'])) {
                $spouseArray['gross_income'] = money($spouseArray['gross_income'], true);
            }

            $this->spouseService->store($user, $spouseArray);
        }

        $this->userRegisterStatusService->store($userId, UserRegisterStatus::INCOME_AND_PROFESSION);

        activity('Preencheu o formulário Renda e ocupação')
            ->performedOn($user)
            ->causedBy($user)
            ->log(":causer.name preencheu o formulário de renda e ocupação.");
    }

    public function saveAddress(UserSaveAddressRequest $request)
    {
        $data = $request->all();
        
        $userArray = array();
        $addressArray = array();

        $userArray = $data['user'];
        $addressArray = $data['address'];
        $userId = $userArray['id'];

        $user = $this->getUserById($userId);

        $this->addressService->store($user, $addressArray);

        $this->userRegisterStatusService->store($userId, UserRegisterStatus::ADDRESS);

        activity('Preencheu o formulário Endereço')
            ->performedOn($user)
            ->causedBy($user)
            ->log(":causer.name preencheu o formulário de endereço.");
    }

    public function savePersonalReference(UserSavePersonalReferenceRequest $request)
    {
        $data = $request->all();
        
        $userArray = array();
        $personalReferenceArray = array();

        $userArray = $data['user'];
        $personalReferenceArray = $data['personal_reference'];
        $userId = $userArray['id'];

        $user = $this->getUserById($userId);

        $this->personalReferenceService->store($user, $personalReferenceArray);

        $this->userRegisterStatusService->store($userId, UserRegisterStatus::PERSONAL_REFERENCE);

        activity('Preencheu o formulário Referências pessoais')
            ->performedOn($user)
            ->causedBy($user)
            ->log(":causer.name preencheu o formulário de referências pessoais.");
    }

    /**
     * @param UserSaveDocumentsRequest
     */
    public function saveDocuments(UserSaveDocumentsRequest $request)
    {
        try {
            $data = $request->all();
        
            $userArray = array();
            $addressArray = array();
            $personalInfoArray = array();
        
            $userArray = $data['user'];
            $userId = $userArray['id'];

            $user = $this->getUserById($userId);

            $addressProof = $this->documentsService->find($data['address']['address_proof']['uuid']);
            $personalInfoIncomeProof = $this->documentsService->find($data['personal_info']['income_proof']['uuid']);
            $userIdentityProofFront = $this->documentsService->find($data['user']['identity_proof_front']['uuid']);

            $this->addressService->updateProofId($user, $addressProof->id);

            $personalInfo = UserPersonalInfo::where("user_id", $userId)->first();

            $personalInfoArray['income_proof_id'] = $personalInfoIncomeProof->id;

            $personalInfo->fill($personalInfoArray);
            $personalInfo->save();

            $userArray['identity_proof_front_id'] = $userIdentityProofFront->id;

            if (isset($data['user']['identity_proof_back']['uuid'])) {
                $userIdentityProofBack = $this->documentsService->find($data['user']['identity_proof_back']['uuid']);
                $userArray['identity_proof_back_id'] = $userIdentityProofBack->id;
                $this->documentsService->moveToFinal($userIdentityProofBack);
            }

            $userArray['gross_income'] = money($userArray['gross_income'], true);
            $userArray['patrimony'] = money($userArray['patrimony'], true);
            $user->fill($userArray);
            $user->save();

            if (isset($data['spouse']['income_proof']['uuid'])) {
                $spouseIncomeProof = $this->documentsService->find($data['spouse']['income_proof']['uuid']);
                $spouse = Spouse::find($personalInfo->spouse_id);
                $spouse->income_proof_id = $spouseIncomeProof->id;
                $spouse->save();

                $this->documentsService->moveToFinal($spouseIncomeProof);
            }

            $this->documentsService->moveToFinal($addressProof);
            $this->documentsService->moveToFinal($personalInfoIncomeProof);
            $this->documentsService->moveToFinal($userIdentityProofFront);

            $this->userRegisterStatusService->store($userId, UserRegisterStatus::DOCUMENTS);

            activity('Preencheu o formulário Documentos')
                ->performedOn($user)
                ->causedBy($user)
                ->log(":causer.name preencheu o formulário de documentos.");
        } catch (\Exception $exception) {
            $this->documentsService->rollBack();
            throw $exception;
        }
    }

    public function saveBankDetails(UserSaveBankDetailsRequest $request)
    {
        $data = $request->all();
        
        $userArray = array();
        $bankDetailsArray = array();

        $userArray = $data['user'];
        $bankDetailsArray = $data['bank_account'];
        $userId = $userArray['id'];

        $user = $this->getUserById($userId);

        $bankDetailsArray['agency_number'] = preg_replace('/[\W]/', '', $bankDetailsArray['agency_number']);
        $bankDetailsArray['account_number'] = preg_replace('/[\W]/', '', $bankDetailsArray['account_number']);

        $this->bankAccountService->store($user, $bankDetailsArray);

        $this->userRegisterStatusService->store($userId, UserRegisterStatus::BANK_DETAILS);

        activity('Preencheu o formulário Dados bancários')
            ->performedOn($user)
            ->causedBy($user)
            ->log(":causer.name preencheu o formulário de dados bancários.");
    }

    public function saveFacialBiometryData(UserSaveFacialBiometryDataRequest $request)
    {
        $data = $request->all();
        
        $userArray = array();
        $facialBiometryArray = array();

        $userArray = $data['user'];
        $facialBiometryArray = $data['facial_biometry'];

        $userId = $userArray['id'];

        $user = $this->getUserById($userId);

        $this->facialBiometryService->save($userId, $facialBiometryArray);

        $this->userRegisterStatusService->store($userId, UserRegisterStatus::FACIAL_BIOMETRY);

        activity('Passou pela etapa de biometria facial')
            ->performedOn($user)
            ->causedBy($user)
            ->log(":causer.name passou pela etapa de biometria facial.");
    }

    public function saveFacialBiometryCameraBlockedInformation(UserSaveFacialBiometryCameraBlockedInformationRequest $request)
    {
        $data = $request->all();
        
        $userArray = array();
        $userArray = $data['user'];
        $userId = $userArray['id'];
        $cameraBlocked = $data['cameraBlocked'];

        $user = $this->getUserById($userId);

        $this->facialBiometryService->saveCameraBlockedInformation($userId, $cameraBlocked);

        $this->userRegisterStatusService->store($userId, UserRegisterStatus::FACIAL_BIOMETRY);

        if($cameraBlocked == true){
            activity('Bloqueou o acesso à câmera')
                ->performedOn($user)
                ->causedBy($user)
                ->log(":causer.name passou pela etapa de biometria facial e bloqueou o acesso à câmera.");
        }
        else{
            activity('Device não suporta o acesso à câmera')
                ->performedOn($user)
                ->causedBy($user)
                ->log(":causer.name passou pela etapa de biometria facial mas o device não suporta o acesso à câmera.");
        }
    }

    public function getFacialBiometryAppKey(UserGetFacialBiometryAppKeyRequest $request)
    {
        $data = $request->all();

        $name = $data['name'];
        $cpf = $data['cpf'];
        $birthday = $data['birthday']['date'];

        $appKey = $this->facialBiometryService->getFacialBiometryAppKey($cpf, $name, $birthday);

        return $appKey;
    }

    private function saveUser(UserRegisterRequest $request)
    {
        $data = $request->all();

        $this->validateEmail($request);

        $user = $this->findIfExists($data);

        if (!$user->exists) {
            try {
                DB::beginTransaction();

                $user = $this->store($user, $data);

                DB::commit();

                return $user->id;
            } catch (\Exception $exception) {
                DB::rollBack();
                handle($exception, $exception->getMessage(), 500, true);
            }
        }

        $hasLoan = $this->loanService->hasLoan($user);

        if (!$hasLoan) {
            return $user->id;
        }

        $hasRejectedLoan90Days = $this->loanService->hasRejectedLoan90Days($user);

        if ($hasRejectedLoan90Days) {
            activity('Cliente negado nos últimos 90 dias')
            ->performedOn($user)
            ->causedBy($user)
            ->log(":causer.name tentou realizar um novo empréstimo mas foi negado nos últimos 90 dias. A solicitação foi recusada.");

            throw new ApiException('Ops! Para fazer uma nova solicitação, é necessário esperar por 90 dias.', 403);
        }

        $lastLoan = $this->loanService->getLastLoan($user);

        $loanBeingRegistered = $this->loanService->loanBeingRegistered($lastLoan);

        if ($loanBeingRegistered) {
            return $user->id;
        }

        $canGetNewLoan = !$this->loanService->loanIsActive($lastLoan) && $this->loanService->loanRequestedMoreThan90Days($lastLoan);

        if (!$canGetNewLoan) {
            activity('Cliente tem empréstimo ativo ou quitado/cancelado há menos de 90 dias.')
                    ->performedOn($user)
                    ->causedBy($user)
                    ->log(":causer.name tentou realizar um novo empréstimo mas tem empréstimo ativo ou quitado/cancelado há menos de 90 dias. A solicitação foi recusada.");

            throw new ApiException('Ops! O seu cadastro não se enquadra nas regras para uma nova solicitação.', 403);
        }
    
        return $user->id;
    }

    /**
     * @param int $userId
     * @return User
     */
    public function getUserById(int $userId) : User
    {
        try {
            return User::findOrFail($userId);
        } catch (\Exception $exception) {
            throw new ApiException("Usuário não encontrado.", 404);
        }
    }

    /**
     * Compare two emails and if they are not the same, throw an exception.
     * @param UserRegisterRequest $request
     * @return void
     */
    private function validateEmail(UserRegisterRequest $request) : void
    {
        if (strtolower($request->email) !== strtolower($request->email_confirmation)) {
            throw new ApiException('Ops! o e-mail de confirmação está diferente do e-mail informado.', 400);
        }
    }
}
