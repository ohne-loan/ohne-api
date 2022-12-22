<?php

namespace App\Models\FAQ;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
	protected $table = 'faq';

	protected $fillable = [
		'faq_categorie_id',
		'question',
		'answer'
	];

    public function categorie()
	{
		return $this->belongsTo(Categorie::class, 'faq_categorie_id', 'id');
	}
}
