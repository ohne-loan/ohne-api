<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserDocumentRequest;
use App\Http\Resources\UserDocumentResource;
use App\Services\DocumentsService;

class UserDocumentController extends Controller
{
	/**
	 * @var DocumentsService
	 */
	private $documentsService;

	public function __construct(DocumentsService $documentsService)
	{
		$this->documentsService = $documentsService;
	}

	public function upload(UserDocumentRequest $request)
	{
		$file = $request->file('file');

		$document = $this->documentsService->createTemp($file);

		return new UserDocumentResource($document);
	}
}
