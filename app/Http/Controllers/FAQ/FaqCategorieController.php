<?php

namespace App\Http\Controllers\FAQ;

use App\Http\Requests\FaqCategorieRequest;
use App\Http\Resources\FaqCategorieResource;
use App\Models\FAQ\Categorie;
use App\Services\FAQ\FaqCategorieService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqCategorieController extends Controller
{
	/**
	 * @var FaqCategorieService
	 */
	private $faqCategorieService;

	public function __construct(FaqCategorieService $faqCategorieService)
	{
		$this->faqCategorieService = $faqCategorieService;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
	 */
    public function index()
    {
        $categories = $this->faqCategorieService->all();

        return FaqCategorieResource::collection($categories);
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param FaqCategorieRequest $request
	 * @return FaqCategorieResource
	 */
    public function store(FaqCategorieRequest $request)
    {
        $categorie = new Categorie();
        $categorie->fill($request->all());

        $this->faqCategorieService->store($categorie);

        return new FaqCategorieResource($categorie);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return FaqCategorieResource
	 */
    public function show($id)
    {
		$categorie = $this->faqCategorieService->find($id);

		return new FaqCategorieResource($categorie);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param FaqCategorieRequest $request
	 * @param  int $id
	 * @return FaqCategorieResource
	 */
    public function update(FaqCategorieRequest $request, $id)
    {
		$categorie = $this->faqCategorieService->find($id);
		$categorie->fill($request->all());

		$this->faqCategorieService->store($categorie);

		return new FaqCategorieResource($categorie);
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return FaqCategorieResource
	 */
    public function destroy($id)
    {
		$categorie = $this->faqCategorieService->find($id);

		$this->faqCategorieService->delete($categorie);

		return new FaqCategorieResource($categorie);
    }
}
