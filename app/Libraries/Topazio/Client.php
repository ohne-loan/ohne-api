<?php

namespace App\Libraries\Topazio;

use GuzzleHttp\Exception\RequestException;
use App\Models\User;
use App\Models\Loan;
use App\Models\ScoreCheck;
use App\Models\ApiRequestLog;
use App\Models\BankAccount;
use App\Models\LoanSimulatedInternal;
use stdClass;

class Client
{
    /**
     * @var \GuzzleHttp\Client $client
     */
    private $client;
    private $redirectUri;
    private $baseUri;
    private $baseUriOAuth;

    const SCORE = 500;
    const RATING = "A";
    const WAY_PAYMENT_LOAN = "BOL";
    const PRODUCT_CODE = 820;
    const FORM_SETTLEMENT = "AGD";

    public function __construct()
    {
        $this->redirectUri = env('TOPAZIO_REDIRECT_URI');
        $this->baseUri = env('TOPAZIO_URI');
        $this->baseUriOAuth = env('TOPAZIO_URI_OAUTH');

        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $this->baseUri
        ]);
    }

    public function getNextWorkDay(string $accessToken, string $loanTag)
    {
        $currentDate = $this->getCurrentDate();

        $uri = "wd/v1/workdays/" . $currentDate;

        $header = $this->makeHeader($accessToken, $loanTag);

        $result = $this->get($uri, $header);

        if (!isset($result->success) || !$result->success) {
            $e = new \Exception($result);
            throw $e;
        }

        $nextWorkday = $this->changeDateIfItIsChristmasOrNewYear($result->nextWorkday);

        return $nextWorkday;
    }

    public function addLoan(User $user, ScoreCheck $scoreCheck, Loan $loan, BankAccount $bankAccount, string $bankCode, LoanSimulatedInternal $loanSimulated, string $accessToken)
    {
        $loanTag = $loan->tag->tag;

        $body = $this->makeBodyToAddLoan($user, $scoreCheck, $loan, $bankAccount, $bankCode, $loanSimulated, $accessToken);
        $header = $this->makeHeader($accessToken, $loanTag);

        $uri = "emd/v2/loans";

        $result = $this->post($uri, $body, $header);

        return $result;
    }

    public function addClient(User $user, ScoreCheck $scoreCheck, string $accessToken, string $loanTag)
    {
        $body = $this->makeBodyToAddClient($user, $scoreCheck);
        $header = $this->makeHeader($accessToken, $loanTag);

        $uri = "cli/v1/basic-customers";

        $result = $this->post($uri, $body, $header);

        return $result;
    }

    public function confirmLoan(int $ccbNumber, int $partnerId, string $document, string $accessToken, string $loanTag)
    {
        $body = $this->makeBodyToConfirmLoan($ccbNumber, $partnerId, $document);
        $header = $this->makeHeader($accessToken, $loanTag);

        $uri = "emd/v2/confirms";

        $result = $this->post($uri, $body, $header);

        return $result;
    }

    public function getAccessToken(string $loanTag) : string
    {
        $tokenBase64 = $this->getTokenBase64($loanTag);

        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => 'Basic ' . $tokenBase64
        ];

        $form_params = [
            'grant_type' => 'authorization_code',
            'code' => $this->getGrantToken($loanTag)
        ];

        $uri = "oauth/access-token";

        $verb = "POST";

        $this->setBaseUriOAuth();

        $response = $this->sendrequest($verb, $uri, [
            'headers' => $headers,
            'form_params' => $form_params
            ]);

        $this->setBaseUriDefault();

        return $response->access_token;
    }

    private function makeBodyToAddLoan(
        User $user,
        ScoreCheck $score,
        Loan $loan,
        BankAccount $bankAccount,
        string $bankCode,
        LoanSimulatedInternal $loanSimulated,
        string $accessToken
    ) {
        $bodyClass = new stdClass();
        $loanTag = $loan->tag->tag;
        $releaseDate = $this->getNextWorkDay($accessToken, $loanTag);

        $accountType = $bankAccount->type;

        if ($accountType == "CHECKING") {
            $accountType = "CC";
        } elseif ($accountType == "SAVINGS") {
            $accountType = "CP";
        }

        $bodyClass->client = new stdClass();
        $bodyClass->client->document = $user->cpf;
        $bodyClass->client->nameOrCompanyName = $user->name;
        $bodyClass->client->score = self::SCORE;
        $bodyClass->client->rating = self::RATING;
        $bodyClass->client->billing = adjustDecimalPlaces($user->gross_income);

        $bodyClass->loans = new stdClass();
        $bodyClass->loans->partnerId = $loan->id;
        $bodyClass->loans->releaseDate = $releaseDate;
        $bodyClass->loans->totalValue = adjustDecimalPlaces($loanSimulated->financed_value + $loanSimulated->iof_value);
        $bodyClass->loans->amountPay = adjustDecimalPlaces($loanSimulated->financed_value);
        $bodyClass->loans->rate = adjustDecimalPlaces($loanSimulated->monthly_customer_rate);
        $bodyClass->loans->quotaAmount = $loanSimulated->num_installments;
        $bodyClass->loans->iofValue = adjustDecimalPlaces($loanSimulated->iof_value);
        $bodyClass->loans->wayPaymentLoan = self::WAY_PAYMENT_LOAN;
        $bodyClass->loans->productCode = self::PRODUCT_CODE;
        $bodyClass->loans->repurchaseDocument = $this->getRepurchageDocument($loanTag);
        $bodyClass->loans->TAC = 0;

        $bodyClass->loans->payment = new stdClass();
        $bodyClass->loans->payment->formSettlement = self::FORM_SETTLEMENT;
        $bodyClass->loans->payment->bankCode = $bankCode;
        $bodyClass->loans->payment->branch = $bankAccount->agency_number;
        $bodyClass->loans->payment->accountNumber = $bankAccount->account_number;
        $bodyClass->loans->payment->accountType = $accountType;

        $planQuotas = array();

        foreach ($loan->installments as $installment){
            $planQuota = new stdClass();
            $planQuota->quotaNumber = $installment->number;
            $planQuota->quotaValue = adjustDecimalPlaces($installment->amount);
            $planQuota->quotaDueDate = $installment->date->format('Y-m-d');

            $planQuotas[] = $planQuota;
        }

        $bodyClass->loans->planQuota = $planQuotas;

        return json_encode($bodyClass);
    }

    private function makeBodyToAddClient(User $user, ScoreCheck $score)
    {
        $phone = $user->phones->where('type', 'CELLPHONE')->first();

        $bodyClass = new stdClass();

        $bodyClass->document = $user->cpf;
        $bodyClass->nameOrCompanyName = $user->name;
        $bodyClass->billing = $user->gross_income;

        $bodyClass->motherName = $user->personalInfo->mother_name;
        $bodyClass->fatherName = $user->personalInfo->father_name;
        $bodyClass->nationality = $user->gender === "MALE" ? "Brasileiro" : "Brasileira";
        $bodyClass->birthPlace = $user->personalInfo->naturality;
        $bodyClass->birthState = $user->personalInfo->naturalityUf->uf;
        $bodyClass->totalPatrimony = $user->patrimony;
        $bodyClass->pep = $user->politically_exposed_person === true ? "S" : "N";

        if($user->politically_exposed_person === true){
            $bodyClass->pepSince = $user->politically_exposed_person_since->format('Y-m-d');
        }

        $bodyClass->address = new stdClass();
        $bodyClass->address->postalCode = $user->address->postal_code;
        $bodyClass->address->street = mb_substr($user->address->address, 0, 60, "utf-8");
        $bodyClass->address->number = strval($user->address->number);
        $bodyClass->address->complement = mb_substr($user->address->address_extra, 0, 5, "utf-8");
        $bodyClass->address->district = mb_substr($user->address->neighborhood, 0, 60, "utf-8");
        $bodyClass->address->city = mb_substr($user->address->city, 0, 60, "utf-8");
        $bodyClass->address->state = $user->address->state;

        $bodyClass->contact = new stdClass();
        $bodyClass->contact->phone = $phone->area_code . $phone->phone;
        $bodyClass->contact->email = $user->email;
        
        return json_encode($bodyClass);
    }

    private function makeBodyToConfirmLoan(int $ccbNumber, int $partnerId, string $document)
    {
        $bodyClass = new stdClass();

        $bodyClass->ccbNumber = $ccbNumber;
        $bodyClass->partnerId = $partnerId;
        $bodyClass->document = $document;
        
        return json_encode($bodyClass);
    }

    private function getGrantToken(string $loanTag)
    {
        $headers = ['Content-Type' => 'application/json'];

        $body = new stdClass();
        $body->client_id = $this->getClientId($loanTag);
        $body->redirect_uri = $this->redirectUri;

        $bodyJson = json_encode($body);

        $uri = "oauth/grant-code";

        $this->setBaseUriOAuth();

        $response = $this->post($uri, $bodyJson, $headers);

        $this->setBaseUriDefault();

        if (!isset($response)) {
            return null;
        }

        $grantToken = str_replace('http://localhost/?code=', '', $response->redirect_uri);

        return $grantToken;
    }

    private function getTokenBase64(string $loanTag)
    {
        $clientId = $this->getClientId($loanTag);
        $secretKey = $this->getSecretKey($loanTag);

        return base64_encode($clientId . ':' . $secretKey);
    }

    private function makeHeader(string $accessToken, string $loanTag)
    {
        $clientId = $this->getClientId($loanTag);

        return $header = [
            'Content-Type' => 'application/json',
            'access_token' => $accessToken,
            'client_id' => $clientId
        ];
    }

    private function post(string $uri, $body, $header)
    {
        $verb = 'POST';

        $response = $this->sendRequest($verb, $uri, [
            'headers' => $header,
            'body' => $body
            ]);

        return $response;
    }

    private function get(string $uri, $header)
    {
        $verb = "GET";

        $response = $this->sendRequest($verb, $uri, [
            'headers' => $header
            ]);

        return $response;
    }

    private function sendRequest(string $verb, string $uri, array $options)
    {
        $inBody = \json_encode(tryGetValueArray($options, 'body'));
        $inHeaders = \json_encode(tryGetValueArray($options, 'headers'));
        $outBody = "";
        $outHeaders = "";

        try {
            $response = $this->client->request($verb, $uri, $options);

            $outBody = \json_decode($response->getBody());
            $outHeaders = \json_encode($response->getHeaders());
    
            if ($inBody == "null") {
                $inBody = \json_encode(tryGetValueArray($options, 'form_params'));
            }
        } catch (RequestException $exception) {
            if ($exception->hasResponse()) {
                $outBody = \json_decode($exception->getResponse()->getBody());
                $outHeaders = \json_encode($exception->getResponse()->getHeaders());
            } else {
                $outBody = new stdClass();
                $outBody->success = false;
            }
        }
        
        $this->saveRequest($uri, $inBody, $inHeaders, \json_encode($outBody), $outHeaders);

        return $outBody;
    }

    private function saveRequest(string $uri, string $inBody, string $inHeaders, string $outBody, string $outHeaders)
    {
        $logApiRequest = new ApiRequestLog();

        $logApiRequest->authenticated_user_email = null;
        $logApiRequest->route = $this->baseUri . $uri;
        $logApiRequest->title = 'Log API Request and Response';
        $logApiRequest->request = $inBody;
        $logApiRequest->response = $outBody;
        $logApiRequest->log_level = ApiRequestLog::INFORMATION;
        $logApiRequest->headers_request = $inHeaders;
        $logApiRequest->headers_response = $outHeaders;

        $logApiRequest->save();
    }

    private function setBaseUriOAuth()
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $this->baseUriOAuth
        ]);
    }

    private function setBaseUriDefault()
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $this->baseUri
        ]);
    }

    private function changeDateIfItIsChristmasOrNewYear(string $nextWorkDay) : string
    {
        if($nextWorkDay == "2018-12-24" || $nextWorkDay == "2018-12-25"){
            return "2018-12-26";
        }

        if($nextWorkDay == "2018-12-31"){
            return "2019-01-02";
        }

        return $nextWorkDay;
    }

    private function getCurrentDate() : string
    {
        $currentDate = date('Y-m-d');
        $currentHour = date('H:i');
        $limitHourToSendLoan = '13:59';

        if ($currentHour > $limitHourToSendLoan) {
            return date("Y-m-d", strtotime($currentDate . "+1 days"));
        }

        return $currentDate;
    }

    private function getClientId(string $loanTag)
    {
        $clientId = env($loanTag . '_TOPAZIO_CLIENT_ID');

        return $clientId;
    }

    private function getSecretKey(string $loanTag)
    {
        $secretKey = env($loanTag . '_TOPAZIO_SECRET_KEY');

        return $secretKey;
    }

    private function getRepurchageDocument(string $loanTag)
    {
        $repurchaseDocument = env($loanTag . '_TOPAZIO_REPURCHASE_DOCUMENT');

        return $repurchaseDocument;
    }
}
