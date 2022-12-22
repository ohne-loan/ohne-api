<?php


namespace App\Services;

use App\Exceptions\ApiException;
use App\Models\Invoice;
use App\Models\InvoiceInstallment;
use App\Models\InvoiceModifier;
use App\Models\Loan;
use App\Models\LoanInstallment;
use App\Models\User;
use App\Models\StarkBankCustomer;
use App\Models\LogEmail;
use App\Services\HttpService;
use App\Mail\InvoiceLoanIssuedByClientMail;
use App\Jobs\MailProcess;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use stdClass;

class InvoiceService
{
    /**
     * @var HttpService
     */
    private $httpService;

    /**
     * @var string
     */
    private $baseUri;

    public function __construct(
        HttpService $httpService
    ) {
        $this->httpService = $httpService;
        $this->baseUri = env('OHNE_API_CHARGE_URI');
    }

    public function all(): LengthAwarePaginator
    {
        return Invoice::eager()
            ->paginate();
    }

    public function find(int $id): Invoice
    {
        return Invoice::findOrFail($id);
    }

    /**
     * @param Invoice $invoice
     * @param array $modifiers
     * @throws \Exception
     */
    public function store(Invoice $invoice, array $modifiers)
    {
        DB::beginTransaction();

        try {
            if ($invoice->exists) {
                $invoice->modifiers()->delete();
            }

            $invoice->save();

            $this->saveModifiers($invoice, $modifiers);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    private function saveModifiers(Invoice $invoice, $modifiers)
    {
        foreach ($modifiers as $info) {
            $modifier = new InvoiceModifier();
            $modifier->value = $info['value'];
            $modifier->description = $info['description'];
            $modifier->invoice_id = $invoice->id;
            $modifier->save();
        }
    }

    /**
     * Não está sendo utilizado
     * @param Invoice $invoice
     * @throws \Exception
     */
    public function delete(Invoice $invoice)
    {
        $invoice->modifiers()->delete();
        $invoice->delete();
    }

    /**
     * @param Invoice $invoice
     * @return void
     */
    public function deleteInvoice(Invoice $invoice) : void
    {
        try {
            $uri = $this->baseUri . "v1/charge/" . $invoice->code;
            $loanInstallment = $invoice->invoiceInstallments->last()->installment;
            $loan = $loanInstallment->loan->first();
            $loanTag = $loan->tag->tag;

            $accessToken = $this->getAccessToken();
            
            $headers = [
                "Authorization" => "Bearer " . $accessToken,
                "loan-tag" => $loanTag
            ];

            $result = $this->httpService->delete($uri, $headers);

            if ($result->statusCode !== 200) {
                //Só lança exception se for um boleto da starkbank
                if (strlen($invoice->code) === 16) {
                    $customMessage = "Falha ao excluir o boleto (charge) id" . $invoice->code . " Retorno: " . $result->message;
                    throw new ApiException($customMessage, 500);
                }
            }
        } catch (\Exception $e) {
            if ($e instanceof ApiException) {
                $message = $e->getMessage();
                throw $e;
            } else {
                $message = "Falha ao excluir o boleto (charge) id: " . $invoice->code;
                $exception = new ApiException($message, 500, [ $e->getMessage() ]);
                throw $exception;
            }
        }
    }

    /**
     * @param string $accessToken,
     * @param int $loanId,
     * @param array $invoiceInstallments,
     * @param int $amount,
     * @param Carbon $dueDate,
     * @param string $customerId,
     * @param float $fine,
     * @param float $interest,
     * @param float $amortisation,
     * @param float $interestAmount,
     * @param int $overdueLimit,
     * @param array $descriptions,
     * @param bool $issuedByClient
     * @return stdClass
     * @throws \Exception
     */
    private function _issueInvoice(
        string $accessToken,
        int $loanId,
        array $invoiceInstallments,
        float $amount,
        string $dueDate,
        string $customerId,
        float $fine,
        float $interest,
        float $amortisation,
        float $interestAmount,
        int $overdueLimit,
        array $descriptions,
        bool $issuedByClient
    ) {
        try {
            $uri = $this->baseUri . "v1/charge";
            $loan = Loan::find($loanId);
            $loanTag = $loan->tag->tag;

            $headers = [
                "Authorization" => "Bearer " . $accessToken,
                "Content-Type" => "application/json",
                "loan-tag" => $loanTag
            ];

            $body = new stdClass();
            $body->invoiceInstallments = $invoiceInstallments;

            $body->charge = new stdClass();
            $body->charge->amount = $amount;
            $body->charge->dueDate = $dueDate;
            $body->charge->customerId = $customerId;
            $body->charge->fine = $fine;
            $body->charge->interest = $interest;
            $body->charge->amortisation = $amortisation;
            $body->charge->interestAmount = $interestAmount;
            $body->charge->overdueLimit = $overdueLimit;
            $body->charge->descriptions = $descriptions;

            $body->createdByClient = $issuedByClient;

            $result = $this->httpService->post($uri, $headers, $body);

            if ($result->statusCode !== 201) {
                $customMessage = "Falha ao gerar boleto para o empréstimo (loan) id" . $loanId . " Retorno: " . $result->data->message;
                throw new ApiException($customMessage, 500);
            }

            return $result->data;
        } catch (\Exception $e) {
            if ($e instanceof ApiException) {
                $message = $e->getMessage();
                throw $e;
            } else {
                $message = "Falha ao gerar boleto para o empréstimo (loan) id" . $loanId;
                $exception = new ApiException($message, 500, [ $e->getMessage() ]);
                throw $exception;
            }
        }
    }

    /**
     * @param User $user
     * @param LoanInstallment $installment
     * @param InvoiceInstallment $invoiceInstallment
     * @param float $interestAmount
     * @param Carbon $originalDueDate
     * @param bool $withFine
     * @return stdClass
     * @throws \Exception
     */
    public function issueInvoice(
        User $user,
        LoanInstallment $installment,
        InvoiceInstallment $invoiceInstallment,
        float $interestAmount,
        Carbon $originalDueDate = null,
        bool $withFine = true
    ) {
        try {
            $accessToken = $this->getAccessToken();
            $loanId = $installment->loan_id;
            $invoiceInstallments = [$invoiceInstallment];
            $installment->amount = money($installment->amount);
            $amount = $installment->amount;
            $dueDate = $installment->date->format('Y-m-d');
            $customerId = $this->findOrCreateCustomer($user, $accessToken);
            $fine = 0;

            if ($withFine) {
                $fine = env('BOLETO_MULTA_PAGAMENTO_ATRASO');
            }

            $loan = Loan::find($loanId);
            $interest = $this->getInvoiceInterest($loan->monthly_cet_rate);
            $amortisation = money($installment->amortisation);
            $overdueLimit = env('BOLETO_MAXIMO_DIAS_PAGAMENTO_APOS_VENCIMENTO');

            if(isset($installment->fine)){
                $invoiceInstallment->fine = money($installment->fine);
            }

            $descriptionDate = $installment->date->format('d/m/Y');
            if (isset($originalDueDate)) {
                $descriptionDate = $originalDueDate->format('d/m/Y');
            }

            $descriptions = [];

            $description = new stdClass();
            $description->text = "Aceitar o pagamento até {$overdueLimit} dias após o vencimento.";

            array_push($descriptions, $description);

            $description = new stdClass();
            $description->text = "Parcela {$installment->number} de {$installment->loan->num_installments}.";

            array_push($descriptions, $description);

            $description = new stdClass();
            $description->text = "Data de vencimento original: " . $descriptionDate . ".";

            array_push($descriptions, $description);

            $issuedByClient = false;

            $result = $this->_issueInvoice(
                $accessToken,
                $loanId,
                $invoiceInstallments,
                $amount,
                $dueDate,
                $customerId,
                $fine,
                $interest,
                $amortisation,
                $interestAmount,
                $overdueLimit,
                $descriptions,
                $issuedByClient
            );

            return $result;
        } catch (\Exception $e) {
            $message = $e->getMessage();

            activity('Falha ao gerar boleto pelo site')
                ->performedOn($user)
                ->causedBy($user)
                ->log("Cliente :causer.name tentou gerar um boleto mas ocorreu um erro: " . $message . ".");

            \handle($e, $message, 500, true);
        }
    }

    /**
     * @param User $user
     * @param int $loanId
     * @param array $installments
     * @param string $paymentDate
     * @return stdClass
     * @throws \Exception
     */
    public function issueInvoiceByClient(
        User $user,
        int $loanId,
        array $installments,
        string $paymentDate
    ) {
        try {
            $accessToken = $this->getAccessToken();
            $customerId = $this->findOrCreateCustomer($user, $accessToken);
            $invoiceInstallments = [];
            $installmentIds = [];
            $installmentsAmount = 0;
            $loan = Loan::find($loanId);
            $quantityLoanInstallments = $loan->num_installments;

            foreach ($installments as $installment) {
                $loanInstallment = LoanInstallment::find($installment['id']);
                $fineAmount = tryGetValueArray($installment, 'fine_amount');
                $interestAmount = tryGetValueArray($installment, 'interest_amount');

                if($interestAmount == null){
                    $interestAmount = 0;
                }

                $interestAmount = money($interestAmount + $loanInstallment->interest);

                $invoiceInstallment = new InvoiceInstallment();
                $invoiceInstallment->loanInstallmentId = $installment['id'];
                $invoiceInstallment->paymentAmount = $installment['payment_amount'];
                $invoiceInstallment->fineAmount = $fineAmount == null ? 0 : $fineAmount;
                $invoiceInstallment->interestAmount = $interestAmount == null ? 0 : $interestAmount;

                array_push($invoiceInstallments, $invoiceInstallment);
                array_push($installmentIds, $installment['id']);
                $installmentsAmount = $installmentsAmount + $installment['payment_amount'];
            }

            $installmentsAmortisation = LoanInstallment::whereIn('id', $installmentIds)->sum('amortisation');
            $installmentsInterestAmount = $installmentsAmount - $installmentsAmortisation;

            $amount = money($installmentsAmount);
            $dueDate = Carbon::parse($paymentDate)->format('Y-m-d');
            $fine = 0;
            $interest = 0;
            $overdueLimit = 0;
            $descriptions = [];

            $description = new stdClass();
            $description->text = "Boleto gerado pelo cliente.";

            array_push($descriptions, $description);

            $description = new stdClass();
            $description->text = "Referente à(s) parcela(s):";

            array_push($descriptions, $description);

            for ($i=0; $i < count($installments); $i=$i+2) {
                $description = new stdClass();

                $currentInstallment = $installments[$i];
                $isTheLastInstallment = $i >= count($installments) - 1;

                if ($isTheLastInstallment) {
                    $description->text = $currentInstallment['number'] . "/" . $quantityLoanInstallments . " - " . Carbon::createFromFormat('Y-m-d', $currentInstallment['date'])->format('d/m/Y');
                } else {
                    $nextInstallment = $installments[$i+1];

                    $description->text = $currentInstallment['number'] . "/" . $quantityLoanInstallments . " - " . Carbon::createFromFormat('Y-m-d', $currentInstallment['date'])->format('d/m/Y') . " | ";
                    $description->text = $description->text . $nextInstallment['number'] . "/" . $quantityLoanInstallments . " - " . Carbon::createFromFormat('Y-m-d', $nextInstallment['date'])->format('d/m/Y');
                }

                array_push($descriptions, $description);
            }

            $issuedByClient = true;

            $result = $this->_issueInvoice(
                $accessToken,
                $loanId,
                $invoiceInstallments,
                $amount,
                $dueDate,
                $customerId,
                $fine,
                $interest,
                $installmentsAmortisation,
                $installmentsInterestAmount,
                $overdueLimit,
                $descriptions,
                $issuedByClient
            );

            activity('Boleto gerado pelo site')
                ->performedOn($user)
                ->causedBy($user)
                ->log("Cliente :causer.name gerou um boleto pelo site no valor de R$" . \formatMoney($installmentsAmount) . ".");

            return $result;
        } catch (\Exception $e) {
            $message = $e->getMessage();

            activity('Falha ao gerar boleto pelo site')
                ->performedOn($user)
                ->causedBy($user)
                ->log("Cliente :causer.name tentou gerar um boleto mas ocorreu um erro: " . $message . ".");

            \handle($e, $message, 500, true);
        }
    }

    private function getAccessToken()
    {
        try {
            $uri = env('OHNE_API_AUTHENTICATION_URI');
            $uri = $uri . 'v1/authenticate';
            $email = env('OHNE_API_AUTHENTICATION_EMAIL');
            $userKey = env('OHNE_API_AUTHENTICATION_USER_KEY');

            $headers = [
                "Content-Type" => "application/json"
            ];

            $body = new stdClass();
            $body->email = $email;
            $body->userKey = $userKey;

            $result = $this->httpService->post($uri, $headers, $body);

            if ($result->statusCode !== 200) {
                $customMessage = "Falha ao obter o accessToken" . " Retorno: " . $result->message;
                throw new ApiException($customMessage, 500);
            }

            return $result->data->token;
        } catch (\Exception $e) {
            if ($e instanceof ApiException) {
                $message = $e->getMessage();
                throw $e;
            } else {
                $message = "Falha ao obter o accessToken";
                $exception = new ApiException($message, 500, [ $e->getMessage() ]);
                throw $exception;
            }
        }
    }

    private function findCustomer(User $user)
    {
        $customer = StarkBankCustomer::where('user_id', $user->id)->first();

        return $customer;
    }

    private function createCustomer(User $user, string $customerId)
    {
        $starkBankCustomer = StarkBankCustomer::firstOrNew([
            'user_id' => $user->id
        ]);

        $starkBankCustomer->customer_id = $customerId;
        $starkBankCustomer->saveOrFail();
    }

    /**
     * @param User $user
     * @return string
     * @throws \Exception
     */
    private function findOrCreateCustomer(User $user, string $accessToken)
    {
        try {
            $customer = $this->findCustomer($user);

            if ($customer !== null) {
                return $customer->customer_id;
            }

            $uri = $this->baseUri . "v1/charge/customer";
            $loan = $user->loans()->where('status', Loan::IN_PROGRESS)->first();
            $loanId = $loan->id;
            $loanTag = $loan->tag->tag;
            
            $headers = [
                "Authorization" => "Bearer " . $accessToken,
                "Content-Type" => "application/json",
                "loan-tag" => $loanTag
            ];

            $body = new stdClass();
            $body->customer = new stdClass();
            $body->customer->name = $user->name;
            $body->customer->email = $user->email;
            $body->customer->taxId = $user->cpf;
            $body->customer->phone = "(00) 00000-0000";
            $body->customer->tags = [];

            $address = $user->address;

            $body->customer->address = new stdClass();
            $body->customer->address->streetLine1 = $address->address . ", " . $address->number;
            $body->customer->address->streetLine2 = $address->address_extra === null ? "" : $address->address_extra;
            $body->customer->address->district = $address->neighborhood;
            $body->customer->address->city = $address->city;
            $body->customer->address->stateCode = $address->state;
            $body->customer->address->zipCode = $address->postal_code;

            $result = $this->httpService->post($uri, $headers, $body);

            if ($result->statusCode !== 201) {
                $customMessage = "Falha ao criar o cliente (customer) para o empréstimo (loan) id" . $loanId . " Retorno: " . $result->data->message;
                throw new ApiException($customMessage, 500);
            }

            $customerId = $result->data->id;

            $this->createCustomer($user, $customerId);

            return $customerId;
        } catch (\Exception $e) {
            if ($e instanceof ApiException) {
                $message = $e->getMessage();
                throw $e;
            } else {
                $message = "Falha ao criar o cliente (customer) para o empréstimo (loan) id" . $loanId;
                $exception = new ApiException($message, 500, [ $e->getMessage() ]);
                throw $exception;
            }
        }
    }

    /**
     * @param float $monthlyCetRate
     * @return float
     */
    private function getInvoiceInterest(float $monthlyCetRate)
    {
        return round(($monthlyCetRate + 1), 2);
    }

    /**
     * @param string $uuid
     * @return Invoice|\Illuminate\Database\Eloquent\Model|static
     */
    public function findByUUID(string $uuid)
    {
        return Invoice::query()
            ->where('uuid', $uuid)
            ->firstOrFail();
    }

    public function getInstallments(Invoice $invoice)
    {
        $installments = new Collection();

        foreach ($invoice->invoiceInstallments as $invoiceInstallment) {
            $installments->push($invoiceInstallment->installment);
        }

        return $installments;
    }

    public function getLastPayableOrPaidInvoiceByInstallmentId(int $installmentId)
    {
        $invoiceInstallment = InvoiceInstallment::where('loan_installment_id', $installmentId)
            ->orderByDesc('invoice_id')
            ->first();

        if ($invoiceInstallment === null) {
            return null;
        }

        $paidInvoice = Invoice::where('id', $invoiceInstallment->invoice_id)
            ->whereIn('status', [ Invoice::CONFIRMED, Invoice::paid ])
            ->orderByDesc('id')
            ->first();

        if ($paidInvoice !== null) {
            return $paidInvoice;
        }

        $openInvoice = Invoice::where('id', $invoiceInstallment->invoice_id)
            ->whereIn('status', [ Invoice::AUTHORIZED, Invoice::created, Invoice::registered ])
            ->orderByDesc('id')
            ->first();

        if ($openInvoice === null) {
            return null;
        }

        $isInvoiceInPaymentWindow = $this->isInvoiceInPaymentWindow($openInvoice);

        $payableInvoice = $isInvoiceInPaymentWindow ? $openInvoice : null;

        return $payableInvoice;
    }

    public function isInvoiceInPaymentWindow(Invoice $invoice) : bool
    {
        $isInvoiceGeneratedByUser = $invoice->issued_by_client;

        $currentDate = date('Y-m-d');

        if ($isInvoiceGeneratedByUser) {
            $maxDayToPay = $invoice->expiration_date;
        } else {
            $maxOverdueDays = env('BOLETO_MAXIMO_DIAS_PAGAMENTO_APOS_VENCIMENTO');
                            
            $maxDaysToPay = env('BOLETO_DIAS_JANELA_PAGAMENTO');
            $maxOverdueDays = $maxOverdueDays - $maxDaysToPay;
                            
            $maxDayToPay = date("Y-m-d", strtotime($invoice->expiration_date . "+" . $maxOverdueDays . "days"));
        }
                            
        if ($currentDate > $maxDayToPay) {
            return false;
        }

        return true;
    }
}
