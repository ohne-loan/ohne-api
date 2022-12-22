<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\ApiException;
use App\Http\Requests\LoanApproveRequest;
use App\Http\Requests\LoanObservationRequest;
use App\Http\Requests\Admin\LoanChangeValueAndAmountOfInstallmentsRequest;
use App\Http\Requests\Admin\LoanPatchRequest;
use App\Http\Requests\LoanPreApproveRequest;
use App\Http\Resources\ContractResource;
use App\Http\Resources\LoanInstallmentResource;
use App\Http\Resources\LoanAdminResource;
use App\Http\Resources\LoanResource;
use App\Http\Resources\LoanObservationResource;
use App\Http\Responses\SuccessResponse;
use App\Libraries\D4sign\Client;
use App\Models\Loan;
use App\Models\LoanObservation;
use App\Models\User;
use App\Models\ScoreCheck; 
use App\Models\LoanTag; 
use App\Services\LoanService;
use http\Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class LoanController extends Controller
{
    /**
     * @var LoanService
     */
    private $loanService;

    public function __construct(
        LoanService $loanService
    ) {
        $this->loanService = $loanService;
        $this->client = new Client();
    }

    public function index()
    {
        if (!request()->has('status')) {
            return response()->json(["data" => []]);
        }

        $status = request()->get('status');
        $loanTag = request()->get('loanTag');

        switch (strtoupper($status)) {
            case Loan::PENDING_GROUP:
                $this->authorize('view_pending-pre-approval_loans');
                $this->authorize('view_wait-sign_loans');
                $status = Loan::PENDING_GROUP_ARRAY;

                break;
            case Loan::PENDING_APPROVAL_GROUP:
                $this->authorize('view_pending-approval_loans');
                $status = Loan::PENDING_APPROVAL_GROUP_ARRAY;

                break;
            case Loan::REJECTED_GROUP:
                $this->authorize('view_rejected_loans');
                $status = Loan::REJECTED_GROUP_ARRAY;
                break;
            case Loan::REJECTED_BY_PARTNER_GROUP:
                $this->authorize('view_rejected_by_partner_loans');
                $status = Loan::REJECTED_BY_PARTNER_GROUP_ARRAY;
                break;
            case Loan::FINISHED_GROUP:
                if($loanTag === LoanTag::OHNE){
                    $this->authorize('view_finished_loans');
                    $this->authorize('view_progress_loans');
                }
                else{
                    $this->authorize('view_progress_partner_loans');
                }
                $status = Loan::FINISHED_GROUP_ARRAY;
                break;
            default:
                return response()->json(["data" => []]);
                break;
        }

        $perPage = Input::get('limit', 20);
        $loans = $this->loanService->all($perPage, $status, $loanTag);
                        
        return LoanAdminResource::collection($loans);
    }

    /**
     * @param $id
     * @return LoanResource
     * @throws ApiException
     */
    public function show($id)
    {
        try {
            $resource = Loan::findOrFail($id);

            if ($resource->installment_value === null) {
                $resource->installment_value = money($this->loanService->calculateInstallmentValue($resource));
            }

            if (!empty($resource->installments)) {
                $resource = $this->loanService->getExtraData($resource);
            }

            if ($resource->contract) {
                $resource->contract->link = $this->client->getDownloadLink($resource->contract->uuid);
            }

            $resource = new LoanResource($resource->load([
                'user',
                'user.address',
                'user.address.addressProof',
                'user.maritalStatus',
                'user.identityProofFront',
                'user.identityProofBack',
                'user.phones',
                'user.professionalClass',
                'user.facialBiometries',
                'user.bankAccounts',
                'user.rg',
                'user.rg.state',
                'user.scoreChecks',
                'user.personalReference',
                'user.personalInfo',
                'user.personalInfo.spouse',
                'user.personalInfo.spouse.incomeProof',
                'user.personalInfo.educationLevel',
                'user.personalInfo.incomeProof',
                'user.personalInfo.naturalityUf',
                'loanReason',
                'contract',
                'installments']));

            return $resource;
        } catch (\Exception $e) {
            handle($e, 'Erro ao buscar empréstimo', 500, true);
        }
    }

    /**
     * @param $id
     * @return mixed
     * @throws ApiException
     */
    public function showInstallments($id)
    {
        try {
            $loan = Loan::findOrFail($id);
            $installments = $this->loanService->getInstallments($loan);
        } catch (\Exception $e) {
            throw new ApiException("Falha ao obter parcelas", 500);
        }

        return LoanInstallmentResource::collection($installments);
    }

    /**
     * @param LoanPreApproveRequest $request
     * @return LoanResource
     */
    public function preApprove(LoanPreApproveRequest $request)
    {
        try {
            $loanId = $request->input('loan_id');
            
            $loan = Loan::findOrFail($loanId);
            $userCpf = $loan->user->cpf;
    
            $this->loanService->preApprove($loan);

            activity('Empréstimo pré-aprovado')
                ->performedOn($loan)
                ->causedBy(Auth::user())
                ->log(":causer.name pré-aprovou o empréstimo do cpf " . $userCpf . " de id :subject.id no valor de :subject.amount");
                
            return new LoanResource($loan);
        } catch (\Exception $e) {
            handle($e, 'Erro ao pré-aprovar o empréstimo.', 500, true);
        }
    }

    /**
     * @param Request $request
     * @return LoanResource
     */
    public function approve(Request $request)
    {
        try {
            $id = $request->input('loan_id');
            $resource = Loan::findOrFail($id);
            $userCpf = $resource->user->cpf;
            $resource = $this->loanService->acceptLoan($resource);

            activity('Empréstimo aprovado')
                ->performedOn($resource)
                ->causedBy(Auth::user())
                ->log(":causer.name aprovou o empréstimo do cpf " . $userCpf . " de id :subject.id no valor de :subject.amount");

            return new LoanResource($resource->load('installments'));
        } catch (\Exception $e) {
            handle($e, 'Erro ao aprovar contrato', 500, true);
        }
    }

    /**
     * @param Request $request
     * @return LoanResource
     * @throws ApiException
     */
    public function reject(Request $request)
    {
        try {
            $id = $request->input('loan_id');
            
            $resource = Loan::findOrFail($id);
            $userCpf = $resource->user->cpf;
    
            $this->loanService->rejectLoan($resource);

            activity('Empréstimo reprovado')
                ->performedOn($resource)
                ->causedBy(Auth::user())
                ->log(":causer.name reprovou o empréstimo do cpf " . $userCpf . " de id :subject.id no valor de :subject.amount");
                
            return new LoanResource($resource);
        } catch (\Exception $e) {
            handle($e, 'Erro ao reprovar o empréstimo', 500, true);
        }
    }

    /**
     * @param Request $request
     * @return LoanResource
     * @throws ApiException
     */
    public function rejectByPartner(Request $request)
    {
        try {
            $id = $request->input('loan_id');
            
            $resource = Loan::findOrFail($id);
            $userCpf = $resource->user->cpf;
    
            $this->loanService->rejectLoanByPartner($resource);

            activity('Empréstimo reprovado pelo parceiro')
                ->performedOn($resource)
                ->causedBy(Auth::user())
                ->log(":causer.name reprovou o empréstimo do cpf " . $userCpf . " de id :subject.id no valor de :subject.amount");
                
            return new LoanResource($resource);
        } catch (\Exception $e) {
            handle($e, 'Erro ao reprovar o empréstimo', 500, true);
        }
    }

    /**
     * @param LoanObservationRequest $request
     * @throws \Exception
     */
    public function observation(LoanObservationRequest $request)
    {
        try {
            $loanId = $request->input('loan_id');
            $userId = Auth::user()->id;

            $observationArray = $request->all();
            $observationArray['created_by_user_id'] = $userId;

            $observation = $this->loanService->addObservation($observationArray);

            activity('Inclusão de observação no empréstimo')
                ->performedOn($observation)
                ->causedBy(Auth::user())
                ->log(":causer.name adicionou uma observação ao empréstimo de id " . $loanId);

            return new SuccessResponse();
        } catch (\Exception $e) {
            handle($e, 'Erro ao adicionar a observação', 500, true);
        }
    }

    /**
     * @param int $loanId
     * @throws \Exception
     */
    public function getObservations($loanId)
    {
        try {
            $observations = LoanObservation::where('loan_id', $loanId)->orderByDesc('created_at')->get();

            foreach ($observations as $observation) {
                $user = User::find($observation->created_by_user_id);
                $observation->created_by = $user->name;
            }

            return LoanObservationResource::collection($observations);
        } catch (\Exception $e) {
            handle($e, 'Erro ao buscar as observações', 500, true);
        }
    }

    public function patch(LoanPatchRequest $request, $id)
    {
        try {
            $requestArray = $request->all();
            $requestArray['loan_id'] = $id;

            $loan = $this->loanService->patch($requestArray);

            return new SuccessResponse();
        } catch (\Exception $e) {
            handle($e, "Não foi possível atualizar o empréstimo.", 500, true);
        }
    }
}
