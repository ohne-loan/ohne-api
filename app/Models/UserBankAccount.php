<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class UserBankAccount extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	protected $fillable = [
		'user_id',
		'bank_account_id'
	];

	protected $auditInclude = [
		'user_id',
		'bank_account_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function bankAccount()
	{
		return $this->belongsTo(BankAccount::class);
	}
}
