<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class LoanTag extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    const OHNE = 'OHNE';
    const AMC = 'AMC';

    const TAGS = [
        self::OHNE,
        self::AMC
    ];

    protected $fillable = [
		'loan_id',
		'tag'
    ];
    
	protected $auditInclude = [
		'loan_id',
		'tag'
    ];
    
    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
}
