<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class City extends Model implements Auditable
{
	use SoftDeletes, \OwenIt\Auditing\Auditable;

	protected $fillable = [
		'state_id',
		'name'
	];

	protected $auditInclude = [
		'state_id',
		'name'
	];
	
    public function state()
    {
    	return $this->belongsTo(State::class);
    }
}
