<?php

namespace App\Http\Controllers\FAQ;

use App\Http\Requests\FaqRequest;
use App\Http\Resources\FaqResource;
use App\Models\FAQ\FAQ;
use App\Services\FAQ\FaqService;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
	/**
	 * @var FaqService
	 */
	private $faqService;

	public function __construct(FaqService $faqService)
	{
		$this->faqService = $faqService;
	}

	public function index(){
	    $resources = $this->faqService->all();
	    return FaqResource::collection($resources);
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param FaqRequest $request
	 * @return FaqResource
	 */
    public function store(FaqRequest $request)
    {
        $faq = new FAQ();
        $faq->fill($request->all());

        $this->faqService->store($faq);

        return new FaqResource($faq);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return FaqResource
	 */
    public function show($id)
    {
        $faq = $this->faqService->find($id);

        return new FaqResource($faq);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param FaqRequest $request
	 * @param  int $id
	 * @return FaqResource
	 */
    public function update(FaqRequest $request, $id)
    {
		$faq = $this->faqService->find($id);
		$faq->fill($request->all());

		$this->faqService->store($faq);

		return new FaqResource($faq);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return FaqResource
	 */
    public function destroy($id)
    {
		$faq = $this->faqService->find($id);

		$this->faqService->delete($faq);

		return new FaqResource($faq);
    }
}
