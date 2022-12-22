<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class InvestmentRate extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $fillable = [
    	'rate',
		'contract_template',
		'liquidatable'
	];

    protected $auditInclude = [
    	'rate',
		'contract_template',
		'liquidatable'
	];

    protected $casts = [
    	'rate' => 'float'
	];
}
