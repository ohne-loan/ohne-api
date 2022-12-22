<?php


namespace App\Exceptions;


class NotImplementedException extends \Exception
{
	public function __construct()
	{
		parent::__construct('Not implemented', 500);
	}
}