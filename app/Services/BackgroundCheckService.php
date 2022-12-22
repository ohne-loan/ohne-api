<?php


namespace App\Services;

use App\Exceptions\ApiException;
use App\Libraries\NeuroTech\Client;
use App\Models\ScoreCheck;
use App\Models\User;
use App\Models\ScoreCheckParameter;
use Illuminate\Support\Facades\DB;

class BackgroundCheckService
{
    /**
     * @var NeuroTechService
     */
    private $neuroTechService;

    public function __construct(HttpService $httpService)
    {
        $this->neuroTechService = new NeuroTechService($httpService);
    }

    /**
     * @param string $checkType
     * @param User $user
     * @return ScoreCheck
     * @throws ApiException
     * @throws \Exception
     */
    public function doCheck(string $checkType, User $user)
    {
        list($response, $parameters) = $this->sendRequest($checkType, $user);

        DB::beginTransaction();

        $scoreCheck = new ScoreCheck();
        $scoreCheck->user_id = $user->id;
        $scoreCheck->type = $checkType;
        $scoreCheck->status = (string)$response->resultado;
        $scoreCheck->code = (string)$response->cdOperacao;
        $scoreCheck->score = 850;
        $scoreCheck->score = isset($parameters['SCORE']) && is_numeric($parameters['SCORE'])
            ? $parameters['SCORE']
            : null;

        if (!$scoreCheck->score && $checkType == ScoreCheck::OMEGA) {
            $scoreCheck->score = isset($parameters['PROP_SCORE']) && is_numeric($parameters['PROP_SCORE'])
                ? $parameters['PROP_SCORE']
                : null;
        }

        $scoreCheck->save();

        $this->saveParameters($scoreCheck, $parameters);

        DB::commit();

        return $scoreCheck;
    }

    private function saveParameters(ScoreCheck $scoreCheck, array $parameters)
    {
        $rows = [];

        foreach ($parameters as $key => $value) {
            $rows[] = [
                'key' => $key,
                'value' => $value,
                'score_check_id' => $scoreCheck->id
            ];
        }

        ScoreCheckParameter::insert($rows);
    }

    /**
     * @param $checkType
     * @param $user
     * @return array
     * @throws ApiException
     * @throws \Exception
     */
    private function sendRequest($checkType, $user)
    {
        if ($checkType === ScoreCheck::ALPHA) {
            $response = $this->neuroTechService->checkAlpha($user);
        } elseif ($checkType === ScoreCheck::OMEGA) {
            $response = $this->neuroTechService->checkOmega($user);
        } else {
            throw new \Exception("Background check type {$checkType} not found");
        }

        if (!isset($response->sucesso) || !$response->sucesso) {
            throw new ApiException('Ops! algo deu errado. Tente novamente mais tarde.', 400);
        }

        $parameters = $this->neuroTechService->fromStdClassArrayToArray($response->lsRetorno);

        return [$response, $parameters];
    }

    public function getLatestScore(User $user, string $type)
    {
        $query = ScoreCheck::query()
            ->where('user_id', $user->id)
            ->latest()
            ->limit(1);

        if ($type) {
            $query->where('type', $type);
        }

        return $query->first();
    }
}
