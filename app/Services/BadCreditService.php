<?php


namespace App\Services;

use App\Models\BadCredit;

class BadCreditService
{
    public function store(int $userId, bool $isBadCredit) : void
    {
        $badCredit = new BadCredit();
        
        $badCredit->user_id = $userId;
        $badCredit->bad_credit = $isBadCredit;
        
        $badCredit->saveOrFail();
    }

    public function isBadCreditInLast90Days(int $userId) : bool
    {
        return BadCredit::query()
            ->where('user_id', $userId)
            ->where('bad_credit', true)
            ->whereRaw('DATE_PART(\'day\', now() - created_at) <= 90')
            ->exists();
    }
}
