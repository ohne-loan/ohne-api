<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessionalClassRequest;
use App\Http\Resources\ProfessionalClassResource;
use App\Models\ProfessionalClass;
use App\Services\ProfessionalClassService;

class ProfessionalClassController extends Controller
{
    /**
     * @var MaritalStatusService
     */
    private $professionalClassService;

    /**
     * MaritalStatusController constructor.
     * @param ProfessionalClassService $professionalClassService
     */
    public function __construct(ProfessionalClassService $professionalClassService)
    {
        $this->professionalClassService = $professionalClassService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $professionalClasses = $this->professionalClassService->all();

        return ProfessionalClassResource::collection($professionalClasses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProfessionalClassRequest $request
     * @return ProfessionalClassResource
     */
    public function store(ProfessionalClassRequest $request)
    {
        $professionalClass = new ProfessionalClass();
        $professionalClass->fill($request->all());
        $professionalClass->save();

        return new ProfessionalClassResource($professionalClass);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return ProfessionalClassResource
     */
    public function show($id)
    {
        $maritalStatus = $this->professionalClassService->find($id);

        return new ProfessionalClassResource($maritalStatus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProfessionalClassRequest $request
     * @param  int $id
     * @return ProfessionalClassResource
     */
    public function update(ProfessionalClassRequest $request, $id)
    {
        $maritalStatus = $this->professionalClassService->find($id);
        $maritalStatus->fill($request->all());
        $maritalStatus->save();

        return new ProfessionalClassResource($maritalStatus);
    }

    /**
     * @param $id
     * @return ProfessionalClassResource
     * @throws \Exception
     */
    public function destroy($id)
    {
        $maritalStatus = $this->professionalClassService->find($id);
        $maritalStatus->delete();

        return new ProfessionalClassResource($maritalStatus);
    }
}
