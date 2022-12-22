<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class StarkBankCustomer extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

	protected $fillable = [
		'user_id',
		'customer_id',
		'deleted_at',
		'created_at',
		'updated_at'
	];

	protected $auditInclude = [
		'user_id',
		'customer_id',
		'deleted_at',
		'created_at',
		'updated_at'
	];
}
