<?php

namespace App\Models\FAQ;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'faq_categories';

    protected $fillable = [
    	'title'
	];

    public function questions()
	{
		return $this->hasMany(FAQ::class, 'faq_categorie_id', 'id');
	}
}
