<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\LoanSimulatedInternalInstallments;

class LoanSimulatedInternal extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'loans_simulated_internal';

    protected $fillable = [
        'user_id', 
        'num_installments',
        'financed_value',
        'installment_value',
        'principal_value',
        'gross_value',
        'net_value',
        'iof_value',
        'monthly_customer_rate',
        'yearly_customer_rate',
        'monthly_cet_rate',
        'total_cet_rate',
        'first_due_date',
        'last_due_date'
    ];

    protected $auditInclude = [
        'user_id', 
        'num_installments',
        'financed_value',
        'installment_value',
        'principal_value',
        'gross_value',
        'net_value',
        'iof_value',
        'monthly_customer_rate',
        'yearly_customer_rate',
        'monthly_cet_rate',
        'total_cet_rate',
        'first_due_date',
        'last_due_date'
    ];

	public function user(): BelongsTo
    {
    	return $this->belongsTo(User::class)->withTrashed();
    }

    public function loanSimulatedInternalInstallments(): HasMany
	{
		return $this->hasMany(LoanSimulatedInternalInstallments::class);
	}
}
