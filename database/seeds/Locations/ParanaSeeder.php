<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class ParanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Paraná',
			'uf' => 'PR'
		]);

		City::insert([
			[
				'ibge_code' => '4100103',
				'name' => 'Abatiá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4100202',
				'name' => 'Adrianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4100301',
				'name' => 'Agudos do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4100400',
				'name' => 'Almirante Tamandaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4100459',
				'name' => 'Altamira do Paraná',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4100509',
				'name' => 'Altônia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4100608',
				'name' => 'Alto Paraná',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4100707',
				'name' => 'Alto Piquiri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4100806',
				'name' => 'Alvorada do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4100905',
				'name' => 'Amaporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4101002',
				'name' => 'Ampére',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4101051',
				'name' => 'Anahy',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4101101',
				'name' => 'Andirá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4101150',
				'name' => 'Ângulo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4101200',
				'name' => 'Antonina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4101309',
				'name' => 'Antônio Olinto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4101408',
				'name' => 'Apucarana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4101507',
				'name' => 'Arapongas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4101606',
				'name' => 'Arapoti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4101655',
				'name' => 'Arapuã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4101705',
				'name' => 'Araruna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4101804',
				'name' => 'Araucária',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4101853',
				'name' => 'Ariranha do Ivaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4101903',
				'name' => 'Assaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4102000',
				'name' => 'Assis Chateaubriand',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4102109',
				'name' => 'Astorga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4102208',
				'name' => 'Atalaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4102307',
				'name' => 'Balsa Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4102406',
				'name' => 'Bandeirantes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4102505',
				'name' => 'Barbosa Ferraz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4102604',
				'name' => 'Barracão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4102703',
				'name' => 'Barra do Jacaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4102752',
				'name' => 'Bela Vista da Caroba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4102802',
				'name' => 'Bela Vista do Paraíso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4102901',
				'name' => 'Bituruna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103008',
				'name' => 'Boa Esperança',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103024',
				'name' => 'Boa Esperança do Iguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103040',
				'name' => 'Boa Ventura de São Roque',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103057',
				'name' => 'Boa Vista da Aparecida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103107',
				'name' => 'Bocaiúva do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103156',
				'name' => 'Bom Jesus do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103206',
				'name' => 'Bom Sucesso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103222',
				'name' => 'Bom Sucesso do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103305',
				'name' => 'Borrazópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103354',
				'name' => 'Braganey',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103370',
				'name' => 'Brasilândia do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103404',
				'name' => 'Cafeara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103453',
				'name' => 'Cafelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103479',
				'name' => 'Cafezal do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103503',
				'name' => 'Califórnia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103602',
				'name' => 'Cambará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103701',
				'name' => 'Cambé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103800',
				'name' => 'Cambira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103909',
				'name' => 'Campina da Lagoa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4103958',
				'name' => 'Campina do Simão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104006',
				'name' => 'Campina Grande do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104055',
				'name' => 'Campo Bonito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104105',
				'name' => 'Campo do Tenente',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104204',
				'name' => 'Campo Largo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104253',
				'name' => 'Campo Magro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104303',
				'name' => 'Campo Mourão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104402',
				'name' => 'Cândido de Abreu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104428',
				'name' => 'Candói',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104451',
				'name' => 'Cantagalo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104501',
				'name' => 'Capanema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104600',
				'name' => 'Capitão Leônidas Marques',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104659',
				'name' => 'Carambeí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104709',
				'name' => 'Carlópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104808',
				'name' => 'Cascavel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4104907',
				'name' => 'Castro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4105003',
				'name' => 'Catanduvas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4105102',
				'name' => 'Centenário do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4105201',
				'name' => 'Cerro Azul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4105300',
				'name' => 'Céu Azul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4105409',
				'name' => 'Chopinzinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4105508',
				'name' => 'Cianorte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4105607',
				'name' => 'Cidade Gaúcha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4105706',
				'name' => 'Clevelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4105805',
				'name' => 'Colombo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4105904',
				'name' => 'Colorado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4106001',
				'name' => 'Congonhinhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4106100',
				'name' => 'Conselheiro Mairinck',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4106209',
				'name' => 'Contenda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4106308',
				'name' => 'Corbélia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4106407',
				'name' => 'Cornélio Procópio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4106456',
				'name' => 'Coronel Domingos Soares',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4106506',
				'name' => 'Coronel Vivida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4106555',
				'name' => 'Corumbataí do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4106571',
				'name' => 'Cruzeiro do Iguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4106605',
				'name' => 'Cruzeiro do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4106704',
				'name' => 'Cruzeiro do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4106803',
				'name' => 'Cruz Machado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4106852',
				'name' => 'Cruzmaltina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4106902',
				'name' => 'Curitiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107009',
				'name' => 'Curiúva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107108',
				'name' => 'Diamante do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107124',
				'name' => 'Diamante do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107157',
				'name' => 'Diamante D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107207',
				'name' => 'Dois Vizinhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107256',
				'name' => 'Douradina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107306',
				'name' => 'Doutor Camargo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107405',
				'name' => 'Enéas Marques',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107504',
				'name' => 'Engenheiro Beltrão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107520',
				'name' => 'Esperança Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107538',
				'name' => 'Entre Rios do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107546',
				'name' => 'Espigão Alto do Iguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107553',
				'name' => 'Farol',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107603',
				'name' => 'Faxinal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107652',
				'name' => 'Fazenda Rio Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107702',
				'name' => 'Fênix',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107736',
				'name' => 'Fernandes Pinheiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107751',
				'name' => 'Figueira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107801',
				'name' => 'Floraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107850',
				'name' => 'Flor da Serra do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4107900',
				'name' => 'Floresta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108007',
				'name' => 'Florestópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108106',
				'name' => 'Flórida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108205',
				'name' => 'Formosa do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108304',
				'name' => 'Foz do Iguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108320',
				'name' => 'Francisco Alves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108403',
				'name' => 'Francisco Beltrão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108452',
				'name' => 'Foz do Jordão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108502',
				'name' => 'General Carneiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108551',
				'name' => 'Godoy Moreira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108601',
				'name' => 'Goioerê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108650',
				'name' => 'Goioxim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108700',
				'name' => 'Grandes Rios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108809',
				'name' => 'Guaíra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108908',
				'name' => 'Guairaçá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4108957',
				'name' => 'Guamiranga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4109005',
				'name' => 'Guapirama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4109104',
				'name' => 'Guaporema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4109203',
				'name' => 'Guaraci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4109302',
				'name' => 'Guaraniaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4109401',
				'name' => 'Guarapuava',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4109500',
				'name' => 'Guaraqueçaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4109609',
				'name' => 'Guaratuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4109658',
				'name' => 'Honório Serpa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4109708',
				'name' => 'Ibaiti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4109757',
				'name' => 'Ibema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4109807',
				'name' => 'Ibiporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4109906',
				'name' => 'Icaraíma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4110003',
				'name' => 'Iguaraçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4110052',
				'name' => 'Iguatu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4110078',
				'name' => 'Imbaú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4110102',
				'name' => 'Imbituva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4110201',
				'name' => 'Inácio Martins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4110300',
				'name' => 'Inajá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4110409',
				'name' => 'Indianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4110508',
				'name' => 'Ipiranga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4110607',
				'name' => 'Iporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4110656',
				'name' => 'Iracema do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4110706',
				'name' => 'Irati',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4110805',
				'name' => 'Iretama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4110904',
				'name' => 'Itaguajé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4110953',
				'name' => 'Itaipulândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4111001',
				'name' => 'Itambaracá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4111100',
				'name' => 'Itambé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4111209',
				'name' => 'Itapejara D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4111258',
				'name' => 'Itaperuçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4111308',
				'name' => 'Itaúna do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4111407',
				'name' => 'Ivaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4111506',
				'name' => 'Ivaiporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4111555',
				'name' => 'Ivaté',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4111605',
				'name' => 'Ivatuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4111704',
				'name' => 'Jaboti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4111803',
				'name' => 'Jacarezinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4111902',
				'name' => 'Jaguapitã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4112009',
				'name' => 'Jaguariaíva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4112108',
				'name' => 'Jandaia do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4112207',
				'name' => 'Janiópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4112306',
				'name' => 'Japira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4112405',
				'name' => 'Japurá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4112504',
				'name' => 'Jardim Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4112603',
				'name' => 'Jardim Olinda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4112702',
				'name' => 'Jataizinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4112751',
				'name' => 'Jesuítas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4112801',
				'name' => 'Joaquim Távora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4112900',
				'name' => 'Jundiaí do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4112959',
				'name' => 'Juranda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113007',
				'name' => 'Jussara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113106',
				'name' => 'Kaloré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113205',
				'name' => 'Lapa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113254',
				'name' => 'Laranjal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113304',
				'name' => 'Laranjeiras do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113403',
				'name' => 'Leópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113429',
				'name' => 'Lidianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113452',
				'name' => 'Lindoeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113502',
				'name' => 'Loanda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113601',
				'name' => 'Lobato',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113700',
				'name' => 'Londrina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113734',
				'name' => 'Luiziana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113759',
				'name' => 'Lunardelli',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113809',
				'name' => 'Lupionópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4113908',
				'name' => 'Mallet',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4114005',
				'name' => 'Mamborê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4114104',
				'name' => 'Mandaguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4114203',
				'name' => 'Mandaguari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4114302',
				'name' => 'Mandirituba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4114351',
				'name' => 'Manfrinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4114401',
				'name' => 'Mangueirinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4114500',
				'name' => 'Manoel Ribas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4114609',
				'name' => 'Marechal Cândido Rondon',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4114708',
				'name' => 'Maria Helena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4114807',
				'name' => 'Marialva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4114906',
				'name' => 'Marilândia do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115002',
				'name' => 'Marilena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115101',
				'name' => 'Mariluz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115200',
				'name' => 'Maringá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115309',
				'name' => 'Mariópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115358',
				'name' => 'Maripá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115408',
				'name' => 'Marmeleiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115457',
				'name' => 'Marquinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115507',
				'name' => 'Marumbi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115606',
				'name' => 'Matelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115705',
				'name' => 'Matinhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115739',
				'name' => 'Mato Rico',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115754',
				'name' => 'Mauá da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115804',
				'name' => 'Medianeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115853',
				'name' => 'Mercedes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4115903',
				'name' => 'Mirador',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4116000',
				'name' => 'Miraselva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4116059',
				'name' => 'Missal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4116109',
				'name' => 'Moreira Sales',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4116208',
				'name' => 'Morretes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4116307',
				'name' => 'Munhoz de Melo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4116406',
				'name' => 'Nossa Senhora das Graças',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4116505',
				'name' => 'Nova Aliança do Ivaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4116604',
				'name' => 'Nova América da Colina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4116703',
				'name' => 'Nova Aurora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4116802',
				'name' => 'Nova Cantu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4116901',
				'name' => 'Nova Esperança',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4116950',
				'name' => 'Nova Esperança do Sudoeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117008',
				'name' => 'Nova Fátima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117057',
				'name' => 'Nova Laranjeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117107',
				'name' => 'Nova Londrina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117206',
				'name' => 'Nova Olímpia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117214',
				'name' => 'Nova Santa Bárbara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117222',
				'name' => 'Nova Santa Rosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117255',
				'name' => 'Nova Prata do Iguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117271',
				'name' => 'Nova Tebas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117297',
				'name' => 'Novo Itacolomi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117305',
				'name' => 'Ortigueira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117404',
				'name' => 'Ourizona',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117453',
				'name' => 'Ouro Verde do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117503',
				'name' => 'Paiçandu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117602',
				'name' => 'Palmas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117701',
				'name' => 'Palmeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117800',
				'name' => 'Palmital',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4117909',
				'name' => 'Palotina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4118006',
				'name' => 'Paraíso do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4118105',
				'name' => 'Paranacity',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4118204',
				'name' => 'Paranaguá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4118303',
				'name' => 'Paranapoema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4118402',
				'name' => 'Paranavaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4118451',
				'name' => 'Pato Bragado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4118501',
				'name' => 'Pato Branco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4118600',
				'name' => 'Paula Freitas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4118709',
				'name' => 'Paulo Frontin',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4118808',
				'name' => 'Peabiru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4118857',
				'name' => 'Perobal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4118907',
				'name' => 'Pérola',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4119004',
				'name' => 'Pérola D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4119103',
				'name' => 'Piên',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4119152',
				'name' => 'Pinhais',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4119202',
				'name' => 'Pinhalão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4119251',
				'name' => 'Pinhal de São Bento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4119301',
				'name' => 'Pinhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4119400',
				'name' => 'Piraí do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4119509',
				'name' => 'Piraquara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4119608',
				'name' => 'Pitanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4119657',
				'name' => 'Pitangueiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4119707',
				'name' => 'Planaltina do Paraná',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4119806',
				'name' => 'Planalto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4119905',
				'name' => 'Ponta Grossa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4119954',
				'name' => 'Pontal do Paraná',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120002',
				'name' => 'Porecatu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120101',
				'name' => 'Porto Amazonas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120150',
				'name' => 'Porto Barreiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120200',
				'name' => 'Porto Rico',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120309',
				'name' => 'Porto Vitória',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120333',
				'name' => 'Prado Ferreira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120358',
				'name' => 'Pranchita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120408',
				'name' => 'Presidente Castelo Branco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120507',
				'name' => 'Primeiro de Maio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120606',
				'name' => 'Prudentópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120655',
				'name' => 'Quarto Centenário',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120705',
				'name' => 'Quatiguá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120804',
				'name' => 'Quatro Barras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120853',
				'name' => 'Quatro Pontes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4120903',
				'name' => 'Quedas do Iguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4121000',
				'name' => 'Querência do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4121109',
				'name' => 'Quinta do Sol',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4121208',
				'name' => 'Quitandinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4121257',
				'name' => 'Ramilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4121307',
				'name' => 'Rancho Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4121356',
				'name' => 'Rancho Alegre D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4121406',
				'name' => 'Realeza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4121505',
				'name' => 'Rebouças',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4121604',
				'name' => 'Renascença',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4121703',
				'name' => 'Reserva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4121752',
				'name' => 'Reserva do Iguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4121802',
				'name' => 'Ribeirão Claro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4121901',
				'name' => 'Ribeirão do Pinhal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4122008',
				'name' => 'Rio Azul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4122107',
				'name' => 'Rio Bom',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4122156',
				'name' => 'Rio Bonito do Iguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4122172',
				'name' => 'Rio Branco do Ivaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4122206',
				'name' => 'Rio Branco do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4122305',
				'name' => 'Rio Negro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4122404',
				'name' => 'Rolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4122503',
				'name' => 'Roncador',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4122602',
				'name' => 'Rondon',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4122651',
				'name' => 'Rosário do Ivaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4122701',
				'name' => 'Sabáudia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4122800',
				'name' => 'Salgado Filho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4122909',
				'name' => 'Salto do Itararé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4123006',
				'name' => 'Salto do Lontra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4123105',
				'name' => 'Santa Amélia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4123204',
				'name' => 'Santa Cecília do Pavão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4123303',
				'name' => 'Santa Cruz de Monte Castelo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4123402',
				'name' => 'Santa Fé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4123501',
				'name' => 'Santa Helena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4123600',
				'name' => 'Santa Inês',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4123709',
				'name' => 'Santa Isabel do Ivaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4123808',
				'name' => 'Santa Izabel do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4123824',
				'name' => 'Santa Lúcia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4123857',
				'name' => 'Santa Maria do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4123907',
				'name' => 'Santa Mariana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4123956',
				'name' => 'Santa Mônica',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4124004',
				'name' => 'Santana do Itararé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4124020',
				'name' => 'Santa Tereza do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4124053',
				'name' => 'Santa Terezinha de Itaipu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4124103',
				'name' => 'Santo Antônio da Platina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4124202',
				'name' => 'Santo Antônio do Caiuá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4124301',
				'name' => 'Santo Antônio do Paraíso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4124400',
				'name' => 'Santo Antônio do Sudoeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4124509',
				'name' => 'Santo Inácio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4124608',
				'name' => 'São Carlos do Ivaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4124707',
				'name' => 'São Jerônimo da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4124806',
				'name' => 'São João',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4124905',
				'name' => 'São João do Caiuá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4125001',
				'name' => 'São João do Ivaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4125100',
				'name' => 'São João do Triunfo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4125209',
				'name' => 'São Jorge D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4125308',
				'name' => 'São Jorge do Ivaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4125357',
				'name' => 'São Jorge do Patrocínio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4125407',
				'name' => 'São José da Boa Vista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4125456',
				'name' => 'São José das Palmeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4125506',
				'name' => 'São José dos Pinhais',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4125555',
				'name' => 'São Manoel do Paraná',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4125605',
				'name' => 'São Mateus do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4125704',
				'name' => 'São Miguel do Iguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4125753',
				'name' => 'São Pedro do Iguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4125803',
				'name' => 'São Pedro do Ivaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4125902',
				'name' => 'São Pedro do Paraná',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126009',
				'name' => 'São Sebastião da Amoreira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126108',
				'name' => 'São Tomé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126207',
				'name' => 'Sapopema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126256',
				'name' => 'Sarandi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126272',
				'name' => 'Saudade do Iguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126306',
				'name' => 'Sengés',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126355',
				'name' => 'Serranópolis do Iguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126405',
				'name' => 'Sertaneja',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126504',
				'name' => 'Sertanópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126603',
				'name' => 'Siqueira Campos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126652',
				'name' => 'Sulina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126678',
				'name' => 'Tamarana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126702',
				'name' => 'Tamboara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126801',
				'name' => 'Tapejara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4126900',
				'name' => 'Tapira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4127007',
				'name' => 'Teixeira Soares',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4127106',
				'name' => 'Telêmaco Borba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4127205',
				'name' => 'Terra Boa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4127304',
				'name' => 'Terra Rica',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4127403',
				'name' => 'Terra Roxa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4127502',
				'name' => 'Tibagi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4127601',
				'name' => 'Tijucas do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4127700',
				'name' => 'Toledo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4127809',
				'name' => 'Tomazina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4127858',
				'name' => 'Três Barras do Paraná',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4127882',
				'name' => 'Tunas do Paraná',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4127908',
				'name' => 'Tuneiras do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4127957',
				'name' => 'Tupãssi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4127965',
				'name' => 'Turvo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4128005',
				'name' => 'Ubiratã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4128104',
				'name' => 'Umuarama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4128203',
				'name' => 'União da Vitória',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4128302',
				'name' => 'Uniflor',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4128401',
				'name' => 'Uraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4128500',
				'name' => 'Wenceslau Braz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4128534',
				'name' => 'Ventania',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4128559',
				'name' => 'Vera Cruz do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4128609',
				'name' => 'Verê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4128625',
				'name' => 'Alto Paraíso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4128633',
				'name' => 'Doutor Ulysses',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4128658',
				'name' => 'Virmond',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4128708',
				'name' => 'Vitorino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4128807',
				'name' => 'Xambrê',
				'state_id' => $state->id
			]
		]);
    }
}
