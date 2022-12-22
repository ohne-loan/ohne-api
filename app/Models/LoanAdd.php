<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class LoanAdd extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'loans_add';

    protected $fillable = [
        'user_id',
        'proposal_number', //NUMERO_PROPOSTA
        'error_description',
        'error_code'
    ];

    protected $auditInclude = [
        'user_id',
        'proposal_number', //NUMERO_PROPOSTA
        'error_description',
        'error_code'
    ];

	public function user(): BelongsTo
    {
    	return $this->belongsTo(User::class)->withTrashed();
    }
}
