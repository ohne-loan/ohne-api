<?php

namespace App\Exceptions;

use Exception;

class BadCreditException extends Exception
{
	/**
	 * @var array
	 */
	private $errors;
	
	/**
	 * @var int
	 */
	private $status_code;

	public function __construct()
	{
		$message = 'O CPF informado está negativado.';
		$this->status_code = 422;
		$this->errors = array();

		parent::__construct($message, $this->status_code);
	}

	/**
	 * Report the exception.
	 *
	 * @return void
	 */
	public function report()
	{
		//
	}

	/**
	 * Report the exception.
	 *
	 * @return array
	 */
	public function render()
	{
		return response()->json([
			'message' => $this->getMessage(),
			'errors' => $this->errors,
		], $this->status_code);
	}
}