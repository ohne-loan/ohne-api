<?php

namespace App\Services;

use App\Models\UserRegisterStatus;

class UserRegisterStatusService
{
    public function store(int $userId, string $status) : void
    {
        $userRegisterStatus = new UserRegisterStatus();

        $userRegisterStatus->user_id = $userId;
        $userRegisterStatus->status = $status;

        $userRegisterStatus->save();
    }
}
