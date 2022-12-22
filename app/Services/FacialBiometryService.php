<?php


namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Exceptions\ApiException;
use App\Models\FacialBiometry;
use App\Models\FacialBiometryCameraBlocked;
use App\Services\DocumentsService;
use App\Services\HttpServiceCurl;
use stdClass;

class FacialBiometryService
{
    /**
     * @var DocumentsService
     */
    private $documentsService;

    /**
     * @var HttpServiceCurl
     */
    private $httpService;

    /**
     * @var string
     */
    private $baseUri;

    /**
     * FacialBiometryService constructor.
     */
    public function __construct(DocumentsService $documentsService, HttpServiceCurl $httpService)
    {
        $this->documentsService = $documentsService;
        $this->httpService = $httpService;
        $this->baseUri = env('CERTIFACE_FACIAL_BIOMETRY_API_URL');
    }

    public function getFacialBiometryAppKey($cpf, $name, $birthDay)
    {
        $appKey = $this->getAppKey($cpf, $name, $birthDay);

        return $appKey;
    }

    public function save(int $userId, array $facialBiometryArray)
    {
        $documentId = $this->saveImage($userId, $facialBiometryArray['image']);

        $facialBiometry = new FacialBiometry();
        $facialBiometry->fill($facialBiometryArray);
        $facialBiometry->user_id = $userId;
        $facialBiometry->user_documents_id = $documentId;
        $facialBiometry->origin = FacialBiometry::WEB;
        $facialBiometry->saveOrFail();

        $this->savePartnerResult($userId, $documentId, $facialBiometry->app_key);
    }

    public function saveCameraBlockedInformation(int $userId, bool $cameraBlocked)
    {
        $facialBiometryCameraBlocked = new FacialBiometryCameraBlocked();
        $facialBiometryCameraBlocked->user_id = $userId;
        $facialBiometryCameraBlocked->camera_blocked = $cameraBlocked;
        $facialBiometryCameraBlocked->saveOrFail();
    }
    
    private function savePartnerResult(int $userId, int $documentId, string $appKey)
    {
        $uri = $this->baseUri . "result";
        $headers = ['Content-Type' => 'application/x-www-form-urlencoded'];
        $body = "appkey=" . $appKey;

        $result = $this->httpService->post($uri, $headers, $body);

        if (!isset($result)) {
            throw new ApiException("A appKey não contém dados, verifique se a mesma foi utilizada.", 500);
        }

        $facialBiometry = new FacialBiometry();
        $facialBiometry->user_id = $userId;
        $facialBiometry->app_key = $appKey;
        $facialBiometry->success = $result->valid;
        $facialBiometry->code_result = $result->codID;
        $facialBiometry->cause_result = $result->cause;
        $facialBiometry->protocol = $result->protocol;
        $facialBiometry->score = $result->score;
        $facialBiometry->origin = FacialBiometry::API;
        $facialBiometry->user_documents_id = $documentId;
        $facialBiometry->saveOrFail();
    }

    private function saveImage(int $userId, string $image) : int
    {
        $currentDate = Carbon::now();

        $fileName = $userId . "_" . $currentDate->format('Y-m-d_H-i-s') . ".jpeg";
        $filePath = storage_path() . "\\" . $fileName;

        createFileByBase64($image, $filePath);

        $file = new UploadedFile($filePath, $fileName);

        $document = $this->documentsService->createTemp($file);

        $newDocument = $this->documentsService->find($document->uuid);

        $this->documentsService->moveToFinal($newDocument);

        unlink($file);

        return $document->id;
    }

    private function getAppKey($cpf, $name, $birthDay)
    {
        try {
            $user = env('CERTIFACE_FACIAL_BIOMETRY_API_USER');

            $token = $this->getAccessToken();

            if (!isset($token)) {
                throw new ApiException("Ocorreu um erro ao obter a app key.", 500);
            }

            $uri = $this->baseUri . "appkey";
            $headers = ['Content-Type' => 'application/x-www-form-urlencoded'];

            $time = strtotime($birthDay);
            $birthDayDate = date('d/m/Y', $time);

            $body = "user=" . $user . "&token=" . \json_encode($token) . "&cpf=" . $cpf
                        . "&nome=" . $name . "&nascimento=" . $birthDayDate;

            $result = $this->httpService->post($uri, $headers, $body);

            if (!isset($result)) {
                throw new ApiException("Ocorreu um erro ao obter a app key.", 500);
            }
        
            return $result;
        } catch (\Exception $e) {
            throw new ApiException("Ocorreu um erro ao obter a app key." . $e->getMessage(), 500);
        }
    }

    private function getAccessToken()
    {
        $user = env('CERTIFACE_FACIAL_BIOMETRY_API_USER');
        $password = env('CERTIFACE_FACIAL_BIOMETRY_API_PASSWORD');

        $uri = $this->baseUri . "credencial";
        $headers = ['Content-Type' => 'application/x-www-form-urlencoded'];
        $body = "user=" . $user . "&pass=" . $password;

        $result = $this->httpService->post($uri, $headers, $body);

        return $result;
    }
}
