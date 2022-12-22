<?php

namespace App\Mail;

use App\Models\Invoice;
use App\Models\LoanInstallment;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class StatusBoletoMail extends Mailable
{
    use Queueable, SerializesModels;

    const prefixView = "emails.";

    private $user;
    private $dataEmail;
    private $installment;
    private $invoice;
    private $status;
    private $day;
    private $textQuantityInstallmentsArrear;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param LoanInstallment $installment
     * @param $invoice
     * @param $view
     */
    public function __construct(User $user, LoanInstallment $installment, $invoice, string $view, string $textQuantityInstallmentsArrear = '')
    {
        $this->user = $user;
        $this->installment = $installment;
        $this->invoice = $invoice;
        $this->view = $view;
        $this->textQuantityInstallmentsArrear = $textQuantityInstallmentsArrear;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Ohne | Lembrete de pagamento')
            ->view(self::prefixView . $this->view)->with([
                'name' => getFirstName($this->user->name),
                'date' => dataPorExtenso(),
                'boletoDate' => $this->installment->date->format('d/m/Y'),
                'linkBoleto' => $this->invoice->link,
                'numeroParcela' => $this->installment->number,
                'textQuantityInstallmentsArrear' => $this->textQuantityInstallmentsArrear
            ]);
    }
}
