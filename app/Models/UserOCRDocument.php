<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class UserOCRDocument extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;
	
	const RG_FRONT = 'RG_FRONT';
	const RG_BACK = 'RG_BACK';

	const CNH_FRONT = 'CNH_FRONT';
	const CNH_BACK = 'CNH_BACK';

	const OAB_FRONT = 'OAB_FRONT';
	const OAB_BACK = 'OAB_BACK';

	const DOCUMENT_TYPES = [
		self::RG_FRONT,
		self::RG_BACK,
		self::CNH_FRONT,
		self::CNH_BACK,
		self::OAB_FRONT,
		self::OAB_BACK
	];

	protected $fillable = [
		'user_id',
		'document_type',
		'document'
    ];
    
	protected $auditInclude = [
		'user_id',
		'document_type',
		'document'
	];
}
