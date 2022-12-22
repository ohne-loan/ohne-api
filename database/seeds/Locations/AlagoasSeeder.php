<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class AlagoasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Alagoas',
			'uf' => 'AL'
		]);

		City::insert([
			[
				'ibge_code' => '2700102',
				'name' => 'Água Branca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2700201',
				'name' => 'Anadia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2700300',
				'name' => 'Arapiraca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2700409',
				'name' => 'Atalaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2700508',
				'name' => 'Barra de Santo Antônio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2700607',
				'name' => 'Barra de São Miguel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2700706',
				'name' => 'Batalha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2700805',
				'name' => 'Belém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2700904',
				'name' => 'Belo Monte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2701001',
				'name' => 'Boca da Mata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2701100',
				'name' => 'Branquinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2701209',
				'name' => 'Cacimbinhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2701308',
				'name' => 'Cajueiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2701357',
				'name' => 'Campestre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2701407',
				'name' => 'Campo Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2701506',
				'name' => 'Campo Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2701605',
				'name' => 'Canapi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2701704',
				'name' => 'Capela',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2701803',
				'name' => 'Carneiros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2701902',
				'name' => 'Chã Preta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2702009',
				'name' => 'Coité do Nóia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2702108',
				'name' => 'Colônia Leopoldina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2702207',
				'name' => 'Coqueiro Seco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2702306',
				'name' => 'Coruripe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2702355',
				'name' => 'Craíbas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2702405',
				'name' => 'Delmiro Gouveia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2702504',
				'name' => 'Dois Riachos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2702553',
				'name' => 'Estrela de Alagoas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2702603',
				'name' => 'Feira Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2702702',
				'name' => 'Feliz Deserto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2702801',
				'name' => 'Flexeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2702900',
				'name' => 'Girau do Ponciano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2703007',
				'name' => 'Ibateguara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2703106',
				'name' => 'Igaci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2703205',
				'name' => 'Igreja Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2703304',
				'name' => 'Inhapi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2703403',
				'name' => 'Jacaré dos Homens',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2703502',
				'name' => 'Jacuípe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2703601',
				'name' => 'Japaratinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2703700',
				'name' => 'Jaramataia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2703759',
				'name' => 'Jequiá da Praia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2703809',
				'name' => 'Joaquim Gomes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2703908',
				'name' => 'Jundiá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2704005',
				'name' => 'Junqueiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2704104',
				'name' => 'Lagoa da Canoa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2704203',
				'name' => 'Limoeiro de Anadia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2704302',
				'name' => 'Maceió',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2704401',
				'name' => 'Major Isidoro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2704500',
				'name' => 'Maragogi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2704609',
				'name' => 'Maravilha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2704708',
				'name' => 'Marechal Deodoro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2704807',
				'name' => 'Maribondo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2704906',
				'name' => 'Mar Vermelho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2705002',
				'name' => 'Mata Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2705101',
				'name' => 'Matriz de Camaragibe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2705200',
				'name' => 'Messias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2705309',
				'name' => 'Minador do Negrão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2705408',
				'name' => 'Monteirópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2705507',
				'name' => 'Murici',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2705606',
				'name' => 'Novo Lino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2705705',
				'name' => 'Olho D\'Água das Flores',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2705804',
				'name' => 'Olho D\'Água do Casado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2705903',
				'name' => 'Olho D\'Água Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2706000',
				'name' => 'Olivença',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2706109',
				'name' => 'Ouro Branco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2706208',
				'name' => 'Palestina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2706307',
				'name' => 'Palmeira dos Índios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2706406',
				'name' => 'Pão de Açúcar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2706422',
				'name' => 'Pariconha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2706448',
				'name' => 'Paripueira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2706505',
				'name' => 'Passo de Camaragibe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2706604',
				'name' => 'Paulo Jacinto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2706703',
				'name' => 'Penedo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2706802',
				'name' => 'Piaçabuçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2706901',
				'name' => 'Pilar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2707008',
				'name' => 'Pindoba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2707107',
				'name' => 'Piranhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2707206',
				'name' => 'Poço das Trincheiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2707305',
				'name' => 'Porto Calvo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2707404',
				'name' => 'Porto de Pedras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2707503',
				'name' => 'Porto Real do Colégio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2707602',
				'name' => 'Quebrangulo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2707701',
				'name' => 'Rio Largo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2707800',
				'name' => 'Roteiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2707909',
				'name' => 'Santa Luzia do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2708006',
				'name' => 'Santana do Ipanema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2708105',
				'name' => 'Santana do Mundaú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2708204',
				'name' => 'São Brás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2708303',
				'name' => 'São José da Laje',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2708402',
				'name' => 'São José da Tapera',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2708501',
				'name' => 'São Luís do Quitunde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2708600',
				'name' => 'São Miguel dos Campos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2708709',
				'name' => 'São Miguel dos Milagres',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2708808',
				'name' => 'São Sebastião',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2708907',
				'name' => 'Satuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2708956',
				'name' => 'Senador Rui Palmeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2709004',
				'name' => 'Tanque D\'Arca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2709103',
				'name' => 'Taquarana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2709152',
				'name' => 'Teotônio Vilela',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2709202',
				'name' => 'Traipu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2709301',
				'name' => 'União dos Palmares',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2709400',
				'name' => 'Viçosa',
				'state_id' => $state->id
			]
		]);
    }
}
