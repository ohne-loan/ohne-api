<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

interface FinancialProduct
{
	public function user(): BelongsTo;

	public function contract(): BelongsTo;

	public function installments(): HasMany;
}