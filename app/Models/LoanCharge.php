<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class LoanCharge extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
		'loan_id',
		'time_arrear',
		'bigger_time_arrear',
		'smaller_time_arrear',
		'frozen_balance'
	];

	protected $auditInclude = [
		'loan_id',
		'time_arrear',
		'bigger_time_arrear',
		'smaller_time_arrear',
		'frozen_balance'
	];

    public function loan()
    {
        return $this->hasOne(Loan::class);
    }
}
