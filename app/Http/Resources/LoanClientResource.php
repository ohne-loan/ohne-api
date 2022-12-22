<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\LoanCharge;

class LoanClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (!isset($this->id)) {
            return [];
        }

        $installments = $this->installments()->orderBy('number')->get();

        return [
            'id'                                        => $this->id,
            'bank_note'                                 => $this->bank_note,
            'amount'                                    => money($this->amount),
            'iof_value'                                 => money($this->iof_value),
            'total_amount'                              => money($this->total_amount),
            'total_debt_amount'                         => money($this->total_debt_amount),
            'monthly_rate'                              => changeFloatToTwoDecimalPlaces($this->monthly_rate),
            'monthly_effective_cost'                    => changeFloatToTwoDecimalPlaces($this->monthly_effective_cost),
            'annual_effective_cost'                     => changeFloatToTwoDecimalPlaces($this->annual_effective_cost),
            'monthly_cet_rate'                          => changeFloatToTwoDecimalPlaces($this->monthly_cet_rate),
            'cet_rate'                                  => changeFloatToTwoDecimalPlaces($this->cet_rate),
            'installment_value'                         => money($this->installment_value),
            'num_installments'                          => $this->num_installments,
            'paid_installments'                         => $this->paid_installments,
            'pending_installments'                      => $this->pending_installments,
            'has_arrear_installments_more_than_90_days' => $this->has_arrear_installments_more_than_90_days,
            'has_invoice_issued_in_last_24_hours'       => $this->has_invoice_issued_in_last_24_hours,
            'invoice_issued_in_last_24_hours_link'      => $this->invoice_issued_in_last_24_hours_link,
            'expiration_next_installment'               => empty($this->expiration_next_installment) ? "" : $this->expiration_next_installment->format('Y-m-d'),
            'arrear_installments'                       => $this->arrear_installments,
            'paid_amount'                               => $this->paid_amount,
            'accumulated_rate'                          => $this->accumulated_rate,
            'discharge_percentage'                      => changeFloatToTwoDecimalPlaces($this->discharge_percentage),
            'current_debt_amount'                       => $this->current_debt_amount,
            'status'                                    => $this->status,
            'installments'                              => LoanInstallmentResource::collection($installments),
            'user'                                      => new UserResource($this->whenLoaded('user')),
            'tag'                                       => new LoanTagResource($this->whenLoaded('tag')),
            'created_at'                                => $this->created_at != null ? $this->created_at->format('Y-m-d') : null
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
