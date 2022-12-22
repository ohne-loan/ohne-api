<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use App\Http\Requests\InvoiceRequest;
use App\Http\Resources\InvoiceResource;
use App\Models\Invoice;
use App\Services\InvoiceService;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
	/**
	 * @var InvoiceService
	 */
	private $invoiceService;

	public function __construct(InvoiceService $invoiceService)
	{
		$this->invoiceService = $invoiceService;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
	 */
    public function index()
    {
        $invoices = $this->invoiceService->all();

        return InvoiceResource::collection($invoices);
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param InvoiceRequest $request
	 * @return InvoiceResource
	 * @throws ApiException
	 */
    public function store(InvoiceRequest $request)
    {
	    $data = $request->all();

	    if ( $data['expiration_date'] < now()->toDateString() ) {
	    	throw new ApiException('A data de vencimento não deve ser menor que a data atual', 422);
	    }

	    $invoice = new Invoice();
	    $invoice->fill($data);

	    if (!isset($data['modifiers'])) {
	    	$data['modifiers'] = [];
	    }

	    try {
		    $this->invoiceService->store($invoice, $data['modifiers']);
	    } catch (\Exception $e) {
		    throw new ApiException('Erro ao salvar boleto', 500);
	    }

	    return new InvoiceResource($invoice);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return InvoiceResource
	 */
    public function show($id)
    {
        $invoice = $this->invoiceService->find($id);

        return new InvoiceResource($invoice);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param InvoiceRequest $request
	 * @param  int $id
	 * @return InvoiceResource
	 * @throws ApiException
	 */
    public function update(InvoiceRequest $request, $id)
    {
	    $data = $request->all();

	    $invoice = $this->invoiceService->find($id);
	    $invoice->fill($data);

	    if (!isset($data['modifiers'])) {
		    $data['modifiers'] = [];
	    }

	    try {
		    $this->invoiceService->store($invoice, $data['modifiers']);
	    } catch (\Exception $e) {
		    throw new ApiException('Erro ao atualizar boleto', 500);
	    }

	    return new InvoiceResource($invoice);
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return InvoiceResource
	 * @throws \Exception
	 */
    public function destroy($id)
    {
	    $invoice = $this->invoiceService->find($id);

	    $this->invoiceService->delete($invoice);

	    return new InvoiceResource($invoice);
    }
}
