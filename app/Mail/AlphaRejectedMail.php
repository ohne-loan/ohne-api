<?php

namespace App\Mail;

use App\Models\User;
use App\Services\EmailContentService;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AlphaRejectedMail extends Mailable
{
    use Queueable, SerializesModels;

    private $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.alpha-rejected')
            ->subject("Ohne | Solicitação de empréstimo")
            ->with([
                'name' => getFirstName($this->user->name),
                'date' => dataPorExtenso()
            ]);
    }
}
