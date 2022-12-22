<?php


namespace App\Services\FAQ;


use App\Models\FAQ\Categorie;

class FaqCategorieService
{
	public function all()
	{
		return Categorie::all();
	}

	/**
	 * @param int $id
	 * @return Categorie
	 */
	public function find(int $id)
	{
		return Categorie::with('questions')
			->findOrFail($id);
	}

	public function store(Categorie $categorie)
	{
		$categorie->save();
	}

	public function delete(Categorie $categorie)
	{
		$categorie->delete();
	}
}