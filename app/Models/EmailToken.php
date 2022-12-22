<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class EmailToken extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	protected $fillable = [
		'user_id',
		'uid',
		'expires_at',
		'confirmation_date',
		'ip'
	];

	protected $auditInclude = [
		'user_id',
		'uid',
		'expires_at',
		'confirmation_date',
		'ip'
	];

	protected $dates = [
		'expires_at',
		'confirmation_date',
		'created_at',
		'updated_at'
	];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
