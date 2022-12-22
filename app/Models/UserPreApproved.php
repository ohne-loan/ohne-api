<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class UserPreApproved extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	protected $fillable = [
		'cpf',
		'user_pre_approved_partner_id',
		'origin_base_name'
    ];
    
	protected $auditInclude = [
		'cpf',
		'user_pre_approved_id',
		'origin_base_name'
	];

    public function partner()
    {
    	return $this->hasOne(UserPreApprovedPartner::class, 'id', 'user_pre_approved_partner_id');
    }
}
