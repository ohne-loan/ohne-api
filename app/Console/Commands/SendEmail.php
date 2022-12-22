<?php

namespace App\Console\Commands;

use App\Exceptions\ApiException;
use App\Mail\StatusBoletoMail;
use App\Models\CronLog;
use App\Models\LoanInstallment;
use App\Models\LogEmail;
use App\Models\User;
use App\Models\Invoice;
use App\Models\Loan;
use App\Models\InvoiceInstallment;
use App\Models\LoanTag;
use App\Services\InvoiceService;
use App\Services\UserService;
use App\Services\LogService;
use App\Services\FinancialProductService;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
use stdClass;

class SendEmail extends Command
{
    const default_days = [-3, 0, 3, 5, 10, 15, 20, 30, 35, 55, 60, 90];

    const percentage_fine = 0.02;
    const percentage_interest = 0.01;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia e-mails boleto';

    /**
     * @var UserService
     */
    private $userService;

    /**
     * @var InvoiceService
     */
    private $invoiceService;

    /**
     * @var FinancialProductService
     */
    private $financialProductService;

    /**
     * @var LogService
     */
    private $logService;

    private $log;

    /**
     * Create a new command instance.
     *
     * @param UserService $userService
     * @param InvoiceService $invoiceService
     */
    public function __construct(
        UserService $userService, 
        InvoiceService $invoiceService, 
        FinancialProductService $financialProductService,
        LogService $logService)
    {
        parent::__construct();
        $this->userService = $userService;
        $this->invoiceService = $invoiceService;
        $this->financialProductService = $financialProductService;
        $this->logService = $logService;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     * @throws \Exception
     */
    public function handle()
    {
        $invoicesAlreadySendToday = CronLog::where('created_at', '>=', now()->toDateString())->first() != null;

        if ($invoicesAlreadySendToday) {
            return;
        }

        $this->sendEmails();
    }

    /**
     * @throws \Exception
     */
    private function sendEmails()
    {
        $this->updateStatusInstallmentsArrear();

        $this->sendEmailsUntil90Days();

        $this->sendEmailsMoreThan90Days();
    }

    private function sendEmailsUntil90Days()
    {
        $this->createLog();

        $emailsSuccess = 0;
        $emailsError = 0;
        $errors = array();

        $loansIdWithInstallmentsArrerMoreThan90Days = LoanInstallment::select('loan_id AS loanId')
            ->distinct()
            ->whereIn('status', [ LoanInstallment::ARREAR, LoanInstallment::ACCELERATED ])
            ->whereRaw('current_date - date > ?', 90)
            ->get()
            ->toArray();

        foreach (self::default_days as $day) {
            $status = LoanInstallment::ARREAR;
            
            if ($day <= 0) {
                $status = LoanInstallment::PENDING;
            }

            $viewLayoutEmail = $this->getViewLayoutEmail($status, $day);

            $installmentsData = $this->getInstallmentsDataToSendInvoice($status, $day, $viewLayoutEmail, $loansIdWithInstallmentsArrerMoreThan90Days);

            foreach ($installmentsData as $installmentData) {
                try {
                    $userId = $installmentData['userId'];
                    $installmentId = $installmentData['installmentId'];

                    $user = $this->userService->find($userId);
                    $installment = LoanInstallment::find($installmentId);

                    $firstInvoice = $this->verifyIfIsFirstInvoice($status, $day, $installmentData);

                    if ($firstInvoice) {
                        $viewLayoutEmail = 'first-invoice-loan';
                    }

                    $isAmcLatePaymentEmail = $day == 20 && $installment->loan->tag->tag === LoanTag::AMC;

                    if($isAmcLatePaymentEmail){
                        $viewLayoutEmail = 'amc-late-payment-20-invoice-loan';
                    }

                    $firstInvoiceForThisInstallment = $day == -3;

                    if ($firstInvoiceForThisInstallment) {
                        $invoice = $this->issueFirstInvoiceForInstallment($user, $installment);
                    } else {
                        $invoiceInstallment = InvoiceInstallment::select(['invoice_installments.*'])
                            ->join('invoices', 'invoices.id', 'invoice_installments.invoice_id')
                            ->where('invoice_installments.loan_installment_id', $installment->id)
                            ->orderByDesc('invoices.expiration_date')
                            ->first();

                        $invoice = Invoice::find($invoiceInstallment->invoice_id);

                        $isInvoiceInPaymentWindow = $this->invoiceService->isInvoiceInPaymentWindow($invoice);

                        if($day !== 90 && !$isInvoiceInPaymentWindow){
                            $currentDate = date('Y-m-d');

                            try {
                                $this->invoiceService->deleteInvoice($invoice);
                            } catch (\Throwable $th) {
                                // Se der erro ao deletar a invoice, segue com o processamento pois não há impacto.
                            }
                            
                            $invoice = $this->issueInvoice($user, $installment, $currentDate, $day);
                        }

                        if ($invoice == null || !isset($invoice)) {
                            throw new \Exception("Erro ao enviar e-mail de cobrança. Não existe boleto gerado para a parcela id {$installmentId}.");
                        }
                    }

                    $mail = new StatusBoletoMail($user, $installment, $invoice, $viewLayoutEmail);

                    if($isAmcLatePaymentEmail){
                        $bccEmail = env('AMC_BCC_EMAIL');
                        Mail::to($user->email)
                        ->bcc($bccEmail)
                        ->send($mail);
                    }
                    else{
                        Mail::to($user->email)->send($mail);
                    }
                    
                    $this->logEmail($viewLayoutEmail, $installment, $user);
                    
                    $emailsSuccess++;
                } catch (\Exception $e) {
                    array_push($errors, $e);
                    $emailsError++;
                    $this->updateLog($emailsSuccess, $emailsError, CronLog::ERROR, $e->getMessage());
                }
            }
        }

        if ($emailsError > 0) {
            foreach ($errors as $error) {
                $this->logService->insertLogException($error);
                Bugsnag::notifyException($error);
            }
        }

        $this->updateLog($emailsSuccess, $emailsError);
    }

    /**
     * @param User $user
     * @param LoanInstallment $installment
     * @param string $currentDate
     * @param int $day
     * @return stdClass
     */
    private function issueInvoice(User $user, LoanInstallment $installment, string $currentDate, int $day): stdClass
    {
        $originalDueDate = $installment->date;
        $installment->date = $currentDate;
        $monthlyCetRate = $installment->loan->monthly_cet_rate;
        $percentageInterest = (round(($monthlyCetRate + 1), 2)/100);
        
        $interest = $this->financialProductService->calculateInterest($percentageInterest, $installment->amount, $day);
        $fine = $this->financialProductService->calculateFine(self::percentage_fine, $installment->amount);

        $installment->amount += $fine;
        $installment->amount += $interest;

        $invoiceInstallment = new InvoiceInstallment();
        $invoiceInstallment->loanInstallmentId = $installment->id;
        $invoiceInstallment->paymentAmount = money($installment->amount);
        $invoiceInstallment->fineAmount = money($fine);
        $invoiceInstallment->interestAmount = money($installment->interest + $interest);

        $interestAmount = money($installment->interest + $interest + $fine);
        
        $invoice = $this->invoiceService->issueInvoice(
            $user, 
            $installment,
            $invoiceInstallment,
            $interestAmount,
            $originalDueDate, 
            false
        );

        return $invoice;
    }

    /**
     * @param User $user
     * @param LoanInstallment $installment
     * @return stdClass
     */
    private function issueFirstInvoiceForInstallment(User $user, LoanInstallment $installment): stdClass
    {
        $invoiceInstallment = new InvoiceInstallment();
        $invoiceInstallment->loanInstallmentId = $installment->id;
        $invoiceInstallment->paymentAmount = money($installment->amount);
        $invoiceInstallment->fineAmount = 0;
        $invoiceInstallment->interestAmount = money($installment->interest);

        $interestAmount = money($installment->interest);

        $invoice = $this->invoiceService->issueInvoice(
            $user, 
            $installment, 
            $invoiceInstallment, 
            $interestAmount
        );

        return $invoice;
    }

    private function sendEmailsMoreThan90Days()
    {
        $this->createLog();

        $invoice = new stdClass();
        $invoice->link = '';

        $emailsSuccess = 0;
        $emailsError = 0;
        $errors = array();

        $viewLayoutEmail = "invoice-loan-arrear-more-than-90-days";
        $intervalSendEmailInDays = 15;
        $daysArrear = 90;
        
        $scriptSelect = "SELECT
                            l.id AS loan_id,
                            MAX(li.id) AS installment_id
                        FROM loans AS l
                        INNER JOIN loan_installments AS li
                        ON l.id = li.loan_id
                        INNER JOIN loan_tags AS lt
                        ON l.id = lt.loan_id
                        WHERE l.status = :loanStatus
                        AND li.status IN ('ARREAR', 'ACCELERATED')
                        AND lt.tag IN ('AMC', 'OHNE')
                        AND li.deleted_at IS NULL
                        AND current_date - li.date > :daysArrear
                        AND l.id NOT IN (
                            SELECT DISTINCT
                                loan_id
                            FROM loan_installments AS li
                            INNER JOIN log_emails AS le
                            ON le.loan_installment_id = li.id
                            WHERE le.email = :email
                            AND current_date - date(le.created_at) <= :intervalSendEmailInDays)
                        GROUP BY
                            l.id";

        $sendChargeEmailOhneLoans = env('SEND_CHARGE_EMAIL_OHNE_LOANS');

        if($sendChargeEmailOhneLoans !== true) {
            $scriptSelect = "SELECT
                                l.id AS loan_id,
                                MAX(li.id) AS installment_id
                            FROM loans AS l
                            INNER JOIN loan_installments AS li
                            ON l.id = li.loan_id
                            INNER JOIN loan_tags AS lt
                            ON l.id = lt.loan_id
                            WHERE l.status = :loanStatus
                            AND li.status IN ('ARREAR', 'ACCELERATED')
                            AND lt.tag IN ('AMC')
                            AND li.deleted_at IS NULL
                            AND current_date - li.date > :daysArrear
                            AND l.id NOT IN (
                                SELECT DISTINCT
                                    loan_id
                                FROM loan_installments AS li
                                INNER JOIN log_emails AS le
                                ON le.loan_installment_id = li.id
                                WHERE le.email = :email
                                AND current_date - date(le.created_at) <= :intervalSendEmailInDays)
                            GROUP BY
                                l.id";
        }        

        $loanAndInstallmentIds = DB::select(DB::raw($scriptSelect), array(
                                                        'loanStatus' => Loan::IN_PROGRESS,
                                                        'daysArrear' => $daysArrear,
                                                        'email' => $viewLayoutEmail,
                                                        'intervalSendEmailInDays' => $intervalSendEmailInDays
                                                     ));

        foreach ($loanAndInstallmentIds as $loanAndInstallmentId) {
            try {
                $loan = Loan::find($loanAndInstallmentId->loan_id);
                $installment = LoanInstallment::find($loanAndInstallmentId->installment_id);
                $user = $loan->user;

                $quantityInstallmentsArrear = $loan->installments->whereIn('status', [ LoanInstallment::ARREAR, LoanInstallment::ACCELERATED ])->count();

                $textQuantityInstallmentsArrear = $quantityInstallmentsArrear > 1 ?
                    'Existem ' . $quantityInstallmentsArrear . ' parcelas do seu empréstimo em atraso.' :
                    'Existe ' . $quantityInstallmentsArrear . ' parcela do seu empréstimo em atraso.';

                $mail = new StatusBoletoMail($user, $installment, $invoice, $viewLayoutEmail, $textQuantityInstallmentsArrear);
                Mail::to($user->email)->send($mail);
        
                $this->logEmail($viewLayoutEmail, $installment, $user);
        
                $emailsSuccess++;
            } catch (\Exception $e) {
                array_push($errors, $e);
                $emailsError++;
                $this->updateLog($emailsSuccess, $emailsError, CronLog::ERROR, $e->getMessage());
            }
        }

        if ($emailsError > 0) {
            foreach ($errors as $error) {
                $this->logService->insertLogException($error);
                Bugsnag::notifyException($error);
            }
        }

        $this->updateLog($emailsSuccess, $emailsError);
    }

    /**
     * @throws ApiException
     */
    private function updateStatusInstallmentsArrear()
    {
        try {
            DB::beginTransaction();

            $installments = LoanInstallment::join('loans', 'loans.id', 'loan_installments.loan_id')
                ->where('loans.status', Loan::IN_PROGRESS)
                ->where('loan_installments.status', LoanInstallment::PENDING)
                ->get(['loan_installments.*']);

            foreach ($installments as $installment) {
                if ($installment->date->toDateString() < now()->toDateString()) {
                    $installment->status = LoanInstallment::ARREAR;
                    $installment->save();
                }
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            \handle($e, "Falha ao atualizar empréstimos", 500, true);
        }
    }

    private function getInstallmentsDataToSendInvoice($status, $numberDays, $viewLayoutEmail, $loansIdWithInstallmentsArrerMoreThan90Days): Collection
    {
        $sendChargeEmailOhneLoans = env('SEND_CHARGE_EMAIL_OHNE_LOANS');

        if($sendChargeEmailOhneLoans === true) {
            $installments = LoanInstallment::whereDoesntHave('logEmail', function ($query) use ($viewLayoutEmail) {
                $query->where('email', $viewLayoutEmail);
            })
                ->select('loan_installments.id as installmentId', 'users.id as userId', 'loan_installments.number as number')
                ->join('loans as l', 'l.id', 'loan_installments.loan_id')
                ->join('users', 'l.user_id', 'users.id')
                ->where('l.status', Loan::IN_PROGRESS)
                ->whereNotIn('l.id', $loansIdWithInstallmentsArrerMoreThan90Days)
                ->where('loan_installments.status', $status)
                ->whereRaw('current_date - loan_installments.date = ?', array($numberDays))
                ->get();
        }
        else{
            $installments = LoanInstallment::whereDoesntHave('logEmail', function ($query) use ($viewLayoutEmail) {
                $query->where('email', $viewLayoutEmail);
            })
                ->select('loan_installments.id as installmentId', 'users.id as userId', 'loan_installments.number as number')
                ->join('loans as l', 'l.id', 'loan_installments.loan_id')
                ->join('users', 'l.user_id', 'users.id')
                ->join('loan_tags as lt', 'l.id', 'lt.loan_id')
                ->where('l.status', Loan::IN_PROGRESS)
                ->where('lt.tag', LoanTag::AMC)
                ->whereNotIn('l.id', $loansIdWithInstallmentsArrerMoreThan90Days)
                ->where('loan_installments.status', $status)
                ->whereRaw('current_date - loan_installments.date = ?', array($numberDays))
                ->get();
        }

        return collect($installments->toArray());
    }

    private function verifyIfIsFirstInvoice($status, $numberDay, $installmentData)
    {
        $userId = $installmentData['userId'];
        $installmentId = $installmentData['installmentId'];

        if (!($status == LoanInstallment::PENDING && $numberDay == -3 && $installmentData['number'] == 1)) {
            return false;
        }

        $installment = LoanInstallment::whereDoesntHave('logEmail', function ($query) {
            $query->where('email', 'first-invoice-loan');
        })
            ->where('loan_installments.id', $installmentId)
            ->where('loan_installments.status', $status)
            ->whereRaw('current_date - loan_installments.date = ?', array($numberDay))
            ->first();

        return $installment != null;
    }

    private function getViewLayoutEmail($status, $day)
    {
        if ($status == LoanInstallment::PENDING && $day == -3) {
            return "invoice-loan";
        }
        
        if ($status == LoanInstallment::PENDING && $day == 0) {
            return "invoice-loan-day0";
        }
        
        return "late-payment-" . $day . "-invoice-loan";
    }

    private function logEmail($mail, LoanInstallment $installment, User $user)
    {
        $logEmail = new LogEmail();
        $logEmail->user_id = $user->id;
        $logEmail->loan_installment_id = $installment->id;
        $logEmail->email = $mail;
        $logEmail->save();
    }

    private function updateLog(int $emailsSuccess, int $emailsError, string $status = CronLog::FINISHED, $message = null)
    {
        $this->log->emails_sent = $emailsSuccess;
        $this->log->emails_failed = $emailsError;
        $this->log->status = $status;
        $this->log->message = $message ?? $this->log->message;
        $this->log->update();
    }

    private function createLog()
    {
        $this->log = new CronLog();
        $this->log->emails_sent = 0;
        $this->log->emails_failed = 0;
        $this->log->status = CronLog::SENDING;
        $this->log->save();
    }
}
