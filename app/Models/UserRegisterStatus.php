<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRegisterStatus extends Model implements Auditable
{
    use SoftDeletes, \OwenIt\Auditing\Auditable;

    protected $table = 'user_register_statuses';
        
    const BASIC_DATA = 'BASIC_DATA';
    const CONFIRM_EMAIL = 'CONFIRM_EMAIL';
    const CREATE_PASSWORD = 'CREATE_PASSWORD';
    
    const CHECK_ALPHA = 'CHECK_ALPHA';
    const APPROVED_ALPHA = 'APPROVED_ALPHA';
    const REJECTED_ALPHA = 'REJECTED_ALPHA';
    
    const ADDITIONAL_DATA = 'ADDITIONAL_DATA';
    const INCOME_AND_PROFESSION = 'INCOME_AND_PROFESSION';
    const ADDRESS = 'ADDRESS';
    const PERSONAL_REFERENCE = 'PERSONAL_REFERENCE';
    const BANK_DETAILS = 'BANK_DETAILS';
    const DOCUMENTS = 'DOCUMENTS';
    const FACIAL_BIOMETRY = 'FACIAL_BIOMETRY';
    const EMAIL_ANALYSIS_PERMISSION = 'EMAIL_ANALYSIS_PERMISSION';

    const CHECK_OMEGA = 'CHECK_OMEGA';
    const APPROVED_OMEGA = 'APPROVED_OMEGA';
    const REJECTED_OMEGA = 'REJECTED_OMEGA';

    const PROCESSING = 'PROCESSING';
    const COMPLETED = 'COMPLETED';

    const STATUSES = [
        self::BASIC_DATA,
        self::CONFIRM_EMAIL,
        self::CREATE_PASSWORD,
        self::CHECK_ALPHA,
        self::APPROVED_ALPHA,
        self::REJECTED_ALPHA,
        self::ADDITIONAL_DATA,
        self::INCOME_AND_PROFESSION,
        self::ADDRESS,
        self::PERSONAL_REFERENCE,
        self::DOCUMENTS,
        self::FACIAL_BIOMETRY,
        self::EMAIL_ANALYSIS_PERMISSION,
        self::BANK_DETAILS,
        self::CHECK_OMEGA,
        self::APPROVED_OMEGA,
        self::REJECTED_OMEGA,
        self::PROCESSING,
        self::COMPLETED
    ];

    protected $fillable = [
        'user_id',
        'status'
    ];

    protected $auditInclude = [
        'user_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
