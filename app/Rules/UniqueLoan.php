<?php

namespace App\Rules;

use App\Models\Loan;
use Illuminate\Contracts\Validation\Rule;

class UniqueLoan implements Rule
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
        $loans = Loan::join('users', function ($join) use ($value){
            $join->on('users.id', 'loans.user_id')
                ->where('users.cpf', $value)
                ->whereNotIn('loans.status', [ Loan::REJECTED, Loan::FINISHED, Loan::PROCESSING, Loan::USER_REGISTERING ]);
        })->count();

        if ($loans > 0) {
            return false;
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
        return 'Você só pode ter um único empréstimo ativo.';
    }
}
