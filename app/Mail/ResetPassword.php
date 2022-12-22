<?php

namespace App\Mail;

use App\Exceptions\ApiException;
use App\Models\User;
use App\Models\Usuario;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $urlApp;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param $urlApp
     */
    public function __construct(User $user, $urlApp)
    {
        $this->user = $user;
        $this->urlApp = $urlApp;
    }

    /**
     * Build the message.
     * @return $this
     * @throws \Exception
     */
    public function build()
    {
        try {

            return $this->subject('Ohne | Alteração de senha')
                ->view('emails.password-forgot')
                ->with([
                    'urlApp'=> $this->urlApp,
                    'name' => getFirstName($this->user->name),
                    'date' => dataPorExtenso(),
                ]);

        }catch (\Exception $e){
            throw new ApiException(__("custom.emails.error_to_send") . $e->getMessage(), 422);
        }
    }
}
