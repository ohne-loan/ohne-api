<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Password;

class UserPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()){
            case 'POST' : {
                // Forgot password
                return [
                    'email' => 'required|email',
                ];
            }

            case 'PUT' : {
                // Update password
                return [
                    'old_password'          => 'string',
                    'password'              => ['required', 'string', 'min:8', 'confirmed', new Password() ],
                    'password_confirmation' => 'required|same:password',
                ];
            }

            default:
                return [];
        }
    }
}
