<?php

namespace App\Services;

use App\Models\LoanTag;

class LoanTagService
{
    public function store(int $loanId, string $tag) : void
    {
        $loanTag = LoanTag::firstOrNew([
            'loan_id' => $loanId
        ]);

        $loanTag->loan_id = $loanId;
        $loanTag->tag = $tag;

        if ($loanTag->created_at === null) {
            $loanTag->created_at = now();
        } else {
            $loanTag->updated_at = now();
        }

        $loanTag->save();
    }

    public function update(int $loanId, string $tag) : void
    {
        $loanTag = LoanTag::where('loan_id', $loanId)->first();
        $loanTag->tag = $tag;

        if ($loanTag->created_at === null) {
            $loanTag->created_at = now();
        } else {
            $loanTag->updated_at = now();
        }

        $loanTag->save();
    }
}
