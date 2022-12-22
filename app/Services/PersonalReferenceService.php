<?php


namespace App\Services;

use App\Models\PersonalReference;
use App\Models\User;
use App\Models\Spouse;
use App\Models\Phone;
use App\Services\PhoneService;
use Illuminate\Database\Eloquent\Collection;
use App\Exceptions\ApiException;

class PersonalReferenceService
{
    /**
     * @var PhoneService
     */
    private $phoneService;

    public function __construct(PhoneService $phoneService) {
        $this->phoneService = $phoneService;
    }

    public function store(User $user, array $data)
    {
        $this->validate($user, $data);

        $phone = $this->phoneService->store($user, $data['phone']);
        
        $data['phone_id'] = $phone->id;
        
        $personalReference = PersonalReference::firstOrNew([
            'id' => $user->personal_reference_id
        ]);

        $personalReference->fill($data);
        $personalReference->name = ucwords(strtolower($personalReference->name));
        $personalReference->saveOrFail();

        $user->personal_reference_id = $personalReference->id;
        $user->saveOrFail();
    }

    private function validate(User $user, array $personalReferenceArray)
    {
        $userInformationIsDifferentOfPersonalReferenceInformation = 
        $this->validateUserInformationIsDifferentOfPersonalReferenceInformation($user, $personalReferenceArray);

        if(!$userInformationIsDifferentOfPersonalReferenceInformation){
            throw new ApiException("Ops! os dados da referência pessoal não podem ser iguais aos seus.", 400);
        }

        $spouse = Spouse::firstOrNew([
            'id' => $user->personalInfo->spouse_id
        ]);

        $spouseInformationIsDifferentOfPersonalReferenceInformation = 
            $this->validateSpouseInformationIsDifferentOfPersonalReferenceInformation($spouse, $personalReferenceArray);

        if(!$spouseInformationIsDifferentOfPersonalReferenceInformation){
            throw new ApiException("Ops! os dados da referência pessoal não podem ser iguais aos do cônjuge.", 400);
        }
    }

    private function validateUserInformationIsDifferentOfPersonalReferenceInformation(User $userInformation, array $personalReferenceInformation)
    {
        $userCellPhone = $userInformation->phones()->where('type', Phone::CELLPHONE)->first();
        $userCellPhoneWithAreaCode = $userCellPhone->area_code . $userCellPhone->phone;

        $personalReferenceName = \strtolower($personalReferenceInformation['name']);
        $personalReferencePhone = $personalReferenceInformation['phone'];

        $userName = \strtolower($userInformation->name);
        $userPhone = $userCellPhoneWithAreaCode;

        if ($personalReferenceName == $userName ||
            $personalReferencePhone == $userPhone) {
            return false;
        }

        return true;
    }

    private function validateSpouseInformationIsDifferentOfPersonalReferenceInformation(Spouse $spouseInformation, array $personalReferenceInformation)
    {
        $personalReferenceName = \strtolower($personalReferenceInformation['name']);
        $personalReferencePhone = $personalReferenceInformation['phone'];

        $spouseName = \strtolower($spouseInformation->name);
        $spousePhone = $spouseInformation->phone;

        if ($personalReferenceName == $spouseName ||
            $personalReferencePhone == $spousePhone) {
            return false;
        }

        return true;
    }
}
