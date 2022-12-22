<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class BankAccount extends Model implements Auditable
{
	use SoftDeletes, \OwenIt\Auditing\Auditable;

	const CHECKING = 'CHECKING';
	const SAVINGS = 'SAVINGS';

	const TYPES = [
		self::CHECKING,
		self::SAVINGS
	];

	protected $fillable = [
		'bank_id',
		'agency_number',
		'account_number',
		'owner',
		'type'
	];

	protected $auditInclude = [
		'bank_id',
		'agency_number',
		'account_number',
		'owner',
		'type'
	];

	public function bank()
	{
		return $this->belongsTo(Bank::class);
	}

	public function scopeEager($query)
	{
		$query->with([
			'bank'
		]);
	}
}
