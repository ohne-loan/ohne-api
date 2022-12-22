<?php

namespace App\Models;

use App\Contracts\FinancialProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Loan extends Model implements FinancialProduct, Auditable
{
    use SoftDeletes, \OwenIt\Auditing\Auditable;

	const PENDING_PRE_APPROVAL = 'PENDING_PRE_APPROVAL';
	const PENDING_APPROVAL = 'PENDING_APPROVAL';
	const WAIT_SIGN = 'WAIT_SIGN';
	const IN_PROGRESS = "IN_PROGRESS";
	const RENEGOTIATION_IN_PROGRESS = "RENEGOTIATION_IN_PROGRESS";
	const FINISHED = 'FINISHED';
	const REJECTED = 'REJECTED';
	const REJECTED_BY_PARTNER = 'REJECTED_BY_PARTNER';
	const PROCESSING = 'PROCESSING';
	const USER_REGISTERING = 'USER_REGISTERING';
	const CANC_BY_CLIENT = 'CANC_BY_CLIENT';
	const CANC_CONTR_NSENT = 'CANC_CONTR_NSENT';

	const PENDING_GROUP = 'PENDING_GROUP';
	const PENDING_GROUP_ARRAY = [
		self::PENDING_PRE_APPROVAL,
        self::WAIT_SIGN,
	];
	
	const PENDING_APPROVAL_GROUP = 'PENDING_APPROVAL_GROUP';
	const PENDING_APPROVAL_GROUP_ARRAY = [
		self::PENDING_APPROVAL,
		self::WAIT_SIGN
    ];

	const FINISHED_GROUP = 'FINISHED_GROUP';
	const FINISHED_GROUP_ARRAY = [
	    self::FINISHED,
		self::IN_PROGRESS,
		self::RENEGOTIATION_IN_PROGRESS
	];

	const REJECTED_GROUP = 'REJECTED_GROUP';
	const REJECTED_GROUP_ARRAY = [
		self::CANC_BY_CLIENT,
		self::CANC_CONTR_NSENT,
		self::REJECTED
	];

	const REJECTED_BY_PARTNER_GROUP = 'REJECTED_BY_PARTNER_GROUP';
	const REJECTED_BY_PARTNER_GROUP_ARRAY = [
		self::REJECTED_BY_PARTNER
	];

	const ACTIVE_GROUP = 'ACTIVE_GROUP';
	const ACTIVE_GROUP_ARRAY = [
		self::PENDING_PRE_APPROVAL,
		self::PENDING_APPROVAL,
		self::WAIT_SIGN,
		self::IN_PROGRESS,
		self::CANC_BY_CLIENT,
		self::CANC_CONTR_NSENT
	];

	const STATUSES = [
		self::PENDING_PRE_APPROVAL,
		self::PENDING_APPROVAL,
        self::WAIT_SIGN,
		self::IN_PROGRESS,
		self::FINISHED,
		self::REJECTED,
		self::REJECTED_BY_PARTNER,
		self::PROCESSING,
		self::USER_REGISTERING,
		self::CANC_BY_CLIENT,
		self::CANC_CONTR_NSENT
	];

	protected $fillable = [
		'user_id',
		'contract_id',
		'amount',
		'num_installments',
		'installment_value',
		'monthly_rate',
		'yearly_rate',
		'expiration_day',
		'status',
		'monthly_effective_cost',
		'annual_effective_cost',
		'monthly_cet_rate',
		'cet_rate',
		'amount_effective_cost',
		'iof_value',
		'bank_note',
		'loan_reason_id',
		'loan_reason_description'
	];

	protected $auditInclude = [
		'user_id',
		'contract_id',
		'amount',
		'num_installments',
		'installment_value',
		'monthly_rate',
		'yearly_rate',
		'expiration_day',
		'status',
		'monthly_effective_cost',
		'annual_effective_cost',
		'monthly_cet_rate',
		'cet_rate',
		'amount_effective_cost',
		'iof_value',
		'bank_note',
		'loan_reason_id',
		'loan_reason_description'
	];

	public function user(): BelongsTo
    {
    	return $this->belongsTo(User::class)->withTrashed();
    }

    public function contract(): BelongsTo
    {
    	return $this->belongsTo(Contract::class);
	}
	
	public function loanReason(): BelongsTo
    {
    	return $this->belongsTo(LoanReason::class);
	}

	public function loanCharge(): BelongsTo
    {
    	return $this->belongsTo(LoanCharge::class);
	}

    public function installments(): HasMany
	{
		return $this->hasMany(LoanInstallment::class);
	}

	public function tag()
    {
        return $this->hasOne(LoanTag::class);
    }

	public function scopeEager($query)
	{
		$query->with([
			'contract',
			'installments'
		]);
	}
}
