<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Invoice;
use App\Models\LoanInstallment;
use App\Models\InvoiceInstallment;

class LoanInstallmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $paymentDate = null;

        if ($this->status === LoanInstallment::PAID) {
            $invoice = InvoiceInstallment::select(['invoices.*'])
                ->join('invoices', 'invoices.id', 'invoice_installments.invoice_id')
                ->where('invoice_installments.loan_installment_id', $this->id)
                ->whereIn('invoices.status', [ Invoice::CONFIRMED, Invoice::paid ])
                ->first();

            if ($invoice !== null) {
                $paymentDate = $invoice->payment_date;
            }
        }
            
        return [
            'id' => $this->id,
            'number' => $this->number,
            'date' => $this->date->format('Y-m-d'),
            'balance' => money($this->balance),
            'amount' => money($this->amount),
            'amortisation' => money($this->amortisation),
            'interest' => money($this->interest),
            'balance_due' => money($this->balance_due),
            'status' => $this->status,
            'payment_date' => $paymentDate,
            'loan' => new LoanResource($this->whenLoaded('loan')),
            'available' => $this->available
        ];
    }

    /**
     * This method is necessary just to preserve backward compatibility with non-Eloquent resources.
     * The objects inside a JsonResource now must implement ArrayAccess. This means you cannot create a Resource
     * of a Collection of plain objects like we're doing here with a RAW Query.
     *
     * We're applying the changes suggested by Graham Campbell in #29860.
     *
     * More information
     *      https://github.com/laravel/framework/issues/29916
     *      https://github.com/laravel/framework/issues/29858
     *      https://github.com/laravel/framework/pull/29860
     */
    public function offsetExists($offset)
    {
        return (is_array($offset) || $offset instanceof ArrayAccess) && isset($this->resource[$offset]);
    }
}
