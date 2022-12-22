<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Jobs\ProcessLoan;
use App\Services\UserService;
use App\Services\DocumentsService;
use App\Rules\Money;
use App\Models\User;

class ProcessLoanTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        $user = User::find(66);

        dispatch(new ProcessLoan($user));

        $this->assertTrue(true);
    }
}
