<?php


namespace App\Services;


use App\Models\MaritalStatus;
use Illuminate\Database\Eloquent\Collection;

class MaritalStatusService
{

	public function all() : Collection
	{
		return MaritalStatus::all();
	}

	public function find(int $id) : MaritalStatus
	{
		return MaritalStatus::findOrFail($id);
	}

	public function getStatusToSorocred(int $id)
	{
		$maritalStatus = MaritalStatus::find($id);

		if ($maritalStatus->title == "UNIÃO ESTÁVEL")
			return "OUTROS";

		if ($maritalStatus->title == "VIÚVO")
			return "VIUVO";

		return $maritalStatus->title;
	}

}