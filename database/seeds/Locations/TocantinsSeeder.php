<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class TocantinsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Tocantins',
			'uf' => 'TO'
		]);

		City::insert([
			[
				'ibge_code' => '1700251',
				'name' => 'Abreulândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1700301',
				'name' => 'Aguiarnópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1700350',
				'name' => 'Aliança do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1700400',
				'name' => 'Almas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1700707',
				'name' => 'Alvorada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1701002',
				'name' => 'Ananás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1701051',
				'name' => 'Angico',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1701101',
				'name' => 'Aparecida do Rio Negro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1701309',
				'name' => 'Aragominas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1701903',
				'name' => 'Araguacema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1702000',
				'name' => 'Araguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1702109',
				'name' => 'Araguaína',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1702158',
				'name' => 'Araguanã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1702208',
				'name' => 'Araguatins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1702307',
				'name' => 'Arapoema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1702406',
				'name' => 'Arraias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1702554',
				'name' => 'Augustinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1702703',
				'name' => 'Aurora do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1702901',
				'name' => 'Axixá do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703008',
				'name' => 'Babaçulândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703057',
				'name' => 'Bandeirantes do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703073',
				'name' => 'Barra do Ouro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703107',
				'name' => 'Barrolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703206',
				'name' => 'Bernardo Sayão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703305',
				'name' => 'Bom Jesus do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703602',
				'name' => 'Brasilândia do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703701',
				'name' => 'Brejinho de Nazaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703800',
				'name' => 'Buriti do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703826',
				'name' => 'Cachoeirinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703842',
				'name' => 'Campos Lindos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703867',
				'name' => 'Cariri do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703883',
				'name' => 'Carmolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703891',
				'name' => 'Carrasco Bonito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1703909',
				'name' => 'Caseara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1704105',
				'name' => 'Centenário',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1704600',
				'name' => 'Chapada de Areia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1705102',
				'name' => 'Chapada da Natividade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1705508',
				'name' => 'Colinas do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1705557',
				'name' => 'Combinado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1705607',
				'name' => 'Conceição do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1706001',
				'name' => 'Couto Magalhães',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1706100',
				'name' => 'Cristalândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1706258',
				'name' => 'Crixás do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1706506',
				'name' => 'Darcinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1707009',
				'name' => 'Dianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1707108',
				'name' => 'Divinópolis do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1707207',
				'name' => 'Dois Irmãos do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1707306',
				'name' => 'Dueré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1707405',
				'name' => 'Esperantina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1707553',
				'name' => 'Fátima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1707652',
				'name' => 'Figueirópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1707702',
				'name' => 'Filadélfia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1708205',
				'name' => 'Formoso do Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1708254',
				'name' => 'Fortaleza do Tabocão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1708304',
				'name' => 'Goianorte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1709005',
				'name' => 'Goiatins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1709302',
				'name' => 'Guaraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1709500',
				'name' => 'Gurupi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1709807',
				'name' => 'Ipueiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1710508',
				'name' => 'Itacajá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1710706',
				'name' => 'Itaguatins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1710904',
				'name' => 'Itapiratins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1711100',
				'name' => 'Itaporã do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1711506',
				'name' => 'Jaú do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1711803',
				'name' => 'Juarina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1711902',
				'name' => 'Lagoa da Confusão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1711951',
				'name' => 'Lagoa do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1712009',
				'name' => 'Lajeado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1712157',
				'name' => 'Lavandeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1712405',
				'name' => 'Lizarda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1712454',
				'name' => 'Luzinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1712504',
				'name' => 'Marianópolis do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1712702',
				'name' => 'Mateiros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1712801',
				'name' => 'Maurilândia do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1713205',
				'name' => 'Miracema do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1713304',
				'name' => 'Miranorte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1713601',
				'name' => 'Monte do Carmo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1713700',
				'name' => 'Monte Santo do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1713809',
				'name' => 'Palmeiras do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1713957',
				'name' => 'Muricilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1714203',
				'name' => 'Natividade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1714302',
				'name' => 'Nazaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1714880',
				'name' => 'Nova Olinda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1715002',
				'name' => 'Nova Rosalândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1715101',
				'name' => 'Novo Acordo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1715150',
				'name' => 'Novo Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1715259',
				'name' => 'Novo Jardim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1715507',
				'name' => 'Oliveira de Fátima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1715705',
				'name' => 'Palmeirante',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1715754',
				'name' => 'Palmeirópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1716109',
				'name' => 'Paraíso do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1716208',
				'name' => 'Paranã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1716307',
				'name' => 'Pau D\'Arco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1716505',
				'name' => 'Pedro Afonso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1716604',
				'name' => 'Peixe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1716653',
				'name' => 'Pequizeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1716703',
				'name' => 'Colméia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1717008',
				'name' => 'Pindorama do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1717206',
				'name' => 'Piraquê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1717503',
				'name' => 'Pium',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1717800',
				'name' => 'Ponte Alta do Bom Jesus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1717909',
				'name' => 'Ponte Alta do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718006',
				'name' => 'Porto Alegre do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718204',
				'name' => 'Porto Nacional',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718303',
				'name' => 'Praia Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718402',
				'name' => 'Presidente Kennedy',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718451',
				'name' => 'Pugmil',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718501',
				'name' => 'Recursolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718550',
				'name' => 'Riachinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718659',
				'name' => 'Rio da Conceição',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718709',
				'name' => 'Rio dos Bois',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718758',
				'name' => 'Rio Sono',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718808',
				'name' => 'Sampaio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718840',
				'name' => 'Sandolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718865',
				'name' => 'Santa Fé do Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718881',
				'name' => 'Santa Maria do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718899',
				'name' => 'Santa Rita do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1718907',
				'name' => 'Santa Rosa do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1719004',
				'name' => 'Santa Tereza do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1720002',
				'name' => 'Santa Terezinha do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1720101',
				'name' => 'São Bento do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1720150',
				'name' => 'São Félix do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1720200',
				'name' => 'São Miguel do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1720259',
				'name' => 'São Salvador do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1720309',
				'name' => 'São Sebastião do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1720499',
				'name' => 'São Valério',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1720655',
				'name' => 'Silvanópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1720804',
				'name' => 'Sítio Novo do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1720853',
				'name' => 'Sucupira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1720903',
				'name' => 'Taguatinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1720937',
				'name' => 'Taipas do Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1720978',
				'name' => 'Talismã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1721000',
				'name' => 'Palmas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1721109',
				'name' => 'Tocantínia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1721208',
				'name' => 'Tocantinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1721257',
				'name' => 'Tupirama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1721307',
				'name' => 'Tupiratins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1722081',
				'name' => 'Wanderlândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '1722107',
				'name' => 'Xambioá',
				'state_id' => $state->id
			]
		]);

	}
}
