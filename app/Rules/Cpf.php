<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Cpf implements Rule
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
        if(!empty($value)){
            $c = preg_replace('/\D/', '', $value);

            if (strlen($c) != 11 || preg_match("/^{$c[0]}{11}$/", $c)) {
                return false;
            }

            for ($s = 10, $n = 0, $i = 0; $s >= 2; $n += $c[$i++] * $s--) ;

            if ($c[9] != ((($n %= 11) < 2) ? 0 : 11 - $n)) {
                return false;
            }

            for ($s = 11, $n = 0, $i = 0; $s >= 2; $n += $c[$i++] * $s--) ;

            if ($c[10] != ((($n %= 11) < 2) ? 0 : 11 - $n)) {
                return false;
            }

            return true;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'CPF inválido.';
    }
}
