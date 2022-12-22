<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
use App\Exceptions\ApiException;
use App\Models\Contract;
use App\Models\Loan;
use App\Models\UserBankAccount;
use App\Models\BankAccount;
use App\Models\Bank;
use App\Models\User;
use App\Services\FinancialProductService;
use App\Services\LoanService;
use App\Libraries\D4sign\Client;
use App\Mail\SignedContractMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class ProcessPostBackD4Sign implements ShouldQueue
{
    /**
     * @var array
     */
    private $request;

    /**
     * @var FinancialProductService
     */
    private $financialProductService;

    /**
     * @var LoanService
     */
    private $loanService;

    /**
     * @var data
     */
    private $data;

    /**
     * @var Client
     */
    private $client;

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(
        array $request
    ) {
        $this->request = $request;
        $this->client = new Client();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(
        LoanService $loanService,
        FinancialProductService $financialProductService
    ) {
        $this->loanService = $loanService;
        $this->financialProductService = $financialProductService;

        $finishedDocument = false;
        $cancelledDocument = false;
        $emailNotSent = false;
        $signedDocument = false;

        $data = $this->request;

        switch ($data['type_post']) {
            case "1":
                $finishedDocument = true;
                break;
            case "2":
                $emailNotSent = true;
                break;
            case "3":
                $cancelledDocument = true;
                break;
            case "4":
                $signedDocument = true;
                break;
        }

        $loan = null;

        try {
            $contract = Contract::where("uuid", $data['uuid'])->first();
            $loan = Loan::where('contract_id', $contract->id)->firstOrFail();
            
            if ($finishedDocument) {
                if($contract->status !== Contract::SIGNED){
                    $message = "Requisição de contrato finalizado (assinado por todos) inválida. Uuid: {$data['uuid']}";
                    $apiException = new ApiException($message, 400);

                    \handle($apiException, $message, 400, true);
                }

                $this->payAndUpdateLoan($contract, $loan);

                return;
            }

            DB::beginTransaction();

            if ($cancelledDocument) {
                $contract->status = Contract::CANCELED;
                $contract->save();

                $loan->status = Loan::CANC_BY_CLIENT;
                $loan->save();
            } elseif ($emailNotSent) {
                $contract->status = Contract::CANCELED;
                $contract->save();

                $loan->status = Loan::CANC_CONTR_NSENT;
                $loan->save();
            } elseif ($signedDocument) {
                $contract->status = Contract::SIGNED;
                $contract->sign_date = now();
                $contract->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            handle($e, $e->getMessage(), 500, true);
        }
    }

    private function payAndUpdateLoan(Contract $contract, Loan $loan)
    {
        DB::beginTransaction();

        $this->financialProductService->addLoan($loan);
        
        $loan->status = Loan::IN_PROGRESS;
        $loan->save();

        $userBankAccount = UserBankAccount::where("user_id", $loan->user_id)->first();
        $bankAccount = BankAccount::find($userBankAccount->bank_account_id);
        $bank = Bank::find($bankAccount->bank_id);

        $contractLink = $this->client->getDownloadLink($contract->uuid)->url;

        $firstDueDate = $loan->installments
            ->where('deleted_at', null)
            ->where('number', 1)
            ->first()
            ->date;

        $user = User::find($loan->user_id);

        $this->sendSignedContractMail($user, $loan, $bankAccount, $bank, $contractLink, $firstDueDate);

        DB::commit();
    }

    private function sendSignedContractMail(User $user, Loan $loan, BankAccount $bankAccount, Bank $bank, string $contractLink, Carbon $firstDueDate)
    {
        $mail = new SignedContractMail($user, $loan, $bankAccount, $bank, $contractLink, $firstDueDate);
        Mail::to($user->email)->send($mail);
    }
}
