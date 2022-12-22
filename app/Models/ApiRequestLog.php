<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ApiRequestLog extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'log_api_request';
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
        'route',
        'title',
        'request',
        'response',
        'http_status_code_response',
        'exception',
        'origin_ip',
        'log_level',
        'created_at',
        'headers_request',
        'headers_response'
    ];

    protected $auditInclude = [
        'authenticated_user_email',
        'route',
        'title',
        'request',
        'response',
        'http_status_code_response',
        'exception',
        'origin_ip',
        'log_level',
        'created_at',
        'headers_request',
        'headers_response'
    ];
}
