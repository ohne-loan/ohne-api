<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class LogEmail extends Model implements Auditable
{
    use SoftDeletes, \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'user_id',
        'email',
        'send_at'
    ];

    protected $auditInclude = [
        'user_id',
        'email',
        'send_at'
    ];

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
        'send_at'
    ];
}
