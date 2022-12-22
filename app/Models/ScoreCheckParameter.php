<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ScoreCheckParameter extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $fillable = [
    	'key',
		'value',
		'score_check_id'
	];

    protected $auditInclude = [
    	'key',
		'value',
		'score_check_id'
	];

    public function scoreCheck()
	{
		return $this->belongsTo(ScoreCheck::class);
	}
}
