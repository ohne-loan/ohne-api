<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class LoanObservation extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

	protected $fillable = [
		'loan_id',
		'observation',
		'created_by_user_id'
	];

	protected $auditInclude = [
		'loan_id',
		'observation',
		'created_by_user_id'
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];
}
