<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InvoiceLoanIssuedByClientMail extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $invoice;
    private $installmentsText;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param Invoice $invoice
     */
    public function __construct(User $user, Invoice $invoice, string $installmentsText)
    {
        $this->user = $user;
        $this->invoice = $invoice;
        $this->installmentsText = $installmentsText;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Ohne | Boleto para pagamento')
            ->view('emails.invoice-loan-issued-by-client')->with([
                'name' => getFirstName($this->user->name),
                'paymentValue' => "R$" . \formatMoney($this->invoice->amount),
                'dueDate' => $this->invoice->expiration_date->format('d/m/Y'),
                'invoiceLink' => $this->invoice->link,
                'installmentsText' => $this->installmentsText,
                'barcode' => $this->invoice->barcode
            ]);
    }
}
