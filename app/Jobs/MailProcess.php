<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class MailProcess implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
	/**
	 * @var string
	 */
	private $to;

	/**
	 * @var Mailable
	 */
	private $mailable;

	/**
	 * Create a new job instance.
	 *
	 * @param string $to
	 * @param Mailable $mailable
	 */
    public function __construct(string $to, Mailable $mailable)
    {
		$this->to = $to;
		$this->mailable = $mailable;
	}

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
    	try {
        	$class = get_class($this->mailable);

			Mail::to($this->to)
				->send($this->mailable);

			//echo "Message {$class} sent to {$this->to}\n";
		} catch (\Exception $exception) {
			echo "Failed to send {$class} to {$this->to}: {$exception->getMessage()}\n";
		}
    }
}
