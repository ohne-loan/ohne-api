<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class SantaCatarinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Santa Catarina',
			'uf' => 'SC'
		]);

		City::insert([
			[
				'ibge_code' => '4200051',
				'name' => 'Abdon Batista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4200101',
				'name' => 'Abelardo Luz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4200200',
				'name' => 'Agrolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4200309',
				'name' => 'Agronômica',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4200408',
				'name' => 'Água Doce',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4200507',
				'name' => 'Águas de Chapecó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4200556',
				'name' => 'Águas Frias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4200606',
				'name' => 'Águas Mornas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4200705',
				'name' => 'Alfredo Wagner',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4200754',
				'name' => 'Alto Bela Vista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4200804',
				'name' => 'Anchieta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4200903',
				'name' => 'Angelina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4201000',
				'name' => 'Anita Garibaldi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4201109',
				'name' => 'Anitápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4201208',
				'name' => 'Antônio Carlos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4201257',
				'name' => 'Apiúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4201273',
				'name' => 'Arabutã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4201307',
				'name' => 'Araquari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4201406',
				'name' => 'Araranguá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4201505',
				'name' => 'Armazém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4201604',
				'name' => 'Arroio Trinta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4201653',
				'name' => 'Arvoredo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4201703',
				'name' => 'Ascurra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4201802',
				'name' => 'Atalanta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4201901',
				'name' => 'Aurora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4201950',
				'name' => 'Balneário Arroio do Silva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202008',
				'name' => 'Balneário Camboriú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202057',
				'name' => 'Balneário Barra do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202073',
				'name' => 'Balneário Gaivota',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202081',
				'name' => 'Bandeirante',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202099',
				'name' => 'Barra Bonita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202107',
				'name' => 'Barra Velha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202131',
				'name' => 'Bela Vista do Toldo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202156',
				'name' => 'Belmonte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202206',
				'name' => 'Benedito Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202305',
				'name' => 'Biguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202404',
				'name' => 'Blumenau',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202438',
				'name' => 'Bocaina do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202453',
				'name' => 'Bombinhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202503',
				'name' => 'Bom Jardim da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202537',
				'name' => 'Bom Jesus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202578',
				'name' => 'Bom Jesus do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202602',
				'name' => 'Bom Retiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202701',
				'name' => 'Botuverá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202800',
				'name' => 'Braço do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202859',
				'name' => 'Braço do Trombudo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202875',
				'name' => 'Brunópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4202909',
				'name' => 'Brusque',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4203006',
				'name' => 'Caçador',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4203105',
				'name' => 'Caibi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4203154',
				'name' => 'Calmon',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4203204',
				'name' => 'Camboriú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4203253',
				'name' => 'Capão Alto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4203303',
				'name' => 'Campo Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4203402',
				'name' => 'Campo Belo do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4203501',
				'name' => 'Campo Erê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4203600',
				'name' => 'Campos Novos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4203709',
				'name' => 'Canelinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4203808',
				'name' => 'Canoinhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4203907',
				'name' => 'Capinzal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4203956',
				'name' => 'Capivari de Baixo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204004',
				'name' => 'Catanduvas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204103',
				'name' => 'Caxambu do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204152',
				'name' => 'Celso Ramos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204178',
				'name' => 'Cerro Negro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204194',
				'name' => 'Chapadão do Lageado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204202',
				'name' => 'Chapecó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204251',
				'name' => 'Cocal do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204301',
				'name' => 'Concórdia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204350',
				'name' => 'Cordilheira Alta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204400',
				'name' => 'Coronel Freitas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204459',
				'name' => 'Coronel Martins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204509',
				'name' => 'Corupá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204558',
				'name' => 'Correia Pinto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204608',
				'name' => 'Criciúma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204707',
				'name' => 'Cunha Porã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204756',
				'name' => 'Cunhataí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204806',
				'name' => 'Curitibanos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4204905',
				'name' => 'Descanso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205001',
				'name' => 'Dionísio Cerqueira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205100',
				'name' => 'Dona Emma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205159',
				'name' => 'Doutor Pedrinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205175',
				'name' => 'Entre Rios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205191',
				'name' => 'Ermo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205209',
				'name' => 'Erval Velho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205308',
				'name' => 'Faxinal dos Guedes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205357',
				'name' => 'Flor do Sertão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205407',
				'name' => 'Florianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205431',
				'name' => 'Formosa do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205456',
				'name' => 'Forquilhinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205506',
				'name' => 'Fraiburgo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205555',
				'name' => 'Frei Rogério',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205605',
				'name' => 'Galvão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205704',
				'name' => 'Garopaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205803',
				'name' => 'Garuva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4205902',
				'name' => 'Gaspar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4206009',
				'name' => 'Governador Celso Ramos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4206108',
				'name' => 'Grão Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4206207',
				'name' => 'Gravatal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4206306',
				'name' => 'Guabiruba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4206405',
				'name' => 'Guaraciaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4206504',
				'name' => 'Guaramirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4206603',
				'name' => 'Guarujá do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4206652',
				'name' => 'Guatambú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4206702',
				'name' => 'Herval D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4206751',
				'name' => 'Ibiam',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4206801',
				'name' => 'Ibicaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4206900',
				'name' => 'Ibirama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207007',
				'name' => 'Içara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207106',
				'name' => 'Ilhota',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207205',
				'name' => 'Imaruí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207304',
				'name' => 'Imbituba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207403',
				'name' => 'Imbuia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207502',
				'name' => 'Indaial',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207577',
				'name' => 'Iomerê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207601',
				'name' => 'Ipira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207650',
				'name' => 'Iporã do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207684',
				'name' => 'Ipuaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207700',
				'name' => 'Ipumirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207759',
				'name' => 'Iraceminha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207809',
				'name' => 'Irani',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207858',
				'name' => 'Irati',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4207908',
				'name' => 'Irineópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4208005',
				'name' => 'Itá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4208104',
				'name' => 'Itaiópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4208203',
				'name' => 'Itajaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4208302',
				'name' => 'Itapema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4208401',
				'name' => 'Itapiranga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4208450',
				'name' => 'Itapoá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4208500',
				'name' => 'Ituporanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4208609',
				'name' => 'Jaborá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4208708',
				'name' => 'Jacinto Machado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4208807',
				'name' => 'Jaguaruna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4208906',
				'name' => 'Jaraguá do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4208955',
				'name' => 'Jardinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4209003',
				'name' => 'Joaçaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4209102',
				'name' => 'Joinville',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4209151',
				'name' => 'José Boiteux',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4209177',
				'name' => 'Jupiá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4209201',
				'name' => 'Lacerdópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4209300',
				'name' => 'Lages',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4209409',
				'name' => 'Laguna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4209458',
				'name' => 'Lajeado Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4209508',
				'name' => 'Laurentino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4209607',
				'name' => 'Lauro Muller',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4209706',
				'name' => 'Lebon Régis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4209805',
				'name' => 'Leoberto Leal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4209854',
				'name' => 'Lindóia do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4209904',
				'name' => 'Lontras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4210001',
				'name' => 'Luiz Alves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4210035',
				'name' => 'Luzerna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4210050',
				'name' => 'Macieira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4210100',
				'name' => 'Mafra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4210209',
				'name' => 'Major Gercino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4210308',
				'name' => 'Major Vieira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4210407',
				'name' => 'Maracajá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4210506',
				'name' => 'Maravilha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4210555',
				'name' => 'Marema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4210605',
				'name' => 'Massaranduba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4210704',
				'name' => 'Matos Costa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4210803',
				'name' => 'Meleiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4210852',
				'name' => 'Mirim Doce',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4210902',
				'name' => 'Modelo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211009',
				'name' => 'Mondaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211058',
				'name' => 'Monte Carlo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211108',
				'name' => 'Monte Castelo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211207',
				'name' => 'Morro da Fumaça',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211256',
				'name' => 'Morro Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211306',
				'name' => 'Navegantes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211405',
				'name' => 'Nova Erechim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211454',
				'name' => 'Nova Itaberaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211504',
				'name' => 'Nova Trento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211603',
				'name' => 'Nova Veneza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211652',
				'name' => 'Novo Horizonte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211702',
				'name' => 'Orleans',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211751',
				'name' => 'Otacílio Costa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211801',
				'name' => 'Ouro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211850',
				'name' => 'Ouro Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211876',
				'name' => 'Paial',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211892',
				'name' => 'Painel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4211900',
				'name' => 'Palhoça',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212007',
				'name' => 'Palma Sola',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212056',
				'name' => 'Palmeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212106',
				'name' => 'Palmitos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212205',
				'name' => 'Papanduva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212239',
				'name' => 'Paraíso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212254',
				'name' => 'Passo de Torres',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212270',
				'name' => 'Passos Maia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212304',
				'name' => 'Paulo Lopes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212403',
				'name' => 'Pedras Grandes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212502',
				'name' => 'Penha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212601',
				'name' => 'Peritiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212650',
				'name' => 'Pescaria Brava',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212700',
				'name' => 'Petrolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212809',
				'name' => 'Balneário Piçarras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4212908',
				'name' => 'Pinhalzinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4213005',
				'name' => 'Pinheiro Preto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4213104',
				'name' => 'Piratuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4213153',
				'name' => 'Planalto Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4213203',
				'name' => 'Pomerode',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4213302',
				'name' => 'Ponte Alta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4213351',
				'name' => 'Ponte Alta do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4213401',
				'name' => 'Ponte Serrada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4213500',
				'name' => 'Porto Belo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4213609',
				'name' => 'Porto União',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4213708',
				'name' => 'Pouso Redondo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4213807',
				'name' => 'Praia Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4213906',
				'name' => 'Presidente Castello Branco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4214003',
				'name' => 'Presidente Getúlio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4214102',
				'name' => 'Presidente Nereu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4214151',
				'name' => 'Princesa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4214201',
				'name' => 'Quilombo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4214300',
				'name' => 'Rancho Queimado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4214409',
				'name' => 'Rio das Antas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4214508',
				'name' => 'Rio do Campo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4214607',
				'name' => 'Rio do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4214706',
				'name' => 'Rio dos Cedros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4214805',
				'name' => 'Rio do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4214904',
				'name' => 'Rio Fortuna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215000',
				'name' => 'Rio Negrinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215059',
				'name' => 'Rio Rufino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215075',
				'name' => 'Riqueza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215109',
				'name' => 'Rodeio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215208',
				'name' => 'Romelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215307',
				'name' => 'Salete',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215356',
				'name' => 'Saltinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215406',
				'name' => 'Salto Veloso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215455',
				'name' => 'Sangão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215505',
				'name' => 'Santa Cecília',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215554',
				'name' => 'Santa Helena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215604',
				'name' => 'Santa Rosa de Lima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215653',
				'name' => 'Santa Rosa do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215679',
				'name' => 'Santa Terezinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215687',
				'name' => 'Santa Terezinha do Progresso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215695',
				'name' => 'Santiago do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215703',
				'name' => 'Santo Amaro da Imperatriz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215752',
				'name' => 'São Bernardino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215802',
				'name' => 'São Bento do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4215901',
				'name' => 'São Bonifácio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4216008',
				'name' => 'São Carlos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4216057',
				'name' => 'São Cristovão do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4216107',
				'name' => 'São Domingos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4216206',
				'name' => 'São Francisco do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4216255',
				'name' => 'São João do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4216305',
				'name' => 'São João Batista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4216354',
				'name' => 'São João do Itaperiú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4216404',
				'name' => 'São João do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4216503',
				'name' => 'São Joaquim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4216602',
				'name' => 'São José',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4216701',
				'name' => 'São José do Cedro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4216800',
				'name' => 'São José do Cerrito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4216909',
				'name' => 'São Lourenço do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217006',
				'name' => 'São Ludgero',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217105',
				'name' => 'São Martinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217154',
				'name' => 'São Miguel da Boa Vista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217204',
				'name' => 'São Miguel do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217253',
				'name' => 'São Pedro de Alcântara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217303',
				'name' => 'Saudades',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217402',
				'name' => 'Schroeder',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217501',
				'name' => 'Seara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217550',
				'name' => 'Serra Alta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217600',
				'name' => 'Siderópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217709',
				'name' => 'Sombrio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217758',
				'name' => 'Sul Brasil',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217808',
				'name' => 'Taió',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217907',
				'name' => 'Tangará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4217956',
				'name' => 'Tigrinhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218004',
				'name' => 'Tijucas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218103',
				'name' => 'Timbé do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218202',
				'name' => 'Timbó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218251',
				'name' => 'Timbó Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218301',
				'name' => 'Três Barras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218350',
				'name' => 'Treviso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218400',
				'name' => 'Treze de Maio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218509',
				'name' => 'Treze Tílias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218608',
				'name' => 'Trombudo Central',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218707',
				'name' => 'Tubarão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218756',
				'name' => 'Tunápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218806',
				'name' => 'Turvo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218855',
				'name' => 'União do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218905',
				'name' => 'Urubici',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4218954',
				'name' => 'Urupema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4219002',
				'name' => 'Urussanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4219101',
				'name' => 'Vargeão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4219150',
				'name' => 'Vargem',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4219176',
				'name' => 'Vargem Bonita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4219200',
				'name' => 'Vidal Ramos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4219309',
				'name' => 'Videira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4219358',
				'name' => 'Vitor Meireles',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4219408',
				'name' => 'Witmarsum',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4219507',
				'name' => 'Xanxerê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4219606',
				'name' => 'Xavantina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4219705',
				'name' => 'Xaxim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4219853',
				'name' => 'Zortéa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4220000',
				'name' => 'Balneário Rincão',
				'state_id' => $state->id
			]
		]);
	}
}
