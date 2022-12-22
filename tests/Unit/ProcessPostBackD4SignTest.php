<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Jobs\ProcessPostBackD4Sign;

class ProcessPostBackD4SignTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        $data = [
            'uuid' => '9549c951-ee67-43cd-8760-eba4395944d8',
            'type_post' => 1,
            'message' => "finished"
        ];

        dispatch(new ProcessPostBackD4Sign($data));

        $this->assertTrue(true);
    }
}
