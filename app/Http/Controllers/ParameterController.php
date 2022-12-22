<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
	public function index()
	{
		$parameters = Parameter::getPublicList();

		return response()->json([
			'data' => $parameters
		]);
	}
}
