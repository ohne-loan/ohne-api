<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationLevelRequest;
use App\Http\Resources\EducationLevelResource;
use App\Models\EducationLevel;
use App\Services\EducationLevelService;

class EducationLevelController extends Controller
{
	/**
	 * @var EducationLevelService
	 */
	private $educationLevelService;

	public function __construct(EducationLevelService $educationLevelService)
	{
		$this->educationLevelService = $educationLevelService;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
	 */
    public function index()
    {
	    $educationLevels = $this->educationLevelService->all();

        return EducationLevelResource::collection($educationLevels);
    }
}
