<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use stdClass;
use App\Models\Loan;
use App\Models\User;
use App\Models\ScoreCheck;
use App\Models\UserRegisterStatus;
use App\Mail\GetLoanCompletedEmail;
use App\Services\BackgroundCheckService;
use App\Services\FinancialProductService;
use App\Services\LoanService;
use App\Services\UserRegisterStatusService;

class ProcessLoan implements ShouldQueue
{
    /**
     * @var BackgroundCheckService
     */
    private $backgroundCheckService;

    /**
     * @var FinancialProductService
     */
    private $financialProductService;

    /**
     * @var LoanService
     */
    private $loanService;

    /**
     * @var User
     */
    private $user;

    /**
     * @var UserRegisterStatusService
     */
    private $userRegisterStatusService;

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     * @param array $data
     * @param User $user
     * @return void
     */
    public function __construct(
        User $user
    ) {
        $this->user = $user;
    }

    /**
     * Execute the job.
     * @param array $this->data
     * @param User $user
     * @return void
     */
    public function handle(
        BackgroundCheckService $backgroundCheckService,
        LoanService $loanService,
        FinancialProductService $financialProductService,
        UserRegisterStatusService $userRegisterStatusService
    ) {
        $this->backgroundCheckService = $backgroundCheckService;
        $this->loanService = $loanService;
        $this->financialProductService = $financialProductService;
        $this->userRegisterStatusService = $userRegisterStatusService;

        try {
            $this->checkOmega($this->user);

            $loan = Loan::where([
                'user_id' => $this->user->id,
                'status' => Loan::PROCESSING,
            ])->firstOrFail();

            DB::beginTransaction();

            $loan->status = Loan::PENDING_PRE_APPROVAL;

            $installments = $this->loanService->getSimulatedInstallments($loan->user_id);
            $loan->installments()->saveMany($installments);

            $loan->saveOrFail();

            $this->sendGetLoanCompletedEmail($this->user);

            $this->userRegisterStatusService->store($loan->user_id, UserRegisterStatus::COMPLETED);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();

            activity('Erro ao processar o empréstimo')
                ->performedOn($this->user)
                ->causedBy($this->user)
                ->log("Ocorreu um erro ao processar a solicitação do(a) :causer.name" . $exception->getMessage());

            handle($exception, $exception->getMessage(), 500);
        }
    }

    private function checkOmega(User $user)
    {
        $loan = Loan::where("user_id", $user->id)->first();

        $scoreCheck = $this->backgroundCheckService->doCheck(ScoreCheck::OMEGA, $user);

        $this->userRegisterStatusService->store($loan->user_id, UserRegisterStatus::CHECK_OMEGA);

        if($scoreCheck->status === ScoreCheck::REPROVADO){
            $this->userRegisterStatusService->store($loan->user_id, UserRegisterStatus::REJECTED_OMEGA);    
        }
        else{
            $this->userRegisterStatusService->store($loan->user_id, UserRegisterStatus::APPROVED_OMEGA);
        }

        activity('Passou pela ômega')
            ->performedOn($loan)
            ->causedBy($user)
            ->log(":causer.name passou pela política ômega.");
    }

    private function sendGetLoanCompletedEmail(User $user)
    {
        $mail = new GetLoanCompletedEmail($user);
        Mail::to($user->email)->send($mail);
    }
}
