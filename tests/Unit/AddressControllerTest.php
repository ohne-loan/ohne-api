<?php

namespace Tests\Feature;

use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
use RuntimeException;
use Tests\TestCase;
use App\Http\Controllers\AddressController;
use App\Services\AddressService;

class AddressControllerTest extends TestCase
{
    public function testSearchAddress()
    {
        $addressService = new AddressService();
        $controller = new AddressController($addressService);

        $cep = '89248000';

        $address = $controller->show($cep);

        $this->assertTrue(isset($address));
    }
}
