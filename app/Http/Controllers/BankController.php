<?php

namespace App\Http\Controllers;

use App\Http\Requests\BankRequest;
use App\Http\Resources\BankResource;
use App\Models\Bank;
use App\Services\BankService;
use Illuminate\Http\Request;

class BankController extends Controller
{
	/**
	 * @var BankService
	 */
	private $bankService;

	public function __construct(BankService $bankService)
	{
		$this->bankService = $bankService;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
	 */
    public function index()
    {
        $banks = $this->bankService->all();

        return BankResource::collection($banks);
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param BankRequest $request
	 * @return BankResource
	 */
    public function store(BankRequest $request)
    {
        $bank = new Bank();
		$bank->fill($request->all());
		$bank->save();

        return new BankResource($bank);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return BankResource
	 */
    public function show($id)
    {
        $bank = $this->bankService->find($id);

        return new BankResource($bank);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param BankRequest $request
	 * @param  int $id
	 * @return BankResource
	 */
    public function update(BankRequest $request, $id)
    {
	    $bank = $this->bankService->find($id);
	    $bank->fill($request->all());
		$bank->save();

	    return new BankResource($bank);
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return BankResource
	 */
    public function destroy($id)
    {
        $bank = $this->bankService->find($id);
		$bank->delete();

        return new BankResource($bank);
    }
}
