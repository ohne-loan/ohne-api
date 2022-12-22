<?php


namespace App\Services;


use App\Models\RG;
use App\Models\User;

class RgService
{
	public function store(User $user, array $data)
	{
		$rg = RG::firstOrNew([
            'user_id' => $user->id
		]);

		$rg->fill($data);
		$rg->user()->associate($user);
		$rg->save();

		return $rg;
	}
}