<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NeurotechLog extends Model
{
    const SUCCESS = 'SUCCESS';
    const ERROR = 'ERROR';

    const TYPES = [
        self::SUCCESS,
        self::ERROR,
    ];

    protected $fillable =[
        'input',
        'output',
        'trace',
        'type'
    ];
}
