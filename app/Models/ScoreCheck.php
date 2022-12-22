<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ScoreCheck extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	const ALPHA = 'ALPHA';
	const OMEGA = 'OMEGA';
	const APROVADO = 'APROVADO';
	const REPROVADO = 'REPROVADO';
	const PENDENTE = 'PENDENTE';

	const TYPES = [
		self::ALPHA,
		self::OMEGA
	];

	const STATUSES = [
		self::APROVADO,
		self::REPROVADO,
		self::PENDENTE
	];

	protected $fillable = [
		'user_id',
		'type',
		'status',
		'score'
	];

	protected $auditInclude = [
		'user_id',
		'type',
		'status',
		'score'
	];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function parameters()
	{
		return $this->hasMany(ScoreCheckParameter::class);
	}
}
