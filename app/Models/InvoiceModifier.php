<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class InvoiceModifier extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	public $timestamps = false;

	protected $fillable = [
		'invoice_id',
		'description',
		'value'
	];

	protected $auditInclude = [
		'invoice_id',
		'description',
		'value'
	];

    public function invoice()
    {
    	return $this->belongsTo(Invoice::class);
    }
}
