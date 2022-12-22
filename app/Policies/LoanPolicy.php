<?php

namespace App\Policies;

use App\Models\Loan;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class LoanPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show(User $user, Loan $loan)
    {
        if($loan->status == Loan::PENDING && $user->hasPermissionTo('view_pending_loans')
            || $loan->status == Loan::SOROCRED_PENDING && $user->hasPermissionTo('view_pending_loans')
            || $loan->status == Loan::WAIT_SIGN && $user->hasPermissionTo('view_wait-sign_loans')
            || $loan->status == Loan::IN_PROGRESS && $user->hasPermissionTo('view_progress_loans')
            || $loan->status == Loan::FINISHED && $user->hasPermissionTo('view_finished_loans')
            || $loan->status == Loan::REJECTED && $user->hasPermissionTo('view_rejected_loans')
            || $loan->status == Loan::CANC_BY_CLIENT && $user->hasPermissionTo('view_rejected_loans')
            || $loan->status == Loan::CANC_CONTR_NSENT && $user->hasPermissionTo('view_rejected_loans')
        ){
            return true;
        }

        return false;
    }
}
