<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Libraries\Topazio\Client;

class LibrariesTopazioClientTest extends TestCase
{
    public function testShouldReturnGrantToken()
    {
        $clientId = "a4bbfd57-9d43-3cdd-b525-b7cd88588c89";
        $secretKey = "";
        $redirectUri = "http://localhost/";

        $client = new Client($clientId, $secretKey, $redirectUri);

        $result = $client->getGrantToken();

        $this->assertTrue(isset($result));
    }

    public function testShouldReturnAccessToken()
    {
        $clientId = "a4bbfd57-9d43-3cdd-b525-b7cd88588c89";
        $secretKey = "61246774-3e49-3d07-bf08-761a640ca2dc";
        $redirectUri = "http://localhost/";

        $client = new Client($clientId, $secretKey, $redirectUri);

        $result = $client->getAccessToken();

        $this->assertTrue(isset($result));
    }
}
