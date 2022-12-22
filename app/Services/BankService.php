<?php


namespace App\Services;


use App\Models\Bank;
use Illuminate\Database\Eloquent\Collection;

class BankService
{
	public function all(): Collection
	{
		return Bank::all();
	}

	public function find(int $id): Bank
	{
		return Bank::findOrFail($id);
	}
}