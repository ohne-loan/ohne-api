<?php


namespace App\Services;

use App\Models\Spouse;
use App\Models\User;
use App\Models\Phone;
use Illuminate\Database\Eloquent\Collection;
use App\Exceptions\ApiException;

class SpouseService
{
    public function store(User $user, array $data)
    {
        $userInformationIsDifferenteOfSpouseInformation = $this->validateUserInformationIsDifferentOfSpouseInformation($user, $data);

        if (!$userInformationIsDifferenteOfSpouseInformation) {
            throw new ApiException("Ops! os dados do cônjuge não podem ser iguais aos seus.", 400);
        }

        $spouse = Spouse::firstOrNew([
            'id' => $user->personalInfo->spouse_id
        ]);

        $spouse->fill($data);
        $spouse->name = ucwords(strtolower($spouse->name));
        $spouse->save();
        $spouse->marriedTo()->save($user->personalInfo);
    }

    private function validateUserInformationIsDifferentOfSpouseInformation(User $userInformation, array $spouseInformation)
    {
        $userCellPhone = $userInformation->phones()->where('type', Phone::CELLPHONE)->first();
        $userCellPhoneWithAreaCode = $userCellPhone->area_code . $userCellPhone->phone;

        $userName = \strtolower($userInformation->name);
        $userCpf = $userInformation->cpf;
        $userPhone = $userCellPhoneWithAreaCode;

        if (isset($spouseInformation['name'])) {
            $spouseName = \strtolower($spouseInformation['name']);

            if ($spouseName === $userName) {
                return false;
            }
        }

        if (isset($spouseInformation['cpf'])) {
            $spouseCpf = $spouseInformation['cpf'];

            if ($spouseCpf == $userCpf) {
                return false;
            }
        }

        if (isset($spouseInformation['phone'])) {
            $spousePhone = $spouseInformation['phone'];

            if ($spousePhone === $userPhone) {
                return false;
            }
        }

        return true;
    }
}
