<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceInstallment extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'invoice_id',
		'loan_installment_id'
	];

	protected $auditInclude = [
		'invoice_id',
		'loan_installment_id'
	];

	protected $dates = [
		'created_at',
		'updated_at'
    ];
    
    public function invoice()
    {
    	return $this->belongsTo(Invoice::class, 'invoice_id', 'id');
    }

    public function installment()
	{
		return $this->belongsTo(LoanInstallment::class, 'loan_installment_id', 'id');
	}
}
