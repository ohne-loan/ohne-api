<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use App\Http\Requests\InvoiceRequest;
use App\Http\Requests\InvoiceIssueRequest;
use App\Http\Resources\InvoiceResource;
use App\Http\Resources\LoanInstallmentResource;
use App\Models\LoanInstallment;
use App\Services\FinancialProductService;
use App\Services\InvoiceService;
use App\Services\LoanService;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    /**
     * @var InvoiceService
     */
    private $invoiceService;

    private $loanService;

    public function __construct(InvoiceService $invoiceService, LoanService $loanService, FinancialProductService $financialProductService)
    {
        $this->invoiceService = $invoiceService;
        $this->loanService = $loanService;
        $this->financialProductService = $financialProductService;
    }

    public function index()
    {
        $user = Auth::user();
        $loan = $this->loanService->getCurrentLoan($user);
        $installments = $this->loanService->getInstallments($loan);

        return LoanInstallmentResource::collection($installments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param InvoiceRequest $request
     * @return InvoiceResource
     * @throws \Exception
     */
    public function store(InvoiceRequest $request)
    {
        try {
            $user = Auth::user();
            $data = $request->all();
            $installment  = LoanInstallment::select(['loan_installments.*'])
                ->join('loans', 'loans.id', 'loan_installments.loan_id')
                ->where('loans.user_id', $user->id)
                ->where('loans.id', $data['loan_id'])
                ->where('loan_installments.id', $data['installment_id'])
                ->first();

            $installmentMonth = date("m", strtotime($installment->date));
            $currentMonth = date("m", strtotime(now()));

            if ($installment->invoices()->exists()) {
                return new InvoiceResource($installment->invoices->first());
            } else {
                if ($installmentMonth == $currentMonth) {
                    $invoice = $this->invoiceService->issueInvoice($user, $installment);
                } else {
                    throw new ApiException("Só é possível gerar boletos para parcela do mês atual", 403);
                }
            }
        } catch (\Exception $e) {
            throw new ApiException("Falha ao obter boleto.", 500);
        }

        return new InvoiceResource($invoice);
    }

    /**
     * Issue a new invoice by client
     * @param InvoiceIssueRequest $request
     * @return InvoiceResource
     */
    public function issueInvoice(InvoiceIssueRequest $request)
    {
        try {
            $user = Auth::user();
            $data = $request->all();
            $installments = $data['installments'];
            $paymentDate = $data['paymentDate'];

            $loanInstallment = LoanInstallment::findOrFail($installments[0]['id']);
            $loanId = $loanInstallment->loan_id;

            $issuedInvoice = $this->invoiceService->issueInvoiceByClient(
                $user,
                $loanId,
                $installments,
                $paymentDate
            );

            $invoice = $this->invoiceService->find($issuedInvoice->id);
            
            return new InvoiceResource($invoice);
        } catch (\Exception $e) {
            handle($e, $e->getMessage(), 500, true);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return InvoiceResource
     */
    public function show($id)
    {
        $invoice = $this->invoiceService->find($id);

        return new InvoiceResource($invoice);
    }
}
