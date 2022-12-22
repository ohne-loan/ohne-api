<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Configuration extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

    protected $fillable = [
		'name',
		'value'
	];

    protected $auditInclude = [
		'name',
		'value'
	];

	protected $casts = [
		'name' => 'string',
		'value' => 'string'
	];
}
