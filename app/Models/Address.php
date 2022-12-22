<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Address extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'addresses';

    protected $fillable = [
        'postal_code',
	    'number',
	    'address',
	    'address_extra',
	    'neighborhood',
        'state',
	    'city',
	    'address_proof_id'
    ];

    protected $auditInclude = [
        'postal_code',
	    'number',
	    'address',
	    'address_extra',
	    'neighborhood',
        'state',
	    'city',
	    'address_proof_id'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class, 'id', 'address_id');
    }

    public function city()
    {
    	return $this->belongsTo(City::class);
    }

    public function addressProof()
    {
    	return $this->hasOne(UserDocument::class, 'id', 'address_proof_id');
    }
}
