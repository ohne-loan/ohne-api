<?php


namespace App\Services;


use App\Models\EducationLevel;
use Illuminate\Database\Eloquent\Collection;

class EducationLevelService
{
	public function all(): Collection
	{
		return EducationLevel::all();
	}

	public function find(int $id): EducationLevel
	{
		return EducationLevel::findOrFail($id);
	}
}