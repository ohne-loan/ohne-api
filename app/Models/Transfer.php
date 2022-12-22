<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Transfer extends Model implements Auditable
{
    use SoftDeletes, \OwenIt\Auditing\Auditable;

	protected $fillable = [
		'investment_installment_id',
		'company_bank_account_id',
		'user_bank_account_id',
		'amount',
		'description'
	];

	protected $auditInclude = [
		'investment_installment_id',
		'company_bank_account_id',
		'user_bank_account_id',
		'amount',
		'description'
	];

    public function installment()
    {
    	return $this->belongsTo(InvestmentInstallment::class, 'investment_installment_id', 'id');
    }

    public function companyBankAccount()
    {
    	return $this->belongsTo(CompanyBankAccount::class);
    }

    public function userBankAccount()
    {
    	return $this->belongsTo(UserBankAccount::class, 'user_bank_account_id', 'id');
    }

    public function modifiers()
    {
		return $this->hasMany(TransferModifier::class);
    }

    public function scopeEager($query)
    {
    	$query->with([
    		'modifiers',
		    'installment',
			'companyBankAccount',
			'companyBankAccount.bankAccount',
			'userBankAccount',
			'userBankAccount.bankAccount',
	    ]);
    }
}
