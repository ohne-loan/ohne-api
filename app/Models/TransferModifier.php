<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class TransferModifier extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

	protected $fillable = [
		'transfer_id',
		'description',
		'value'
	];

	protected $auditInclude = [
		'transfer_id',
		'description',
		'value'
	];

    public function transfer()
    {
    	return $this->belongsTo(Transfer::class);
    }
}
