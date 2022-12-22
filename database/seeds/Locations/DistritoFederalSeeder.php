<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class DistritoFederalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Distrito Federal',
			'uf' => 'DF'
		]);

		City::insert([
			[
				'ibge_code' => '5300108',
				'name' => 'Brasília',
				'state_id' => $state->id
			]
		]);
    }
}
