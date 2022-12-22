<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class FloatRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^-?\d+\.\d+?$/', strval($value));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O valor não é compatível com um número com casas decimais';
    }
}
