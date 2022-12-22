<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class FacialBiometry extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;
	
	const WEB = 'WEB';
	const API = 'API';

	const ORIGINS = [
		self::WEB,
        self::API
	];

	protected $fillable = [
		'user_id',
		'app_key',
		'success',
		'code_result',
        'cause_result',
		'protocol',
		'score',
		'origin',
        'user_documents_id'
	];

	protected $auditInclude = [
		'user_id',
		'app_key',
		'success',
		'code_result',
        'cause_result',
		'protocol',
		'score',
		'origin',
        'user_documents_id'
	];

	protected $dates = [
		'created_at',
		'deleted_at'
	];

    public function user()
    {
    	return $this->belongsTo(User::class);
	}
	
	public function document()
    {
    	return $this->belongsTo(UserDocument::class);
    }
}
