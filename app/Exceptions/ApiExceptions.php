<?php

namespace App\Exceptions;

use Exception;

class ApiException extends Exception
{
	private $errors;
	/**
	 * @var int
	 */
	private $status_code;

	public function __construct(string $message = null, int $status_code, array $errors = [])
	{
		parent::__construct($message ?? 'Requisição inválida.', $status_code);

		$this->errors = $errors;
		$this->status_code = $status_code;
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