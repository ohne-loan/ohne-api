<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogApplicationError extends Model
{
    protected $fillable =[
        'message',
        'trace',
        'status_code'
    ];
}
