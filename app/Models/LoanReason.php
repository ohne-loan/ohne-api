<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanReason extends Model implements Auditable
{
    use SoftDeletes, \OwenIt\Auditing\Auditable;

    const Viagem            = 1;
    const QuitarDividas     = 2;
    const Investimento      = 3;
    const Educacao          = 4;
    const Impostos          = 5;
    const Outros            = 5;

    const LEVEL = [
        self::Viagem,
        self::QuitarDividas,
        self::Investimento,
        self::Educacao,
        self::Impostos,
        self::Outros
    ];

    protected $fillable = [
		'title'
	];

	protected $auditInclude = [
		'title'
	];
}
