<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\LoanCharge;

class LoanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if(!isset($this->id)){
            return [];
        }

        $installments = $this->installments()->orderBy('number')->get();
        $loanCharges = LoanCharge::where('loan_id', $this->id)
            ->where('deleted_at', null)
            ->first();

        $loanTag = $this->tag;

        return [
        	'id'                            => $this->id,
            'contract'                      => new ContractResource($this->whenLoaded('contract')),
            'loan_reason'                   => new LoanReasonResource($this->whenLoaded('loanReason')),
            'loan_reason_description'       => $this->loan_reason_description,
            'bank_note'                     => $this->bank_note,
            'amount'                        => money($this->amount),
            'iof_value'                     => money($this->iof_value),
            'total_amount'                  => money($this->total_amount),
            'total_debt_amount'             => money($this->total_debt_amount),
            'monthly_rate'                  => adjustDecimalPlaces($this->monthly_rate),
            'monthly_effective_cost'        => adjustDecimalPlaces($this->monthly_effective_cost),
            'annual_effective_cost'         => adjustDecimalPlaces($this->annual_effective_cost),
            'monthly_cet_rate'              => adjustDecimalPlaces($this->monthly_cet_rate),
            'cet_rate'                      => adjustDecimalPlaces($this->cet_rate),
            'installment_value'             => money($this->installment_value),
            'num_installments'              => $this->num_installments,
            'paid_installments'             => $this->paid_installments,
            'pending_installments'          => $this->pending_installments,
            'expiration_next_installment'   => empty($this->expiration_next_installment) ? "" : $this->expiration_next_installment->format('Y-m-d'),
            'arrear_installments'           => $this->arrear_installments,
            'paid_amount'                   => $this->paid_amount,
            'accumulated_rate'              => $this->accumulated_rate,
            'discharge_percentage'          => adjustDecimalPlaces($this->discharge_percentage),
            'current_debt_amount'           => $this->current_debt_amount,
	        'status'                        => $this->status,
			'installments'                  => LoanInstallmentResource::collection($installments),
            'user'                          => new UserResource($this->whenLoaded('user')),
            'loan_charge'                   => isset($loanCharges) ? new LoanChargeResource($loanCharges) : null,
            'tag'                           => new LoanTagResource($loanTag),
            'created_at'                    => $this->created_at != null ? $this->created_at->format('Y-m-d') : null
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
