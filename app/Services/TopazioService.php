<?php

namespace App\Services;

use App\Models\User;
use App\Models\ScoreCheck;
use App\Models\LoanAddTopazio;
use App\Models\LoanSimulatedInternal;
use App\Models\LoanSimulatedInternalInstallments;
use App\Models\Loan;
use App\Models\BankAccount;
use App\Models\Bank;
use App\Models\UserBankAccount;
use App\Libraries\Topazio\Client;
use Carbon\Carbon;

use stdClass;

class TopazioService
{
    /**
     * @var Client $client
     */
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * Add an loan in the Topazio bank, save result and return the result of process
     * @param Loan $loan
     */
    public function addLoan(Loan $loan) : bool
    {
        $loanTag = $loan->tag->tag;
        $userId = $loan->user_id;

        $accessToken = $this->client->getAccessToken($loanTag);

        $user = User::find($userId);
        $scoreCheck = ScoreCheck::where('user_id', $userId)->first();
        $userBankAccount = UserBankAccount::where('user_id', '=', $user->id)->first();
        $bankAccount = BankAccount::find($userBankAccount->bank_account_id);
        $bankCode = Bank::find($bankAccount->bank_id)->code;

        try {
            $this->addClient($user, $scoreCheck, $accessToken, $loanTag);

            $loanSimulated = LoanSimulatedInternal::where('user_id', $userId)
                ->orderBy('id', 'desc')
                ->first();

            $resultAddLoan = $this->_addLoan($user, $scoreCheck, $loan, $bankAccount, $bankCode, $loanSimulated, $accessToken);
    
            if ($resultAddLoan === null || !$resultAddLoan->success) {
                $errorMessage = 'Erro ao adicionar loan - Topázio';

                $ex = new \Exception($errorMessage);
                handle($ex, $errorMessage, 500, true);
                return false;
            }
            
            $ccbNumber = $resultAddLoan->data->CCB;
    
            $this->confirmLoan($ccbNumber, $loan->id, $user->cpf, $accessToken, $loanTag);
    
            $this->saveResultAddLoan($ccbNumber, $userId);

            return true;
        } catch (\Exception $ex) {
            handle($ex, 'Erro ao adicionar loan - Topázio', 500, true);
        }
    }

    public function getNextWorkDay(string $loanTag) : Carbon
    {
        $accessToken = $this->client->getAccessToken($loanTag);
        
        $nextWorkDay = $this->client->getNextWorkDay($accessToken, $loanTag);

        return Carbon::parse($nextWorkDay);
    }
    
    private function addClient(User $user, ScoreCheck $scoreCheck, string $accessToken, string $loanTag)
    {
        $result = $this->client->addClient($user, $scoreCheck, $accessToken, $loanTag);

        if (!$result->success) {
            $e = new \Exception($result);
            throw $e;
        }
    }

    private function _addLoan(User $user, ScoreCheck $scoreCheck, Loan $loan, BankAccount $bankAccount, string $bankCode, LoanSimulatedInternal $loanSimulated, string $accessToken)
    {
        $result = $this->client->addLoan($user, $scoreCheck, $loan, $bankAccount, $bankCode, $loanSimulated, $accessToken);

        return $result;
    }
  
    private function confirmLoan(int $ccbNumber, int $partnerId, string $document, string $accessToken, string $loanTag)
    {
        $result = $this->client->confirmLoan($ccbNumber, $partnerId, $document, $accessToken, $loanTag);

        if (!$result->success) {
            $e = new \Exception($result);
            throw $e;
        }
    }

    private function saveResultAddLoan(int $ccbNumber, int $userId)
    {
        $loanAdd = new LoanAddTopazio();

        $loanAdd->user_id = $userId;
        $loanAdd->ccb_number = $ccbNumber;

        $loanAdd->save();
    }
}
