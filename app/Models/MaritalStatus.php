<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class MaritalStatus extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    const SOLTEIRO = 1;
    const CASADO = 2;
    const UNIAO_ESTAVEL = 3;
    const DIVORCIADO = 4;
    const VIUVO = 5;

    const STATUS = [self::SOLTEIRO, self::CASADO, self::UNIAO_ESTAVEL, self::DIVORCIADO, self::VIUVO, ];

	protected $table = 'marital_statuses';

	protected $fillable = [
		'title'
    ];
    
	protected $auditInclude = [
		'title'
	];
}
