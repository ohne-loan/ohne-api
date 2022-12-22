<?php

namespace App\Services;

use App\Models\Configuration;
use Illuminate\Database\Eloquent\Collection;

class ConfigurationService
{
	public function all(): Collection
	{
		return Configuration::all();
	}

	public function find(string $name): Configuration
	{
		return Configuration::where('name', $name)->first();
    }

    public function update(string $name, string $value)
	{
        Configuration::where('name', $name)->update(['value' => $value]);
    }
}