<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Password implements Rule
{
    const REGEX = '/^(?=.*[a-z|A-Z])(?=.*\d)(?=.*[!$#@%\/\'\\()*+\-.]).+$/';

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match(self::REGEX, strval($value));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Senha não atende a todos os requisitos.';
    }
}
