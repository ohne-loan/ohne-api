<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class InvestmentInstallment extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	protected $fillable = [
		'investment_id',
		'date',
		'net_interest',
		'returned_amount',
		'gross_installment',
		'accumulated_roi',
		'income_tax_rate',
		'income_tax_discount',
		'net_installment'
	];

	protected $auditInclude = [
		'investment_id',
		'date',
		'net_interest',
		'returned_amount',
		'gross_installment',
		'accumulated_roi',
		'income_tax_rate',
		'income_tax_discount',
		'net_installment'
	];

	protected $dates = [
		'date',
		'created_at',
		'updated_at'
	];

    public function investment()
    {
    	return $this->belongsTo(Investment::class);
    }
}
