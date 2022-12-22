<?php

namespace App\Models;

use App\Contracts\FinancialProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Investment extends Model implements FinancialProduct, Auditable
{
	use SoftDeletes, \OwenIt\Auditing\Auditable;

	const PENDING = 'PENDING';
	const IN_PROGRESS = 'IN_PROGRESS';
	const FINISHED = 'FINISHED';

	const STATUSES = [
		self::PENDING,
		self::IN_PROGRESS,
		self::FINISHED
	];

	protected $fillable = [
		'user_id',
		'contract_id',
		'amount',
		'num_installments',
		'monthly_rate',
		'status',
		'payment_day',
		'liquidatable',
		'total_earnings'
	];

	protected $auditInclude = [
		'user_id',
		'contract_id',
		'amount',
		'num_installments',
		'monthly_rate',
		'status',
		'payment_day',
		'liquidatable',
		'total_earnings'
	];

	protected $casts = [
		'liquidatable' => 'bool'
	];

	public function user(): BelongsTo
    {
    	return $this->belongsTo(User::class);
    }

    public function contract(): BelongsTo
    {
    	return $this->belongsTo(Contract::class);
    }

    public function installments(): HasMany
	{
		return $this->hasMany(InvestmentInstallment::class);
	}

	public function depositProof()
	{
		return $this->hasOne(UserDocument::class, 'id', 'deposit_proof_id');
	}

	public function companyBankAccount()
	{
		return $this->belongsTo(CompanyBankAccount::class);
	}

	public function scopeEager($query)
	{
		$query->with([
			'contract',
			'installments',
			'companyBankAccount.bankAccount',
			'companyBankAccount.bankAccount.bank'
		]);
	}
}
