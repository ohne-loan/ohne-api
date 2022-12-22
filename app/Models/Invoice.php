<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use OwenIt\Auditing\Contracts\Auditable;

class Invoice extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	const AUTHORIZED = 'AUTHORIZED';
	const DECLINED = 'DECLINED';
	const FAILED = 'FAILED';
    const NOT_AUTHORIZED = 'NOT_AUTHORIZED';
	const CONFIRMED = 'CONFIRMED';
	
	const created = 'created';
	const registered = 'registered';
	const paid = 'paid';
	const overdue = 'overdue';
	const failed = 'failed';

	const STATUSES = [
		self::AUTHORIZED,
		self::DECLINED,
		self::FAILED,
        self::NOT_AUTHORIZED,
		self::CONFIRMED,
		self::created,
		self::registered,
		self::paid,
		self::overdue,
		self::failed
	];

	protected $fillable = [
		'loan_installment_id',
		'payment_date',
		'invoice_uid',
		'link',
		'expiration_date',
		'issued_by_client',
		'amount',
		'payment_amount',
		'barcode'
	];

	protected $auditInclude = [
		'loan_installment_id',
		'payment_date',
		'invoice_uid',
		'link',
		'expiration_date',
		'issued_by_client',
		'amount',
		'payment_amount',
		'barcode'
	];

	protected $dates = [
		'payment_date',
		'expiration_date',
		'created_at',
		'updated_at'
	];

	public function invoiceInstallments() : HasMany
	{
		return $this->hasMany(InvoiceInstallment::class);
	}

    public function modifiers()
    {
    	return $this->hasMany(InvoiceModifier::class);
    }
}
