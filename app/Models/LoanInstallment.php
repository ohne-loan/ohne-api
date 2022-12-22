<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use OwenIt\Auditing\Contracts\Auditable;

class LoanInstallment extends Model implements Auditable
{
    use SoftDeletes, \OwenIt\Auditing\Auditable;

    const PENDING = 'PENDING';
    const PAID = 'PAID';
	const ARREAR = 'ARREAR';
	const ACCELERATED = 'ACCELERATED';

    const STATUSES = [
		self::PENDING,
    	self::PAID,
		self::ARREAR,
		self::ACCELERATED
	];

	protected $fillable = [
		'loan_id',
		'date',
		'number',
		'balance',
		'amount',
		'amortisation',
		'interest',
		'balance_due',
		'status',
        'is_discharge'
    ];
    
	protected $auditInclude = [
		'loan_id',
		'date',
		'number',
		'balance',
		'amount',
		'amortisation',
		'interest',
		'balance_due',
		'status',
        'is_discharge'
	];

	protected $dates = [
		'date',
		'created_at',
		'updated_at',
		'deleted_at'
	];

    public function loan()
    {
    	return $this->belongsTo(Loan::class);
    }
	
	public function invoiceInstallments() : HasMany
	{
		return $this->hasMany(InvoiceInstallment::class);
	}

    public function logEmail()
    {
        return $this->hasOne(LogEmail::class);
    }

    public function scopeBelongsTo($query, User $user)
	{
		$query->whereHas('loan', function ($q) use ($user) {
			$q->where('user_id', $user->id);
		});
	}
}
