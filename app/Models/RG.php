<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class RG extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	const ISSUING_BODIES = [
		'SSP',
		'SSEP',
        'Detran',
        'Outros'
	];

	protected $table = 'rg_documents';

	protected $fillable = [
		'user_id',
		'rg',
		'issuing_body',
		'issuing_state',
		'issuing_date'
	];

	protected $auditInclude = [
		'user_id',
		'rg',
		'issuing_body',
		'issuing_state',
		'issuing_date'
	];

	protected $dates = [
		'issuing_date',
		'created_at',
		'updated_at'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function state(){
	    return $this->belongsTo(State::class, 'issuing_state');
    }
}
