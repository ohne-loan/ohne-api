<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class UserPreferences extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	protected $fillable = [
		'user_id',
		'payment_day',
		'receipt_day'
	];

	protected $auditInclude = [
		'user_id',
		'payment_day',
		'receipt_day'
	];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
