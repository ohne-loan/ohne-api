<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReceivedContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Ohne | Obrigado por entrar em contato!")
            ->view('emails.receivedContact')
            ->with([
                'date' => dataPorExtenso(),
                'name' => getFirstName($this->name),
            ]);
    }
}
