<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class RoraimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Roraima',
			'uf' => 'RR'
		]);

		City::insert([
			[
				'ibge_code' => '1400027',
				'name' => 'Amajari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1400050',
				'name' => 'Alto Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1400100',
				'name' => 'Boa Vista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1400159',
				'name' => 'Bonfim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1400175',
				'name' => 'Cantá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1400209',
				'name' => 'Caracaraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1400233',
				'name' => 'Caroebe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1400282',
				'name' => 'Iracema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1400308',
				'name' => 'Mucajaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1400407',
				'name' => 'Normandia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1400456',
				'name' => 'Pacaraima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1400472',
				'name' => 'Rorainópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1400506',
				'name' => 'São João da Baliza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1400605',
				'name' => 'São Luiz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1400704',
				'name' => 'Uiramutã',
				'state_id' => $state->id
			]
		]);
    }
}
