<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class CompanyBankAccount extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	public $timestamps = false;

	protected $fillable = [
		'bank_account_id'
	];

	protected $auditInclude = [
		'bank_account_id'
	];

    public function bankAccount()
    {
    	return $this->belongsTo(BankAccount::class);
    }
}
