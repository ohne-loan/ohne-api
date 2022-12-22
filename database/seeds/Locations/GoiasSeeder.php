<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class GoiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Goiás',
			'uf' => 'GO'
		]);

		City::insert([
			[
				'ibge_code' => '5200050',
				'name' => 'Abadia de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5200100',
				'name' => 'Abadiânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5200134',
				'name' => 'Acreúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5200159',
				'name' => 'Adelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5200175',
				'name' => 'Água Fria de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5200209',
				'name' => 'Água Limpa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5200258',
				'name' => 'Águas Lindas de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5200308',
				'name' => 'Alexânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5200506',
				'name' => 'Aloândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5200555',
				'name' => 'Alto Horizonte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5200605',
				'name' => 'Alto Paraíso de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5200803',
				'name' => 'Alvorada do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5200829',
				'name' => 'Amaralina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5200852',
				'name' => 'Americano do Brasil',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5200902',
				'name' => 'Amorinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5201108',
				'name' => 'Anápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5201207',
				'name' => 'Anhanguera',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5201306',
				'name' => 'Anicuns',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5201405',
				'name' => 'Aparecida de Goiânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5201454',
				'name' => 'Aparecida do Rio Doce',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5201504',
				'name' => 'Aporé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5201603',
				'name' => 'Araçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5201702',
				'name' => 'Aragarças',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5201801',
				'name' => 'Aragoiânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5202155',
				'name' => 'Araguapaz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5202353',
				'name' => 'Arenópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5202502',
				'name' => 'Aruanã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5202601',
				'name' => 'Aurilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5202809',
				'name' => 'Avelinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5203104',
				'name' => 'Baliza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5203203',
				'name' => 'Barro Alto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5203302',
				'name' => 'Bela Vista de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5203401',
				'name' => 'Bom Jardim de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5203500',
				'name' => 'Bom Jesus de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5203559',
				'name' => 'Bonfinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5203575',
				'name' => 'Bonópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5203609',
				'name' => 'Brazabrantes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5203807',
				'name' => 'Britânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5203906',
				'name' => 'Buriti Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5203939',
				'name' => 'Buriti de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5203962',
				'name' => 'Buritinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204003',
				'name' => 'Cabeceiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204102',
				'name' => 'Cachoeira Alta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204201',
				'name' => 'Cachoeira de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204250',
				'name' => 'Cachoeira Dourada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204300',
				'name' => 'Caçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204409',
				'name' => 'Caiapônia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204508',
				'name' => 'Caldas Novas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204557',
				'name' => 'Caldazinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204607',
				'name' => 'Campestre de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204656',
				'name' => 'Campinaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204706',
				'name' => 'Campinorte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204805',
				'name' => 'Campo Alegre de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204854',
				'name' => 'Campo Limpo de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204904',
				'name' => 'Campos Belos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5204953',
				'name' => 'Campos Verdes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5205000',
				'name' => 'Carmo do Rio Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5205059',
				'name' => 'Castelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5205109',
				'name' => 'Catalão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5205208',
				'name' => 'Caturaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5205307',
				'name' => 'Cavalcante',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5205406',
				'name' => 'Ceres',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5205455',
				'name' => 'Cezarina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5205471',
				'name' => 'Chapadão do Céu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5205497',
				'name' => 'Cidade Ocidental',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5205513',
				'name' => 'Cocalzinho de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5205521',
				'name' => 'Colinas do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5205703',
				'name' => 'Córrego do Ouro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5205802',
				'name' => 'Corumbá de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5205901',
				'name' => 'Corumbaíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5206206',
				'name' => 'Cristalina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5206305',
				'name' => 'Cristianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5206404',
				'name' => 'Crixás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5206503',
				'name' => 'Cromínia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5206602',
				'name' => 'Cumari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5206701',
				'name' => 'Damianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5206800',
				'name' => 'Damolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5206909',
				'name' => 'Davinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5207105',
				'name' => 'Diorama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5207253',
				'name' => 'Doverlândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5207352',
				'name' => 'Edealina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5207402',
				'name' => 'Edéia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5207501',
				'name' => 'Estrela do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5207535',
				'name' => 'Faina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5207600',
				'name' => 'Fazenda Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5207808',
				'name' => 'Firminópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5207907',
				'name' => 'Flores de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5208004',
				'name' => 'Formosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5208103',
				'name' => 'Formoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5208152',
				'name' => 'Gameleira de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5208301',
				'name' => 'Divinópolis de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5208400',
				'name' => 'Goianápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5208509',
				'name' => 'Goiandira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5208608',
				'name' => 'Goianésia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5208707',
				'name' => 'Goiânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5208806',
				'name' => 'Goianira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5208905',
				'name' => 'Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5209101',
				'name' => 'Goiatuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5209150',
				'name' => 'Gouvelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5209200',
				'name' => 'Guapó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5209291',
				'name' => 'Guaraíta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5209408',
				'name' => 'Guarani de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5209457',
				'name' => 'Guarinos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5209606',
				'name' => 'Heitoraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5209705',
				'name' => 'Hidrolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5209804',
				'name' => 'Hidrolina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5209903',
				'name' => 'Iaciara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5209937',
				'name' => 'Inaciolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5209952',
				'name' => 'Indiara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5210000',
				'name' => 'Inhumas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5210109',
				'name' => 'Ipameri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5210158',
				'name' => 'Ipiranga de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5210208',
				'name' => 'Iporá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5210307',
				'name' => 'Israelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5210406',
				'name' => 'Itaberaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5210562',
				'name' => 'Itaguari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5210604',
				'name' => 'Itaguaru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5210802',
				'name' => 'Itajá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5210901',
				'name' => 'Itapaci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5211008',
				'name' => 'Itapirapuã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5211206',
				'name' => 'Itapuranga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5211305',
				'name' => 'Itarumã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5211404',
				'name' => 'Itauçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5211503',
				'name' => 'Itumbiara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5211602',
				'name' => 'Ivolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5211701',
				'name' => 'Jandaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5211800',
				'name' => 'Jaraguá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5211909',
				'name' => 'Jataí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5212006',
				'name' => 'Jaupaci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5212055',
				'name' => 'Jesúpolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5212105',
				'name' => 'Joviânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5212204',
				'name' => 'Jussara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5212253',
				'name' => 'Lagoa Santa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5212303',
				'name' => 'Leopoldo de Bulhões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5212501',
				'name' => 'Luziânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5212600',
				'name' => 'Mairipotaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5212709',
				'name' => 'Mambaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5212808',
				'name' => 'Mara Rosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5212907',
				'name' => 'Marzagão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5212956',
				'name' => 'Matrinchã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5213004',
				'name' => 'Maurilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5213053',
				'name' => 'Mimoso de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5213087',
				'name' => 'Minaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5213103',
				'name' => 'Mineiros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5213400',
				'name' => 'Moiporá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5213509',
				'name' => 'Monte Alegre de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5213707',
				'name' => 'Montes Claros de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5213756',
				'name' => 'Montividiu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5213772',
				'name' => 'Montividiu do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5213806',
				'name' => 'Morrinhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5213855',
				'name' => 'Morro Agudo de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5213905',
				'name' => 'Mossâmedes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5214002',
				'name' => 'Mozarlândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5214051',
				'name' => 'Mundo Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5214101',
				'name' => 'Mutunópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5214408',
				'name' => 'Nazário',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5214507',
				'name' => 'Nerópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5214606',
				'name' => 'Niquelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5214705',
				'name' => 'Nova América',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5214804',
				'name' => 'Nova Aurora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5214838',
				'name' => 'Nova Crixás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5214861',
				'name' => 'Nova Glória',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5214879',
				'name' => 'Nova Iguaçu de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5214903',
				'name' => 'Nova Roma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5215009',
				'name' => 'Nova Veneza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5215207',
				'name' => 'Novo Brasil',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5215231',
				'name' => 'Novo Gama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5215256',
				'name' => 'Novo Planalto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5215306',
				'name' => 'Orizona',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5215405',
				'name' => 'Ouro Verde de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5215504',
				'name' => 'Ouvidor',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5215603',
				'name' => 'Padre Bernardo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5215652',
				'name' => 'Palestina de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5215702',
				'name' => 'Palmeiras de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5215801',
				'name' => 'Palmelo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5215900',
				'name' => 'Palminópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5216007',
				'name' => 'Panamá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5216304',
				'name' => 'Paranaiguara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5216403',
				'name' => 'Paraúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5216452',
				'name' => 'Perolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5216809',
				'name' => 'Petrolina de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5216908',
				'name' => 'Pilar de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5217104',
				'name' => 'Piracanjuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5217203',
				'name' => 'Piranhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5217302',
				'name' => 'Pirenópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5217401',
				'name' => 'Pires do Rio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5217609',
				'name' => 'Planaltina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5217708',
				'name' => 'Pontalina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5218003',
				'name' => 'Porangatu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5218052',
				'name' => 'Porteirão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5218102',
				'name' => 'Portelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5218300',
				'name' => 'Posse',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5218391',
				'name' => 'Professor Jamil',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5218508',
				'name' => 'Quirinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5218607',
				'name' => 'Rialma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5218706',
				'name' => 'Rianápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5218789',
				'name' => 'Rio Quente',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5218805',
				'name' => 'Rio Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5218904',
				'name' => 'Rubiataba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219001',
				'name' => 'Sanclerlândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219100',
				'name' => 'Santa Bárbara de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219209',
				'name' => 'Santa Cruz de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219258',
				'name' => 'Santa Fé de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219308',
				'name' => 'Santa Helena de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219357',
				'name' => 'Santa Isabel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219407',
				'name' => 'Santa Rita do Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219456',
				'name' => 'Santa Rita do Novo Destino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219506',
				'name' => 'Santa Rosa de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219605',
				'name' => 'Santa Tereza de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219704',
				'name' => 'Santa Terezinha de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219712',
				'name' => 'Santo Antônio da Barra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219738',
				'name' => 'Santo Antônio de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219753',
				'name' => 'Santo Antônio do Descoberto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219803',
				'name' => 'São Domingos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5219902',
				'name' => 'São Francisco de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5220009',
				'name' => 'São João D\'Aliança',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5220058',
				'name' => 'São João da Paraúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5220108',
				'name' => 'São Luís de Montes Belos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5220157',
				'name' => 'São Luíz do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5220207',
				'name' => 'São Miguel do Araguaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5220264',
				'name' => 'São Miguel do Passa Quatro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5220280',
				'name' => 'São Patrício',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5220405',
				'name' => 'São Simão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5220454',
				'name' => 'Senador Canedo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5220504',
				'name' => 'Serranópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5220603',
				'name' => 'Silvânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5220686',
				'name' => 'Simolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5220702',
				'name' => 'Sítio D\'Abadia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5221007',
				'name' => 'Taquaral de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5221080',
				'name' => 'Teresina de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5221197',
				'name' => 'Terezópolis de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5221304',
				'name' => 'Três Ranchos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5221403',
				'name' => 'Trindade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5221452',
				'name' => 'Trombas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5221502',
				'name' => 'Turvânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5221551',
				'name' => 'Turvelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5221577',
				'name' => 'Uirapuru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5221601',
				'name' => 'Uruaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5221700',
				'name' => 'Uruana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5221809',
				'name' => 'Urutaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5221858',
				'name' => 'Valparaíso de Goiás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5221908',
				'name' => 'Varjão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5222005',
				'name' => 'Vianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5222054',
				'name' => 'Vicentinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5222203',
				'name' => 'Vila Boa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5222302',
				'name' => 'Vila Propício',
				'state_id' => $state->id
			]
		]);
    }
}
