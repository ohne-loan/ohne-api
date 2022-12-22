<?php


namespace App\Http\Responses;

use Illuminate\Http\Response;

class GenericResponse extends Response
{
    public function __construct($sucess = false, $message = null, $httpStatusCode = 500)
    {
        parent::__construct([
            'data' =>[
                'success' => $sucess,
                'message' => $message
            ]
        ], $httpStatusCode);
    }
}
