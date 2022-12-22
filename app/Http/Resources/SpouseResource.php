<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Loan;
use App\Models\User;

class SpouseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $user = User::where('cpf', $this->cpf)->first();

        $hasLoan = false;
        $loanStatus = "";

        if(isset($user)){
            $loan = Loan::where('user_id', $user->id)->latest()->first();

            $hasLoan = isset($loan);
    
            $loanStatus = $hasLoan ? $loan->status : "";
        }

        return [
        	'id' => $this->id,
			'name' => $this->name,
			'cpf' => $this->cpf,
			'birthday' => isset($this->birthday) ? $this->birthday->format('Y-m-d') : "",
			'phone' => $this->phone,
            'has_loans' => $this->has_loans,
            'has_loans_internal_validation' => $hasLoan,
            'loan_status' => $loanStatus,
			'gross_income' => $this->gross_income,
            'profession' => $this->profession,
            'incomeProof' => new UserDocumentResource($this->whenLoaded('incomeProof'))
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
