<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\LoanSimulatedInstallmentsTopazio;

class LoanSimulatedTopazio extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'loans_simulated_topazio';

    protected $fillable = [
        'user_id',
        'quota_amount', // Número de parcelas
        'total_value', // Valor financiado
        'installment_value',
        'principal_value',
        'gross_value',
        'net_value',
        'iof_value',
        'monthly_rate', // Taxa de juros ao mês
        'yearly_rate',
        'monthly_cet_rate',
        'yearly_cet_rate',
        'first_due_date',
        'last_due_date'
    ];

    protected $auditInclude = [
        'user_id',
        'quota_amount', // Número de parcelas
        'total_value', // Valor financiado
        'installment_value',
        'principal_value',
        'gross_value',
        'net_value',
        'iof_value',
        'monthly_rate', // Taxa de juros ao mês
        'monthly_cet_rate',
        'yearly_cet_rate',
        'first_due_date',
        'last_due_date',
        'yearly_rate'
    ];    

    public function user(): BelongsTo
    {
    	return $this->belongsTo(User::class)->withTrashed();
    }

    public function installments()
	{
		return $this->hasMany(LoanSimulatedInstallmentsTopazio::class);
	}
}
