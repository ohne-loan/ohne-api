<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class UserPreApprovedPartner extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	protected $fillable = [
        'name',
        'description'
    ];
    
	protected $auditInclude = [
        'name',
        'description'
	];

    public function users()
    {
    	return $this->hasMany(UserPreApproved::class, 'user_pre_approved_id', 'id');
    }
}
