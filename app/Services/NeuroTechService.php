<?php


namespace App\Services;

use App\Services\HttpService;
use App\Models\User;
use App\Models\Phone;
use Illuminate\Support\Facades\Auth;
use stdClass;

class NeuroTechService
{
    /**
     * @var HttpService
     */
    private $httpService;
    
    /**
     * @var string
     */
    private $baseUri;

    public function __construct(HttpService $httpService)
    {
        $this->httpService = $httpService;
        $this->baseUri = env('CREDIT_POLICY_API_URL');
    }
    
    public function checkAlpha(User $user)
    {
        $appKey = 'Bearer ' . $this->getAccessToken();

        $uri = $this->baseUri . "credit-policy/check-alpha";
        
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $appKey
        ];

        $body = new stdClass();
        $body->cpf = $user->cpf;
        $body->personName = $user->name;
        $body->personBirthDate = $user->birthday->toDateTimeString();

        $result = $this->httpService->post($uri, $headers, $body);

        return $result;
    }

    public function checkOmega(User $user)
    {
        $appKey = 'Bearer ' . $this->getAccessToken();

        $uri = $this->baseUri . "credit-policy/check-omega";
        
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $appKey
        ];

        $phone = Phone::where('user_id', $user->id)->where('type', Phone::LANDLINE)->first();
        $cellphone = Phone::where('user_id', $user->id)->where('type', Phone::CELLPHONE)->first();
        $scoreCheck = $user->scoreChecks->last();
        $bankAccount = $user->bankAccounts()->latest()->first();

        $landline = new stdClass();

        if (isset($phone)) {
            $landline->area_code = $phone->area_code;
            $landline->phone = $phone->phone;
        }

        $body = new stdClass();
        $body->cpf = $user->cpf;
        $body->personName = $user->name;
        $body->email = $user->email;
        $body->personBirthDate = $user->birthday->format('Y-m-d');
        $body->cellphoneAreaCode = $cellphone->area_code;
        $body->cellphone = $cellphone->phone;
        $body->landlineAreaCode = isset($landline->area_code) ? $landline->area_code : null;
        $body->landline = isset($landline->phone) ? $landline->phone : null;
        $body->politicallyExposedPerson = $user->politically_exposed_person;

        switch ($user->gender) {
            case "MALE":
                $body->gender = "Masculino";
                break;
            case "FEMALE":
                $body->gender = "Feminino";
                break;
            case "OTHER":
                $body->gender = "Outro";
                break;
        }
        
        $body->naturality = $user->naturality;
        $body->naturalityState = $user->personalInfo->naturalityUf->uf;
        $body->nationality = $user->personalInfo->nacionality;
        $body->motherName = $user->personalInfo->mother_name;
        $body->fatherName = $user->personalInfo->father_name;

        switch ($user->personalInfo->educationLevel->title) {
            case "Ensino fundamental":
                $body->educationLevel = "Fundamental";
                break;
            case "Ensino médio":
                $body->educationLevel = "Medio";
                break;
            case "Curso superior":
                $body->educationLevel = "Superior";
                break;
            case "Mestrado":
                $body->educationLevel = "Mestrado";
                break;
            case "Doutorado":
                $body->educationLevel = "Doutorado";
                break;
        }
        
        $body->profession = $user->profession;
        $body->admissionDate = isset($user->admission_date) ? $user->admission_date->format('Y-m-d') : null;
        
        switch ($user->professionalClass->name) {
            case "Assalariado":
                $body->professionalClass = "Assalariado";
                break;
            case "Servidor Público Estadual":
                $body->professionalClass = "ServidorPublicoEstadual";
                break;
            case "Servidor Público Federal":
                $body->professionalClass = "ServidorPublicoFederal";
                break;
            case "Servidor Público Municipal":
                $body->professionalClass = "ServidorPublicoMunicipal";
                break;
            case "Militar":
                $body->professionalClass = "Militar";
                break;
            case "Forças Armadas":
                $body->professionalClass = "ForcasArmadas";
                break;
            case "Aposentado / Pensionista":
                $body->professionalClass = "AposentadoPensionista";
                break;
            case "Prestador de Serviço":
                $body->professionalClass = "PrestadorDeServico";
                break;
            case "Pensão Judicial":
                $body->professionalClass = "PensaoJudicial";
                break;
            case "Autônomo":
                $body->professionalClass = "Autonomo";
                break;
            case "Profissional Liberal":
                $body->professionalClass = "ProfissionalLiberal";
                break;
            case "Empresário":
                $body->professionalClass = "Empresario";
                break;
        }

        $body->benefitNumber = isset($user->benefit_number) ? $user->benefit_number : null;
        $body->grossIncome = $user->gross_income;

        switch ($user->maritalStatus->title) {
            case "SOLTEIRO":
                $body->maritalStatus = "Solteiro";
                break;
            case "CASADO":
                $body->maritalStatus = "Casado";
                break;
            case "UNIÃO ESTÁVEL":
                $body->maritalStatus = "UniaoEstavel";
                break;
            case "DIVORCIADO":
                $body->maritalStatus = "Divorciado";
                break;
            case "VIÚVO":
                $body->maritalStatus = "Viuvo";
                break;
        }

        $body->address = $user->address->address;
        $body->addressNumber = $user->address->number;
        $body->addressExtra = $user->address->address_extra;
        $body->addressPostalCode = $user->address->postal_code;
        $body->addressCity = $user->address->city;
        $body->addressState = $user->address->state;
        $body->addressNeighborhood = $user->address->neighborhood;
        $body->hasAddressProof = boolval($user->address->address_proof_id);
        $body->score = $scoreCheck->score;
        
        if ($user->personalReference()->exists()) {
            $body->personalReferenceName = $user->personalReference->name;
            $body->personalReferenceAreaCode = $user->personalReference->phone->area_code;
            $body->personalReferencePhone = $user->personalReference->phone->phone;
        }
        
        if ($user->personalInfo->spouse) {
            $spouse = $user->personalInfo->spouse;

            $body->spouseCpf = isset($spouse->cpf) ? $spouse->cpf : null;
            $body->spouseName = isset($spouse->name) ? $spouse->name : null;
            $body->spouseBirthDate = isset($spouse->birthday) ? $spouse->birthday->format('Y-m-d') : null;
            
            if (isset($spouse->phone)) {
                $phone = Phone::parse($spouse->phone);
                $body->spouseAreaCode = $phone->area_code;
                $body->spousePhone = $phone->phone;
            }

            $body->spouseProfession = isset($spouse->profession) ? ucwords(strtolower($spouse->profession)) : null;
            $body->spouseGrossIncome = isset($spouse->gross_income) ? $spouse->gross_income : null;
            $body->spouseHasLoan = isset($spouse->has_loans) ? boolval($spouse->has_loans) : false;
        }

        $result = $this->httpService->post($uri, $headers, $body);

        return $result;
    }
    
    public function fromStdClassArrayToArray(array $stdClassArray)
    {
        $array = array();

        foreach ($stdClassArray as $param) {
            $key = (string) $param->nmParametro;
            $value = (string) $param->vlParametro;

            $array[$key] = $value;
        }

        return $array;
    }
    
    private function getAccessToken() : string
    {
        $user = env('CREDIT_POLICY_API_USER');
        $secretKey = env('CREDIT_POLICY_API_SECRET_KEY');

        $uri = $this->baseUri . "authentication";
        $headers = ['Content-Type' => 'application/json'];
        $body = new stdClass();
        $body->email = $user;
        $body->secretKey = $secretKey;

        $result = $this->httpService->post($uri, $headers, $body);

        return $result->accessToken;
    }
}
