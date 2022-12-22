<?php


namespace App\Services;

use App\Models\Phone;
use App\Models\User;

class PhoneService
{
    /**
     * @param User $user
     * @param string $phone
     */
    public function store(User $user, string $phoneString)
    {
        $phone = Phone::parse($phoneString);

        $phone = Phone::firstOrNew([
            'user_id' => $user->id,
            'country_code' => $phone->country_code,
            'area_code' => $phone->area_code,
            'phone' => $phone->phone,
            'type' => $phone->type,
        ]);
        
        $phone->user()->associate($user);
        $phone->save();
        return $phone;
    }
}
