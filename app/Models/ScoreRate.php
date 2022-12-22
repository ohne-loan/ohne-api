<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ScoreRate extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	protected $fillable = [
		'min',
		'max',
		'rate'
	];

	protected $auditInclude = [
		'min',
		'max',
		'rate'
	];

    protected $casts = [
        'min' => 'integer',
	    'max' => 'integer',
	    'rate' => 'double'
    ];
}
