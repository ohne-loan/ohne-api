<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class CronLog extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    const SENDING = 'SENDING';
    const ERROR = 'ERROR';
    const FINISHED = 'FINISHED';

    const STATUSES = [
        self::SENDING,
        self::ERROR,
        self::FINISHED
    ];

    protected $fillable = [
        'emails_sent',
        'status'
    ];

    protected $auditInclude = [
        'emails_sent',
        'status'
    ];
}
