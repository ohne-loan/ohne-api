<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class RondoniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Rondônia',
			'uf' => 'RO'
		]);

		City::insert([
			[
				'ibge_code' => '1100015',
				'name' => 'Alta Floresta D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100023',
				'name' => 'Ariquemes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100031',
				'name' => 'Cabixi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100049',
				'name' => 'Cacoal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100056',
				'name' => 'Cerejeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100064',
				'name' => 'Colorado do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100072',
				'name' => 'Corumbiara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100080',
				'name' => 'Costa Marques',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100098',
				'name' => 'Espigão D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100106',
				'name' => 'Guajará-Mirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100114',
				'name' => 'Jaru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100122',
				'name' => 'Ji-Paraná',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100130',
				'name' => 'Machadinho D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100148',
				'name' => 'Nova Brasilândia D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100155',
				'name' => 'Ouro Preto do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100189',
				'name' => 'Pimenta Bueno',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100205',
				'name' => 'Porto Velho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100254',
				'name' => 'Presidente Médici',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100262',
				'name' => 'Rio Crespo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100288',
				'name' => 'Rolim de Moura',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100296',
				'name' => 'Santa Luzia D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100304',
				'name' => 'Vilhena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100320',
				'name' => 'São Miguel do Guaporé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100338',
				'name' => 'Nova Mamoré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100346',
				'name' => 'Alvorada D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100379',
				'name' => 'Alto Alegre dos Parecis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100403',
				'name' => 'Alto Paraíso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100452',
				'name' => 'Buritis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100502',
				'name' => 'Novo Horizonte do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100601',
				'name' => 'Cacaulândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100700',
				'name' => 'Campo Novo de Rondônia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100809',
				'name' => 'Candeias do Jamari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100908',
				'name' => 'Castanheiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100924',
				'name' => 'Chupinguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1100940',
				'name' => 'Cujubim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101005',
				'name' => 'Governador Jorge Teixeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101104',
				'name' => 'Itapuã do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101203',
				'name' => 'Ministro Andreazza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101302',
				'name' => 'Mirante da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101401',
				'name' => 'Monte Negro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101435',
				'name' => 'Nova União',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101450',
				'name' => 'Parecis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101468',
				'name' => 'Pimenteiras do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101476',
				'name' => 'Primavera de Rondônia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101484',
				'name' => 'São Felipe D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101492',
				'name' => 'São Francisco do Guaporé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101500',
				'name' => 'Seringueiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101559',
				'name' => 'Teixeirópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101609',
				'name' => 'Theobroma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101708',
				'name' => 'Urupá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101757',
				'name' => 'Vale do Anari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1101807',
				'name' => 'Vale do Paraíso',
				'state_id' => $state->id
			]
		]);
    }
}
