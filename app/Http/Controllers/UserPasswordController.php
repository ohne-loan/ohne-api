<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPasswordRequest;
use App\Services\UserPasswordService;

class UserPasswordController extends Controller
{
    /**
     * @var UserPasswordService
     */
    private $userPasswordService;

    /**
     * UsuarioPasswordController constructor.
     * @param UserPasswordService $userPasswordService
     */
    public function __construct(UserPasswordService $userPasswordService)
    {
        $this->userPasswordService = $userPasswordService;
    }

    /**
     * Send the reset link to a user
     *
     * @param UserPasswordRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendReset(UserPasswordRequest $request)
    {
        return $this->userPasswordService->sendReset($request);
    }

    /**
     * reset the password
     *
     * @param UserPasswordRequest $request
     * @param string $token
     * @return \Illuminate\Http\JsonResponse
     */
    public function reset(UserPasswordRequest $request, string $token)
    {
        return $this->userPasswordService->reset($token, $request->get('password'));
    }

    /**
     * Update the password
     * @param  UserPasswordRequest $request
     * @return \App\Http\Resources\AuthUserResource
     * @throws \App\Exceptions\ApiException
     */
    public function update(UserPasswordRequest $request)
    {
        return $this->userPasswordService->update($request);
    }
}
