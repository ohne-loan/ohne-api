<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'log';
    protected $connection = 'pgsql_log';
    public $timestamps = false;

    const ERROR = 'Error';
    const INFORMATION = 'Information';
    const WARNING = 'Warning';

    CONST LOG_LEVELS = [
        self::ERROR,
        self::INFORMATION,
        self::WARNING
    ];

    protected $fillable = [
        'authenticated_user_email',
        'title',
        'message',
        'details',
        'exception',
        'log_level',
        'created_at'
    ];
}
