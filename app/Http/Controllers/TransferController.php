<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use App\Http\Requests\TransferRequest;
use App\Http\Resources\TransferResource;
use App\Models\Transfer;
use App\Services\TransferService;

class TransferController extends Controller
{
	/**
	 * @var TransferService
	 */
	private $transferService;

	public function __construct(TransferService $transferService)
	{
		$this->transferService = $transferService;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
	 */
    public function index()
    {
        $transfers = $this->transferService->all();

        return TransferResource::collection($transfers);
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param TransferRequest $request
	 * @return TransferResource
	 * @throws \Exception
	 */
    public function store(TransferRequest $request)
    {
	    $data = $request->all();

        $transfer = new Transfer();
		$transfer->fill($data);
		
	    if (!isset($data['modifiers'])) {
		    $data['modifiers'] = [];
	    }

        try {
	        $this->transferService->store($transfer, $data['modifiers']);
        } catch (\Exception $e) {
        	throw new ApiException('Erro ao salvar transferência', 500);
        }

        return new TransferResource($transfer);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return TransferResource
	 */
    public function show($id)
    {
        $transfer = $this->transferService->find($id);

        return new TransferResource($transfer);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param TransferRequest $request
	 * @param  int $id
	 * @return TransferResource
	 * @throws \Exception
	 */
    public function update(TransferRequest $request, $id)
    {
	    $data = $request->all();

	    $transfer = $this->transferService->find($id);
	    $transfer->fill($data);

	    if (!isset($data['modifiers'])){
		    $data['modifiers'] = [];
	    }

	    try {
		    $this->transferService->store($transfer, $data['modifiers']);
	    } catch (\Exception $e) {
		    throw new ApiException('Erro ao atualizar transferência', 500);
	    }

	    return new TransferResource($transfer);
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return TransferResource
	 * @throws \Exception
	 */
    public function destroy($id)
    {
	    $transfer = $this->transferService->find($id);

	    $this->transferService->delete($transfer);

	    return new TransferResource($transfer);
    }
}
