<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class State extends Model implements Auditable
{
    use SoftDeletes, \OwenIt\Auditing\Auditable;

	protected $fillable = [
		'name',
		'uf'
    ];
    
	protected $auditInclude = [
		'name',
		'uf'
	];

    public function cities()
    {
    	return $this->hasMany(City::class);
    }

    public function country()
    {
    	return $this->belongsTo(Country::class);
    }
}
