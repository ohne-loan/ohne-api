<?php

namespace App\Http\Controllers;

use App\Services\AddressService;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    private $addressService;

    public function __construct(AddressService $addressService)
    {
        $this->addressService = $addressService;
    }

    /**
     * @param $cep
     * @return \Illuminate\Http\JsonResponse
     * @throws \App\Exceptions\ApiException
     */
    public function show($cep){
        try {
            return $this->addressService->getAddress($cep);
        } catch (\Exception $exception) {
            handle($exception, $exception->getMessage(), 500);
        }
    }
}
