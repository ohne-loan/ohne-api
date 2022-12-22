<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserAdditionalDocument extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
		'user_id',
		'document_name',
		'user_document_id'
    ];
    
    protected $auditInclude = [
		'user_id',
		'document_name',
		'user_document_id'
	];

	public function document(): BelongsTo
	{
		return $this->belongsTo(UserDocument::class);
	}
}
