<?php


namespace App\Services\FAQ;


use App\Models\FAQ\FAQ;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class FaqService
{
	/**
	 * @param FAQ $faq
	 */
	public function all(){
	    $query = FAQ::query();
	    $this->filterByQuery($query);
	    return $query->get();
    }

	public function store(FAQ $faq)
	{
		$faq->save();
		$faq->load('categorie');
	}

	/**
	 * @param int $id
	 * @throws ModelNotFoundException
	 * @return FAQ
	 */
	public function find(int $id)
	{
		return FAQ::with('categorie')
			->findOrFail($id);
	}

	public function delete($faq)
	{
		$faq->delete();
	}

	private function filterByQuery($query){
	    if(request()->has('category') && request()->get('category') != null){
	        $query->where('faq_categorie_id', request()->get('category'));
        }
    }
}