<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class LoanAddTopazio extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'loans_add_topazio';

    protected $fillable = [
        'user_id',
        'ccb_number'
    ];

    protected $auditInclude = [
        'user_id',
        'ccb_number'
    ];

    public function loanAddTopazio(): BelongsTo
    {
    	return $this->belongsTo(User::class)->withTrashed();
    }
}
