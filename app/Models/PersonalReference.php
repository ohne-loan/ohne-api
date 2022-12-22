<?php

namespace App\Models;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class PersonalReference extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable =[
        'name',
        'phone_id'
    ];

    protected $auditInclude =[
        'name',
        'phone_id'
    ];

    public function phone()
    {
        return $this->belongsTo(Phone::class);
    }
}
