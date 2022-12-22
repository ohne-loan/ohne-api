<?php

namespace App\Http\Controllers;

use App\Http\Requests\BankAccountRequest;
use App\Http\Resources\BankAccountResource;
use App\Models\BankAccount;
use App\Services\BankAccountService;
use Illuminate\Support\Facades\Auth;

class BankAccountController extends Controller
{
	/**
	 * @var BankAccountService
	 */
	private $bankAccountService;

	public function __construct(BankAccountService $bankAccountService)
	{
		$this->bankAccountService = $bankAccountService;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
	 */
    public function index()
    {
    	$user = Auth::user();
        $bankAccounts = $this->bankAccountService->all($user);

        return BankAccountResource::collection($bankAccounts);
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param BankAccountRequest $request
	 * @return BankAccountResource
	 */
    public function store(BankAccountRequest $request)
    {
        $user = Auth::user();

        $bankAccount = new BankAccount();
        $bankAccount->fill($request->all());
		$bankAccount->save();

        return new BankAccountResource($bankAccount);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return BankAccountResource
	 */
    public function show($id)
    {
	    $user = Auth::user();
	    $bankAccount = $this->bankAccountService->find($user, $id);

	    return new BankAccountResource($bankAccount);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param BankAccountRequest $request
	 * @param  int $id
	 * @return BankAccountResource
	 */
    public function update(BankAccountRequest $request, $id)
    {
	    $user = Auth::user();

	    $bankAccount = $this->bankAccountService->find($user, $id);
	    $bankAccount->fill($request->all());
		$bankAccount->save();

	    return new BankAccountResource($bankAccount);
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return BankAccountResource
	 * @throws \Exception
	 */
    public function destroy($id)
    {
	    $user = Auth::user();

	    $bankAccount = $this->bankAccountService->find($user, $id);
		$bankAccount->delete();

	    return new BankAccountResource($bankAccount);
    }
}
