<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\TopazioService;
use App\Libraries\Topazio\Client;
use App\Models\User;
use App\Models\ScoreCheck;
use App\Models\LoanAddTopazio;
use App\Models\LoanSimulatedTopazio;
use App\Models\LoanSimulatedInstallmentsTopazio;
use App\Models\Loan;
use App\Models\BankAccount;
use App\Models\Bank;
use App\Models\UserBankAccount;

class TopazioServiceTest extends TestCase
{
    /**
     * @var Client $client
     */
    private $client;

    public function shouldCreateClient()
    {
        try {
            $topazioService = new TopazioService();
            $this->client = new Client();
    
            $accessToken = $this->client->getAccessToken();

            $userId = 7;
    
            $user = User::find($userId);
            $scoreCheck = ScoreCheck::where('user_id', $userId)->first();
            $userBankAccount = UserBankAccount::where('user_id', '=', $user->id)->first();
            $bankAccount = BankAccount::find($userBankAccount->bank_account_id);
            $bankCode = Bank::find($bankAccount->bank_id)->code;
    
            $clientId = 15;
    
            $topazioService->addClient($user, $scoreCheck, $accessToken);

            $this->assertTrue(true);
        } catch (\Exception $e) {
            echo($e);
        }
    }

    public function testShouldAddLoanError()
    {
        try {
            $loan = Loan::select(['loans.*'])->join('contracts', 'loans.contract_id', '=', 'contracts.id')
            ->where('contracts.uuid', '0024abb8-1000-4343-8935-fc82fa2b579b')
            ->first();

            $topazioService = new TopazioService();
    
            $topazioService->addLoan($loan);

            $this->assertTrue(true);
        } catch (\Exception $e) {
            echo($e);
        }
    }

    // public function testShouldgetLoan()
    // {
    //     $topazioService = new TopazioService();

    //     $clientId = 15;

    //     $result = $topazioService->getLoan($clientId);

    //     $this->assertTrue(isset($result));
    // }
}
