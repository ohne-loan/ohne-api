<?php


namespace App\Services;


use App\Exceptions\ApiException;
use App\Models\UserDocument;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class DocumentsService
{
	/** @var \Illuminate\Contracts\Filesystem\Filesystem $disk */
	private $disk;
	private $events = [];

	public function __construct()
	{
		$this->disk = Storage::disk(config('filesystems.cloud'));
	}

	public function createTemp(UploadedFile $file)
	{
		$dir = 'documents/temp/' . date('Y/m/d');
		$name = str_random(32) . '.' . pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
		$path = $dir . '/' . $name;
		$url = $this->disk->url($path);

		$file->storeAs($dir, $name, config('filesystems.cloud'));

		$document = new UserDocument();
		$document->uuid = Uuid::uuid4()->toString();
		$document->path = $path;
		$document->url = $url;
		$document->save();
		//Retorna nome para exibir na tela - Não é necessário salvar
        $document->name = $file->getClientOriginalName();

		return $document;
	}

	/**
	 * @param UserDocument $document
	 * @throws ApiException
	 */
	public function moveToFinal(UserDocument $document)
	{
		if ( $document->persisted || ! $this->disk->exists($document->path) ) {
			return;
			//throw new ApiException('Arquivo temporário não encontrado', 404);
		}

		$dir = 'documents/final/' . date('Y/m/d');
		$name = pathinfo($document->path, PATHINFO_BASENAME);
		$path = $dir . '/' . $name;
		$url = $this->disk->url($path);

		$this->move($document->path, $path);

		$document->path = $path;
		$document->url = $url;
		$document->persisted = true;
		$document->save();
	}

	public function find(string $uuid)
	{
		$document = UserDocument::query()
			->where('uuid', $uuid)
			->firstOrFail();

		/* @var UserDocument $document */
		return $document;
	}

	private function move(string $from, string $to)
	{
		$this->events[] = [
			'from' => $from,
			'to' => $to
		];

		$this->disk->move($from, $to);
	}

	public function rollBack()
	{
		while ( count($this->events) > 0 ) {
			$event = array_pop($this->events);
			$this->disk->move($event['to'], $event['from']);
		}
	}

	public function addFileTest($type = 'image')
    {
        $file = new UploadedFile(storage_path(). '/documents/pdfteste.pdf', 'imgtest.jpg');
        if ($type == 'pdf'){
            $file = new UploadedFile(storage_path(). '/documents/pdfteste.pdf', 'pdfteste.pdf');
        }

        return $this->createTemp($file);
    }
}