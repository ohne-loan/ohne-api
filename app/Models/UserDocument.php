<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class UserDocument extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	protected $fillable = [
		'uuid',
		'path',
		'url'
	];

	protected $auditInclude = [
		'uuid',
		'path',
		'url'
	];
}
