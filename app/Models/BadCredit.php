<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class BadCredit extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

	protected $fillable = [
		'user_id',
		'bad_credit'
	];

	protected $auditInclude = [
		'user_id',
		'bad_credit'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
