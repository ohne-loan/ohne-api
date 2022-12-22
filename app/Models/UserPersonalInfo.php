<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class UserPersonalInfo extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;

	protected $fillable = [
		'user_id',
		'spouse_id',
		'education_level_id',
		'place_of_birth',
		'nationality',
        'naturality',
        'naturality_id',
		'income_proof_id',
		'mother_name',
		'father_name'
    ];
    
	protected $auditInclude = [
		'user_id',
		'spouse_id',
		'education_level_id',
		'place_of_birth',
		'nationality',
        'naturality',
        'naturality_id',
		'income_proof_id',
		'mother_name',
		'father_name'
	];

    public function spouse()
    {
    	return $this->hasOne(Spouse::class, 'id', 'spouse_id');
    }

    public function educationLevel()
    {
    	return $this->belongsTo(EducationLevel::class);
	}

    public function naturalityUf()
    {
    	return $this->belongsTo(State::class, 'naturality_id');
    }

    public function incomeProof()
    {
    	return $this->hasOne(UserDocument::class, 'id', 'income_proof_id');
    }
}
