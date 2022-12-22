<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class UserDeviceData extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

	protected $table = 'user_device_data';

    protected $fillable = [
		'user_id',
		'client',
		'operating_system',
		'device_name',
		'device_brand',
		'device_model',
		'is_bot',
		'bot_info'
	];

	protected $auditInclude = [
		'user_id',
		'client',
		'operating_system',
		'device_name',
		'device_brand',
		'device_model',
		'is_bot',
		'bot_info'
	];
}
