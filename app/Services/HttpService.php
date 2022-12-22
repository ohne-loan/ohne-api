<?php

namespace App\Services;

use GuzzleHttp\Exception\RequestException;
use stdClass;

class HttpService
{
    /**
     * @var \GuzzleHttp\Client $client
     */
    private $client;

    const REQUEST_TIMEOUT = 300000;

    /**
     * HttpService constructor.
     */
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function get(string $uri, array $header)
    {
        $verb = "GET";

        $response = $this->sendRequest($verb, $uri, [
            'headers' => $header
        ]);

        return $response;
    }

    public function post(string $uri, array $header, stdClass $body, array $formParams = [])
    {
        $verb = 'POST';
        $options = array();

        if (count($formParams) > 0) {
            $options = [
                'headers' => $header,
                'form_params' => $formParams
            ];
        } else {
            $options = [
                'headers' => $header,
                'body' => json_encode($body)
            ];
        }

        $response = $this->sendRequest($verb, $uri, $options);

        return $response;
    }

    public function delete(string $uri, array $header)
    {
        $verb = "DELETE";

        $response = $this->sendRequest($verb, $uri, [
            'headers' => $header
        ]);

        return $response;
    }

    private function sendRequest(string $verb, string $uri, array $options)
    {
        $inBody = \json_encode(tryGetValueArray($options, 'body'));

        if ($inBody === "null") {
            $inBody = \json_encode(tryGetValueArray($options, 'form_params'));
        }

        $inHeaders = \json_encode(tryGetValueArray($options, 'headers'));
        $outBody = "";
        $outHeaders = "";

        $options['connect_timeout'] = self::REQUEST_TIMEOUT;
        $options['read_timeout'] = self::REQUEST_TIMEOUT;
        $options['timeout'] = self::REQUEST_TIMEOUT;

        try {
            $response = $this->client->request($verb, $uri, $options);

            $outBody = \json_decode($response->getBody());
            $outHeaders = \json_encode($response->getHeaders());
        } catch (RequestException $exception) {
            if ($exception->hasResponse()) {
                $outBody = \json_decode($exception->getResponse()->getBody());
                if ($outBody === null) {
                    $outBody = $exception->getResponse()->getReasonPhrase();
                }
                $outHeaders = \json_encode($exception->getResponse()->getHeaders());
            } else {
                $outBody = new stdClass();
                $outBody->success = false;
            }
        }

        return $outBody;
    }
}
