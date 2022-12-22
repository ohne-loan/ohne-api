<?php

namespace App\Jobs;

use App\Models\User;
use App\Services\BackgroundCheckService;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class BackgroundCheckProcess implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

	/**
	 * @var User
	 */
	private $user;

	/**
	 * @var BackgroundCheckService $backgroundCheckService
	 */
	private $backgroundCheckService;

	/**
	 * @var string
	 */
	private $type;

	/**
	 * Create a new job instance.
	 *
	 * @param User $user
	 */
    public function __construct(string $type, User $user)
    {
		$this->user = $user;
		$this->type = $type;
		$this->backgroundCheckService = new BackgroundCheckService();
	}

	/**
	 * Execute the job.
	 *
	 * @return void
	 */
    public function handle()
    {
    	try {
			$scoreCheck = $this->backgroundCheckService->doCheck($this->type, $this->user);

			echo "{$this->type} CHECK\n"
				. "\tUser: {$this->user->id}\n"
				. "\tStatus: {$scoreCheck->status}\n"
				. "\tScore: {$scoreCheck->score}\n";
		} catch (\Exception $exception) {
			echo $exception->getMessage() . PHP_EOL;
		}
    }
}
