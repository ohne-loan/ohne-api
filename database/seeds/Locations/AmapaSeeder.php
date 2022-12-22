<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class AmapaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Amapá',
			'uf' => 'AP'
		]);

		City::insert([
			[
				'ibge_code' => '1600055',
				'name' => 'Serra do Navio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600105',
				'name' => 'Amapá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600154',
				'name' => 'Pedra Branca do Amapari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600204',
				'name' => 'Calçoene',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600212',
				'name' => 'Cutias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600238',
				'name' => 'Ferreira Gomes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600253',
				'name' => 'Itaubal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600279',
				'name' => 'Laranjal do Jari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600303',
				'name' => 'Macapá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600402',
				'name' => 'Mazagão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600501',
				'name' => 'Oiapoque',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600535',
				'name' => 'Porto Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600550',
				'name' => 'Pracuúba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600600',
				'name' => 'Santana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600709',
				'name' => 'Tartarugalzinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1600808',
				'name' => 'Vitória do Jari',
				'state_id' => $state->id
			]
		]);
	}
}
