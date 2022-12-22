<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class SergipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Sergipe',
			'uf' => 'SE'
		]);

		City::insert([
			[
				'ibge_code' => '2800100',
				'name' => 'Amparo de São Francisco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2800209',
				'name' => 'Aquidabã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2800308',
				'name' => 'Aracaju',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2800407',
				'name' => 'Arauá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2800506',
				'name' => 'Areia Branca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2800605',
				'name' => 'Barra dos Coqueiros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2800670',
				'name' => 'Boquim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2800704',
				'name' => 'Brejo Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2801009',
				'name' => 'Campo do Brito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2801108',
				'name' => 'Canhoba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2801207',
				'name' => 'Canindé de São Francisco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2801306',
				'name' => 'Capela',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2801405',
				'name' => 'Carira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2801504',
				'name' => 'Carmópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2801603',
				'name' => 'Cedro de São João',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2801702',
				'name' => 'Cristinápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2801900',
				'name' => 'Cumbe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2802007',
				'name' => 'Divina Pastora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2802106',
				'name' => 'Estância',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2802205',
				'name' => 'Feira Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2802304',
				'name' => 'Frei Paulo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2802403',
				'name' => 'Gararu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2802502',
				'name' => 'General Maynard',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2802601',
				'name' => 'Gracho Cardoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2802700',
				'name' => 'Ilha das Flores',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2802809',
				'name' => 'Indiaroba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2802908',
				'name' => 'Itabaiana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2803005',
				'name' => 'Itabaianinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2803104',
				'name' => 'Itabi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2803203',
				'name' => 'Itaporanga D\'Ajuda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2803302',
				'name' => 'Japaratuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2803401',
				'name' => 'Japoatã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2803500',
				'name' => 'Lagarto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2803609',
				'name' => 'Laranjeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2803708',
				'name' => 'Macambira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2803807',
				'name' => 'Malhada dos Bois',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2803906',
				'name' => 'Malhador',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2804003',
				'name' => 'Maruim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2804102',
				'name' => 'Moita Bonita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2804201',
				'name' => 'Monte Alegre de Sergipe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2804300',
				'name' => 'Muribeca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2804409',
				'name' => 'Neópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2804458',
				'name' => 'Nossa Senhora Aparecida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2804508',
				'name' => 'Nossa Senhora da Glória',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2804607',
				'name' => 'Nossa Senhora das Dores',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2804706',
				'name' => 'Nossa Senhora de Lourdes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2804805',
				'name' => 'Nossa Senhora do Socorro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2804904',
				'name' => 'Pacatuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2805000',
				'name' => 'Pedra Mole',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2805109',
				'name' => 'Pedrinhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2805208',
				'name' => 'Pinhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2805307',
				'name' => 'Pirambu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2805406',
				'name' => 'Poço Redondo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2805505',
				'name' => 'Poço Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2805604',
				'name' => 'Porto da Folha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2805703',
				'name' => 'Propriá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2805802',
				'name' => 'Riachão do Dantas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2805901',
				'name' => 'Riachuelo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2806008',
				'name' => 'Ribeirópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2806107',
				'name' => 'Rosário do Catete',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2806206',
				'name' => 'Salgado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2806305',
				'name' => 'Santa Luzia do Itanhy',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2806404',
				'name' => 'Santana do São Francisco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2806503',
				'name' => 'Santa Rosa de Lima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2806602',
				'name' => 'Santo Amaro das Brotas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2806701',
				'name' => 'São Cristóvão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2806800',
				'name' => 'São Domingos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2806909',
				'name' => 'São Francisco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2807006',
				'name' => 'São Miguel do Aleixo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2807105',
				'name' => 'Simão Dias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2807204',
				'name' => 'Siriri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2807303',
				'name' => 'Telha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2807402',
				'name' => 'Tobias Barreto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2807501',
				'name' => 'Tomar do Geru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2807600',
				'name' => 'Umbaúba',
				'state_id' => $state->id
			]
		]);
    }
}
