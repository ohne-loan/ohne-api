<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class MatoGrossoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Mato Grosso',
			'uf' => 'MT'
		]);

		City::insert([
			[
				'ibge_code' => '5100102',
				'name' => 'Acorizal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5100201',
				'name' => 'Água Boa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5100250',
				'name' => 'Alta Floresta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5100300',
				'name' => 'Alto Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5100359',
				'name' => 'Alto Boa Vista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5100409',
				'name' => 'Alto Garças',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5100508',
				'name' => 'Alto Paraguai',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5100607',
				'name' => 'Alto Taquari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5100805',
				'name' => 'Apiacás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5101001',
				'name' => 'Araguaiana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5101209',
				'name' => 'Araguainha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5101258',
				'name' => 'Araputanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5101308',
				'name' => 'Arenápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5101407',
				'name' => 'Aripuanã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5101605',
				'name' => 'Barão de Melgaço',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5101704',
				'name' => 'Barra do Bugres',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5101803',
				'name' => 'Barra do Garças',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5101852',
				'name' => 'Bom Jesus do Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5101902',
				'name' => 'Brasnorte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5102504',
				'name' => 'Cáceres',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5102603',
				'name' => 'Campinápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5102637',
				'name' => 'Campo Novo do Parecis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5102678',
				'name' => 'Campo Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5102686',
				'name' => 'Campos de Júlio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5102694',
				'name' => 'Canabrava do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5102702',
				'name' => 'Canarana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5102793',
				'name' => 'Carlinda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5102850',
				'name' => 'Castanheira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103007',
				'name' => 'Chapada dos Guimarães',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103056',
				'name' => 'Cláudia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103106',
				'name' => 'Cocalinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103205',
				'name' => 'Colíder',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103254',
				'name' => 'Colniza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103304',
				'name' => 'Comodoro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103353',
				'name' => 'Confresa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103361',
				'name' => 'Conquista D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103379',
				'name' => 'Cotriguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103403',
				'name' => 'Cuiabá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103437',
				'name' => 'Curvelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103452',
				'name' => 'Denise',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103502',
				'name' => 'Diamantino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103601',
				'name' => 'Dom Aquino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103700',
				'name' => 'Feliz Natal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103809',
				'name' => 'Figueirópolis D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103858',
				'name' => 'Gaúcha do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103908',
				'name' => 'General Carneiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5103957',
				'name' => 'Glória D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5104104',
				'name' => 'Guarantã do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5104203',
				'name' => 'Guiratinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5104500',
				'name' => 'Indiavaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5104526',
				'name' => 'Ipiranga do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5104542',
				'name' => 'Itanhangá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5104559',
				'name' => 'Itaúba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5104609',
				'name' => 'Itiquira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5104807',
				'name' => 'Jaciara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5104906',
				'name' => 'Jangada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5105002',
				'name' => 'Jauru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5105101',
				'name' => 'Juara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5105150',
				'name' => 'Juína',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5105176',
				'name' => 'Juruena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5105200',
				'name' => 'Juscimeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5105234',
				'name' => 'Lambari D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5105259',
				'name' => 'Lucas do Rio Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5105309',
				'name' => 'Luciara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5105507',
				'name' => 'Vila Bela da Santíssima Trindade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5105580',
				'name' => 'Marcelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5105606',
				'name' => 'Matupá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5105622',
				'name' => 'Mirassol D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5105903',
				'name' => 'Nobres',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106000',
				'name' => 'Nortelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106109',
				'name' => 'Nossa Senhora do Livramento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106158',
				'name' => 'Nova Bandeirantes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106174',
				'name' => 'Nova Nazaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106182',
				'name' => 'Nova Lacerda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106190',
				'name' => 'Nova Santa Helena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106208',
				'name' => 'Nova Brasilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106216',
				'name' => 'Nova Canaã do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106224',
				'name' => 'Nova Mutum',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106232',
				'name' => 'Nova Olímpia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106240',
				'name' => 'Nova Ubiratã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106257',
				'name' => 'Nova Xavantina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106265',
				'name' => 'Novo Mundo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106273',
				'name' => 'Novo Horizonte do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106281',
				'name' => 'Novo São Joaquim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106299',
				'name' => 'Paranaíta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106307',
				'name' => 'Paranatinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106315',
				'name' => 'Novo Santo Antônio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106372',
				'name' => 'Pedra Preta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106422',
				'name' => 'Peixoto de Azevedo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106455',
				'name' => 'Planalto da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106505',
				'name' => 'Poconé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106653',
				'name' => 'Pontal do Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106703',
				'name' => 'Ponte Branca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106752',
				'name' => 'Pontes e Lacerda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106778',
				'name' => 'Porto Alegre do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106802',
				'name' => 'Porto dos Gaúchos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106828',
				'name' => 'Porto Esperidião',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5106851',
				'name' => 'Porto Estrela',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107008',
				'name' => 'Poxoréo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107040',
				'name' => 'Primavera do Leste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107065',
				'name' => 'Querência',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107107',
				'name' => 'São José dos Quatro Marcos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107156',
				'name' => 'Reserva do Cabaçal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107180',
				'name' => 'Ribeirão Cascalheira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107198',
				'name' => 'Ribeirãozinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107206',
				'name' => 'Rio Branco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107248',
				'name' => 'Santa Carmem',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107263',
				'name' => 'Santo Afonso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107297',
				'name' => 'São José do Povo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107305',
				'name' => 'São José do Rio Claro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107354',
				'name' => 'São José do Xingu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107404',
				'name' => 'São Pedro da Cipa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107578',
				'name' => 'Rondolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107602',
				'name' => 'Rondonópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107701',
				'name' => 'Rosário Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107743',
				'name' => 'Santa Cruz do Xingu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107750',
				'name' => 'Salto do Céu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107768',
				'name' => 'Santa Rita do Trivelato',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107776',
				'name' => 'Santa Terezinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107792',
				'name' => 'Santo Antônio do Leste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107800',
				'name' => 'Santo Antônio do Leverger',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107859',
				'name' => 'São Félix do Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107875',
				'name' => 'Sapezal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107883',
				'name' => 'Serra Nova Dourada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107909',
				'name' => 'Sinop',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107925',
				'name' => 'Sorriso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107941',
				'name' => 'Tabaporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5107958',
				'name' => 'Tangará da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5108006',
				'name' => 'Tapurah',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5108055',
				'name' => 'Terra Nova do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5108105',
				'name' => 'Tesouro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5108204',
				'name' => 'Torixoréu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5108303',
				'name' => 'União do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5108352',
				'name' => 'Vale de São Domingos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5108402',
				'name' => 'Várzea Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5108501',
				'name' => 'Vera',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5108600',
				'name' => 'Vila Rica',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5108808',
				'name' => 'Nova Guarita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5108857',
				'name' => 'Nova Marilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5108907',
				'name' => 'Nova Maringá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5108956',
				'name' => 'Nova Monte Verde',
				'state_id' => $state->id
			]
		]);
    }
}
