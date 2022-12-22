<?php


namespace App\Http\Responses;

use Illuminate\Http\Response;

class FailResponse extends Response
{
	public function __construct($message = null)
	{
		parent::__construct([
		    'data' =>[
                'success' => false,
                'message' => $message
            ]
		], 500);
	}
}