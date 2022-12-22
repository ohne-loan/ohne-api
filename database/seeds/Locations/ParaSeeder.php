<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class ParaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Pará',
			'uf' => 'PA'
		]);

		City::insert([
			[
				'ibge_code' => '1500107',
				'name' => 'Abaetetuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1500131',
				'name' => 'Abel Figueiredo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1500206',
				'name' => 'Acará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1500305',
				'name' => 'Afuá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1500347',
				'name' => 'Água Azul do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1500404',
				'name' => 'Alenquer',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1500503',
				'name' => 'Almeirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1500602',
				'name' => 'Altamira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1500701',
				'name' => 'Anajás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1500800',
				'name' => 'Ananindeua',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1500859',
				'name' => 'Anapu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1500909',
				'name' => 'Augusto Corrêa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1500958',
				'name' => 'Aurora do Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501006',
				'name' => 'Aveiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501105',
				'name' => 'Bagre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501204',
				'name' => 'Baião',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501253',
				'name' => 'Bannach',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501303',
				'name' => 'Barcarena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501402',
				'name' => 'Belém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501451',
				'name' => 'Belterra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501501',
				'name' => 'Benevides',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501576',
				'name' => 'Bom Jesus do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501600',
				'name' => 'Bonito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501709',
				'name' => 'Bragança',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501725',
				'name' => 'Brasil Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501758',
				'name' => 'Brejo Grande do Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501782',
				'name' => 'Breu Branco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501808',
				'name' => 'Breves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501907',
				'name' => 'Bujaru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1501956',
				'name' => 'Cachoeira do Piriá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502004',
				'name' => 'Cachoeira do Arari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502103',
				'name' => 'Cametá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502152',
				'name' => 'Canaã dos Carajás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502202',
				'name' => 'Capanema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502301',
				'name' => 'Capitão Poço',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502400',
				'name' => 'Castanhal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502509',
				'name' => 'Chaves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502608',
				'name' => 'Colares',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502707',
				'name' => 'Conceição do Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502756',
				'name' => 'Concórdia do Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502764',
				'name' => 'Cumaru do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502772',
				'name' => 'Curionópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502806',
				'name' => 'Curralinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502855',
				'name' => 'Curuá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502905',
				'name' => 'Curuçá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502939',
				'name' => 'Dom Eliseu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1502954',
				'name' => 'Eldorado dos Carajás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503002',
				'name' => 'Faro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503044',
				'name' => 'Floresta do Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503077',
				'name' => 'Garrafão do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503093',
				'name' => 'Goianésia do Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503101',
				'name' => 'Gurupá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503200',
				'name' => 'Igarapé-Açu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503309',
				'name' => 'Igarapé-Miri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503408',
				'name' => 'Inhangapi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503457',
				'name' => 'Ipixuna do Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503507',
				'name' => 'Irituia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503606',
				'name' => 'Itaituba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503705',
				'name' => 'Itupiranga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503754',
				'name' => 'Jacareacanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503804',
				'name' => 'Jacundá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1503903',
				'name' => 'Juruti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504000',
				'name' => 'Limoeiro do Ajuru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504059',
				'name' => 'Mãe do Rio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504109',
				'name' => 'Magalhães Barata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504208',
				'name' => 'Marabá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504307',
				'name' => 'Maracanã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504406',
				'name' => 'Marapanim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504422',
				'name' => 'Marituba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504455',
				'name' => 'Medicilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504505',
				'name' => 'Melgaço',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504604',
				'name' => 'Mocajuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504703',
				'name' => 'Moju',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504752',
				'name' => 'Mojuí dos Campos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504802',
				'name' => 'Monte Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504901',
				'name' => 'Muaná',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504950',
				'name' => 'Nova Esperança do Piriá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1504976',
				'name' => 'Nova Ipixuna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505007',
				'name' => 'Nova Timboteua',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505031',
				'name' => 'Novo Progresso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505064',
				'name' => 'Novo Repartimento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505106',
				'name' => 'Óbidos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505205',
				'name' => 'Oeiras do Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505304',
				'name' => 'Oriximiná',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505403',
				'name' => 'Ourém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505437',
				'name' => 'Ourilândia do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505486',
				'name' => 'Pacajá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505494',
				'name' => 'Palestina do Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505502',
				'name' => 'Paragominas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505536',
				'name' => 'Parauapebas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505551',
				'name' => 'Pau D\'Arco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505601',
				'name' => 'Peixe-Boi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505635',
				'name' => 'Piçarra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505650',
				'name' => 'Placas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505700',
				'name' => 'Ponta de Pedras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505809',
				'name' => 'Portel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1505908',
				'name' => 'Porto de Moz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506005',
				'name' => 'Prainha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506104',
				'name' => 'Primavera',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506112',
				'name' => 'Quatipuru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506138',
				'name' => 'Redenção',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506161',
				'name' => 'Rio Maria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506187',
				'name' => 'Rondon do Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506195',
				'name' => 'Rurópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506203',
				'name' => 'Salinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506302',
				'name' => 'Salvaterra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506351',
				'name' => 'Santa Bárbara do Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506401',
				'name' => 'Santa Cruz do Arari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506500',
				'name' => 'Santa Isabel do Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506559',
				'name' => 'Santa Luzia do Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506583',
				'name' => 'Santa Maria das Barreiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506609',
				'name' => 'Santa Maria do Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506708',
				'name' => 'Santana do Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506807',
				'name' => 'Santarém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1506906',
				'name' => 'Santarém Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507003',
				'name' => 'Santo Antônio do Tauá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507102',
				'name' => 'São Caetano de Odivelas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507151',
				'name' => 'São Domingos do Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507201',
				'name' => 'São Domingos do Capim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507300',
				'name' => 'São Félix do Xingu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507409',
				'name' => 'São Francisco do Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507458',
				'name' => 'São Geraldo do Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507466',
				'name' => 'São João da Ponta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507474',
				'name' => 'São João de Pirabas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507508',
				'name' => 'São João do Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507607',
				'name' => 'São Miguel do Guamá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507706',
				'name' => 'São Sebastião da Boa Vista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507755',
				'name' => 'Sapucaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507805',
				'name' => 'Senador José Porfírio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507904',
				'name' => 'Soure',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507953',
				'name' => 'Tailândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507961',
				'name' => 'Terra Alta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1507979',
				'name' => 'Terra Santa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1508001',
				'name' => 'Tomé-Açu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1508035',
				'name' => 'Tracuateua',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1508050',
				'name' => 'Trairão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1508084',
				'name' => 'Tucumã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1508100',
				'name' => 'Tucuruí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1508126',
				'name' => 'Ulianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1508159',
				'name' => 'Uruará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1508209',
				'name' => 'Vigia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1508308',
				'name' => 'Viseu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1508357',
				'name' => 'Vitória do Xingu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1508407',
				'name' => 'Xinguara',
				'state_id' => $state->id
			]
		]);
    }
}
