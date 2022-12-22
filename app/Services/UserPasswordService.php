<?php

namespace App\Services;

use App\Exceptions\ApiException;
use App\Http\Resources\AuthUserResource;
use App\Jobs\MailProcess;
use App\Mail\ResetPassword;
use App\Mail\UpdatePassword;
use App\Models\PasswordReset;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserPasswordRequest;

class UserPasswordService
{

    /**
     * Update the user password
     * @param $data
     * @return AuthUserResource
     * @throws ApiException
     */
    public function update(UserPasswordRequest $request)
    {
        $user = Auth::user();

        if (!Hash::check($request['old_password'], $user->password)) {
            return response()->json([
                'message' => __('passwords.old_password_incorrect')
            ], 422);
        }

        $user->password = $request['password'];
        $user->password_change_date = Carbon::now();
        $user->save();

        return new AuthUserResource($user);
    }

    /**
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     * @throws ApiException
     */
    public function sendReset($data)
    {
        if ( ! User::where('email', $data['email'])->count() ) {
            throw new ApiException(__('passwords.user'), 404);
        }

        try {
            $user = User::where('email', $data['email'])->first();

            $resetToken = $this->createPasswordToken($user);

            $urlApp = env('APP_URL') . '/password-recovery?token=' . $resetToken;

            $mail = new ResetPassword($user, $urlApp);
            Mail::to($user->email)->send($mail);

            return response()->json([
                'message' => __('passwords.sent')
            ]);

        } catch (\Exception $e) {
            throw new ApiException($e->getMessage(), 422);
        }
    }

    /**
     * @param $token
     * @param $password
     * @return \Illuminate\Http\JsonResponse
     * @throws ApiException
     */
    public function reset($token, $password)
    {

        try {

            $passReset = PasswordReset::with('user')->where('token', $token)
                ->first();

            if ( is_null($passReset) ) {
                throw new ApiException(__('passwords.token'), 403);
            }

            if ( $passReset->expires_at < Carbon::now()->toDateTimeString() ) {
                throw new ApiException(__('passwords.expired'), 403);
            }

            $passReset->user->password = $password;
            $passReset->user->save();
            $passReset->delete();

            $user = User::find($passReset->user_id);
            $user->password_change_date = Carbon::now();
            $user->save();

            $mail = new UpdatePassword($passReset->user);
            Mail::to($user->email)->send($mail);

            return response()->json([
                'message' => __('passwords.reset')
            ]);

        } catch (\Exception $e) {
            throw new ApiException($e->getMessage(), 422);
        }
    }

    private function createPasswordToken($user)
    {
        // Invalida outros tokens
        PasswordReset::where('email', $user->email)
            ->delete();

        $token = str_random(32);

        $resetToken = new PasswordReset();
        $resetToken->email = $user->email;
        $resetToken->user_id = $user->id;
        $resetToken->token = $token;
        $resetToken->expires_at = Carbon::now()->addHour()->toDateTimeString();
        $resetToken->save();

        return $token;
    }
}