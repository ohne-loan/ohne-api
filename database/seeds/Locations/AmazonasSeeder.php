<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class AmazonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Amazonas',
			'uf' => 'AM'
		]);

		City::insert([
			[
				'ibge_code' => '1300029',
				'name' => 'Alvarães',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300060',
				'name' => 'Amaturá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300086',
				'name' => 'Anamã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300102',
				'name' => 'Anori',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300144',
				'name' => 'Apuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300201',
				'name' => 'Atalaia do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300300',
				'name' => 'Autazes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300409',
				'name' => 'Barcelos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300508',
				'name' => 'Barreirinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300607',
				'name' => 'Benjamin Constant',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300631',
				'name' => 'Beruri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300680',
				'name' => 'Boa Vista do Ramos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300706',
				'name' => 'Boca do Acre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300805',
				'name' => 'Borba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300839',
				'name' => 'Caapiranga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1300904',
				'name' => 'Canutama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1301001',
				'name' => 'Carauari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1301100',
				'name' => 'Careiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1301159',
				'name' => 'Careiro da Várzea',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1301209',
				'name' => 'Coari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1301308',
				'name' => 'Codajás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1301407',
				'name' => 'Eirunepé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1301506',
				'name' => 'Envira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1301605',
				'name' => 'Fonte Boa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1301654',
				'name' => 'Guajará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1301704',
				'name' => 'Humaitá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1301803',
				'name' => 'Ipixuna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1301852',
				'name' => 'Iranduba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1301902',
				'name' => 'Itacoatiara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1301951',
				'name' => 'Itamarati',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1302009',
				'name' => 'Itapiranga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1302108',
				'name' => 'Japurá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1302207',
				'name' => 'Juruá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1302306',
				'name' => 'Jutaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1302405',
				'name' => 'Lábrea',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1302504',
				'name' => 'Manacapuru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1302553',
				'name' => 'Manaquiri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1302603',
				'name' => 'Manaus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1302702',
				'name' => 'Manicoré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1302801',
				'name' => 'Maraã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1302900',
				'name' => 'Maués',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1303007',
				'name' => 'Nhamundá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1303106',
				'name' => 'Nova Olinda do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1303205',
				'name' => 'Novo Airão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1303304',
				'name' => 'Novo Aripuanã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1303403',
				'name' => 'Parintins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1303502',
				'name' => 'Pauini',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1303536',
				'name' => 'Presidente Figueiredo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1303569',
				'name' => 'Rio Preto da Eva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1303601',
				'name' => 'Santa Isabel do Rio Negro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1303700',
				'name' => 'Santo Antônio do Içá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1303809',
				'name' => 'São Gabriel da Cachoeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1303908',
				'name' => 'São Paulo de Olivença',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1303957',
				'name' => 'São Sebastião do Uatumã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1304005',
				'name' => 'Silves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1304062',
				'name' => 'Tabatinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1304104',
				'name' => 'Tapauá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1304203',
				'name' => 'Tefé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1304237',
				'name' => 'Tonantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1304260',
				'name' => 'Uarini',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1304302',
				'name' => 'Urucará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1304401',
				'name' => 'Urucurituba',
				'state_id' => $state->id
			]
		]);
    }
}
