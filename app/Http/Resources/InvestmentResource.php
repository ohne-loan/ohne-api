<?php

namespace App\Http\Resources;

use App\Models\InvestmentInstallment;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\MissingValue;

class InvestmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
    	$bankAccount = $this->resource->relationLoaded('companyBankAccount')
			? $this->companyBankAccount->bankAccount
			: new MissingValue();

        return [
	        'id' => $this->id,
            'user' => new SimpleUserResource($this->whenLoaded('user')),
	        'contract' => new ContractResource($this->whenLoaded('contract')),
	        'bank_account' => new BankAccountResource($bankAccount),
	        'amount' => $this->amount,
			'total_earnings' => $this->total_earnings,
            'num_installments' => $this->num_installments,
            'monthly_rate' => $this->monthly_rate,
            'status' => $this->status,
			'liquidatable' => $this->liquidatable,
			'installments' => InvestmentInstallmentResource::collection($this->whenLoaded('installments'))
        ];
    }

    /**
     * This method is necessary just to preserve backward compatibility with non-Eloquent resources.
     * The objects inside a JsonResource now must implement ArrayAccess. This means you cannot create a Resource
     * of a Collection of plain objects like we're doing here with a RAW Query.
     *
     * We're applying the changes suggested by Graham Campbell in #29860.
     *
     * More information
     *      https://github.com/laravel/framework/issues/29916
     *      https://github.com/laravel/framework/issues/29858
     *      https://github.com/laravel/framework/pull/29860
     */
    public function offsetExists($offset)
    {
        return (is_array($offset) || $offset instanceof ArrayAccess) && isset($this->resource[$offset]);
    }
}
