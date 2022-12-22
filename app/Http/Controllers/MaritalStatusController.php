<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaritalStatusRequest;
use App\Http\Resources\MaritalStatusResource;
use App\Models\MaritalStatus;
use App\Services\MaritalStatusService;
use Illuminate\Http\Request;

class MaritalStatusController extends Controller
{
	/**
	 * @var MaritalStatusService
	 */
	private $maritalStatusService;

	/**
	 * MaritalStatusController constructor.
	 * @param MaritalStatusService $maritalStatusService
	 */
	public function __construct(MaritalStatusService $maritalStatusService)
	{
		$this->maritalStatusService = $maritalStatusService;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
	 */
    public function index()
    {
        $maritalStatuses = $this->maritalStatusService->all();

        return MaritalStatusResource::collection($maritalStatuses);
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param MaritalStatusRequest $request
	 * @return MaritalStatusResource
	 */
    public function store(MaritalStatusRequest $request)
    {
        $maritalStatus = new MaritalStatus();
        $maritalStatus->fill($request->all());
		$maritalStatus->save();

        return new MaritalStatusResource($maritalStatus);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return MaritalStatusResource
	 */
    public function show($id)
    {
        $maritalStatus = $this->maritalStatusService->find($id);

        return new MaritalStatusResource($maritalStatus);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param MaritalStatusRequest $request
	 * @param  int $id
	 * @return MaritalStatusResource
	 */
    public function update(MaritalStatusRequest $request, $id)
    {
	    $maritalStatus = $this->maritalStatusService->find($id);
	    $maritalStatus->fill($request->all());
		$maritalStatus->save();

	    return new MaritalStatusResource($maritalStatus);
    }

	/**
	 * @param $id
	 * @return MaritalStatusResource
	 * @throws \Exception
	 */
	public function destroy($id)
    {
	    $maritalStatus = $this->maritalStatusService->find($id);
		$maritalStatus->delete();

	    return new MaritalStatusResource($maritalStatus);
    }
}
