<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\LoanSimulatedInternal;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class LoanSimulatedInternalInstallments extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'loans_simulated_internal_installments';

    protected $fillable = [
        'loan_simulated_internal_id', 
        'balance',
        'amount',
        'amortisation',
        'interest',
        'balance_due',
        'date'
    ];

    protected $auditInclude = [
        'loan_simulated_internal_id', 
        'balance',
        'amount',
        'amortisation',
        'interest',
        'balance_due',
        'date',
        'status'
    ];

	public function loanSimulatedInternal(): BelongsTo
    {
    	return $this->belongsTo(LoanSimulatedInternal::class)->withTrashed();
    }
}
