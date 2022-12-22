<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class LoanSimulatedInstallmentsTopazio extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'loans_simulated_installments_topazio';

    protected $fillable = [
        'loan_simulated_topazio_id',
        'number',
        'value',
        'due_date'
    ];

    protected $auditInclude = [
        'loan_simulated_topazio_id',
        'number',
        'value',
        'due_date'
    ];

    public function loansSimulatedTopazio(): BelongsTo
    {
    	return $this->belongsTo(LoanSimulatedTopazio::class)->withTrashed();
    }
}
