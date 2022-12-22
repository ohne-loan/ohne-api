<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Loan;
use App\Models\BankAccount;
use App\Models\Bank;
use App\Services\EmailContentService;
use Bugsnag\Utils;
use Carbon\Carbon;
use Hamcrest\Util;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AcceptedLoanMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var User
     */
    private $user;

    /**
     * @var Loan
     */
    private $loan;

    /**
     * @var BankAccount
     */
    private $bankAccount;

    /**
     * @var Bank
     */
    private $bank;

    /**
     * @var string
     */
    private $contactLink;

    /**
     * @var Carbon
     */
    private $firstDueDate;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Loan $loan, BankAccount $bankAccount, Bank $bank, string $contactLink, Carbon $firstDueDate)
    {
        $this->user = $user;
        $this->loan = $loan;
        $this->bankAccount = $bankAccount;
        $this->bank = $bank;
        $this->contactLink = $contactLink;
        $this->firstDueDate = $firstDueDate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $firstDueDate = $this->firstDueDate;
        $agency = $this->bankAccount->agency_number;
        $account = $this->bankAccount->account_number;
        $bankId = $this->bankAccount->bank_id;
        $bank = $this->bank->find($bankId)->name;   

        return $this->view('emails.accepted-loan')
            ->subject("Ohne | Temos uma ótima notícia pra você...")
            ->with([
                'name' => getFirstName($this->user->name),
                'fullName' => $this->user->name,
                'cpf' => $this->user->cpf,
                'birthDate' => \formatarDataPorExtenso($this->user->birthday),
                'loanAmount' => "R$" . \formatMoney($this->loan->amount),
                'numInstallments' => $this->loan->num_installments,
                'valueInstallments' => "R$" . \formatMoney($this->loan->installment_value),
                'firstDueDate' => \formatarDataPorExtenso($firstDueDate),
                'agency' => $agency,
                'bank' => $bank,
                'account' => $account,
                'contactLink' => $this->contactLink,
                'date' => dataPorExtenso()
            ]);
    }
}