<?php


namespace App\Http\Responses;

use Illuminate\Http\Response;

class SuccessResponse extends Response
{
	public function __construct($message = null)
	{
		parent::__construct([
		    'data' =>[
                'success' => true,
                'message' => $message
            ]
		]);
	}
}