<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WithoutMoneyMail extends Mailable
{
    use Queueable, SerializesModels;
	/**
	 * @var User
	 */
	private $user;

	/**
	 * Create a new message instance.
	 *
	 * @param User $user
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
        return $this->view('emails.without-money')
			->subject('Ohne | Recebemos a sua solicitação de empréstimo')
			->with([
			    'name' => getFirstName($this->user->name),
				'email' => $this->user->email,
                'date' => dataPorExtenso()
			]);
    }
}
