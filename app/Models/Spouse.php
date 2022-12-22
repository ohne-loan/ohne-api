<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Spouse extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
		'name',
		'cpf',
		'birthday',
		'phone',
		'has_loans',
		'gross_income',
		'income_proof_id',
        'profession'
    ];
    
    protected $auditInclude = [
		'name',
		'cpf',
		'birthday',
		'phone',
		'has_loans',
		'gross_income',
		'income_proof_id',
        'profession'
	];

    protected $casts = [
        'has_loans' => 'bool'
    ];

    protected $dates = [
        'birthday',
        'created_at',
        'updated_at'
    ];

    public function setProfessionAttribute($value)
    {
        $this->attributes['profession'] = strtoupper($value);
    }

    public function marriedTo()
	{
		return $this->hasOne(UserPersonalInfo::class);
	}

    public function incomeProof()
    {
        return $this->hasOne(UserDocument::class, 'id', 'income_proof_id');
    }
}
