<?php

namespace App\Mail;

use App\Models\EmailToken;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;
	/**
	 * @var User
	 */
	private $user;
	/**
	 * @var EmailToken
	 */
	private $emailToken;

	/**
	 * Create a new message instance.
	 *
	 * @param User $user
	 * @param EmailToken $emailToken
	 */
    public function __construct(User $user, EmailToken $emailToken)
    {
		$this->user = $user;
		$this->emailToken = $emailToken;
	}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	//$url = env('SITE_URL') . '/' .  $this->emailToken->uuid;

        return $this->view('emails.register-confirmation')
			->subject('Ohne | Confirme o seu cadastro')
			->with([
			    'name' => getFirstName($this->user->name),
				'email' => $this->user->email,
				'token' => $this->emailToken->token,
                'date' => dataPorExtenso()
			]);
    }
}
