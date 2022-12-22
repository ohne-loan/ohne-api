<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class AcreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Acre',
			'uf' => 'AC'
		]);

		City::insert([
			[
				'ibge_code' => '1200013',
				'name' => 'Acrelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200054',
				'name' => 'Assis Brasil',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200104',
				'name' => 'Brasiléia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200138',
				'name' => 'Bujari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200179',
				'name' => 'Capixaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200203',
				'name' => 'Cruzeiro do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200252',
				'name' => 'Epitaciolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200302',
				'name' => 'Feijó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200328',
				'name' => 'Jordão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200336',
				'name' => 'Mâncio Lima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200344',
				'name' => 'Manoel Urbano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200351',
				'name' => 'Marechal Thaumaturgo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200385',
				'name' => 'Plácido de Castro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200393',
				'name' => 'Porto Walter',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200401',
				'name' => 'Rio Branco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200427',
				'name' => 'Rodrigues Alves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200435',
				'name' => 'Santa Rosa do Purus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200450',
				'name' => 'Senador Guiomard',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200500',
				'name' => 'Sena Madureira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200609',
				'name' => 'Tarauacá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200708',
				'name' => 'Xapuri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1200807',
				'name' => 'Porto Acre',
				'state_id' => $state->id
			]
		]);
    }
}
