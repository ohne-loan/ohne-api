<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class FacialBiometryCameraBlocked extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

	protected $table = 'facial_biometry_camera_blocked';
	
    protected $fillable = [
		'user_id',
		'camera_blocked'
	];

	protected $auditInclude = [
        'user_id',
		'camera_blocked'
	];

	protected $dates = [
		'created_at',
		'deleted_at'
	];

    public function user()
    {
    	return $this->belongsTo(User::class);
	}
}
