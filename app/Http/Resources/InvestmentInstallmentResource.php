<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\MissingValue;

class InvestmentInstallmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'investment' => new InvestmentResource($this->whenLoaded('investment')),
            'date' => $this->date->format('Y-m-d'),
            'net_interest' => money($this->net_interest),
            'returned_amount' => money($this->returned_amount),
            'gross_installment' => money($this->gross_installment),
            'accumulated_roi' => money($this->accumulated_roi),
            'income_tax_rate' => $this->income_tax_rate,
            'income_tax_discount' => money($this->income_tax_discount),
            'net_installment' => money($this->net_installment)
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
