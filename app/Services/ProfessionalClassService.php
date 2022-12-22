<?php

namespace App\Services;

use App\Models\ProfessionalClass;
use Illuminate\Support\Collection;

class ProfessionalClassService
{

    public function all(): Collection
    {
        return ProfessionalClass::all();
    }

    public function find(int $id): ProfessionalClass
    {
        return ProfessionalClass::findOrFail($id);
    }

}