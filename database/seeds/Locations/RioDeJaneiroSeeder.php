<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class RioDeJaneiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Rio de Janeiro',
			'uf' => 'RJ'
		]);

		City::insert([
			[
				'ibge_code' => '3300100',
				'name' => 'Angra dos Reis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300159',
				'name' => 'Aperibé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300209',
				'name' => 'Araruama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300225',
				'name' => 'Areal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300233',
				'name' => 'Armação dos Búzios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300258',
				'name' => 'Arraial do Cabo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300308',
				'name' => 'Barra do Piraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300407',
				'name' => 'Barra Mansa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300456',
				'name' => 'Belford Roxo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300506',
				'name' => 'Bom Jardim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300605',
				'name' => 'Bom Jesus do Itabapoana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300704',
				'name' => 'Cabo Frio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300803',
				'name' => 'Cachoeiras de Macacu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300902',
				'name' => 'Cambuci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300936',
				'name' => 'Carapebus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3300951',
				'name' => 'Comendador Levy Gasparian',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3301009',
				'name' => 'Campos dos Goytacazes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3301108',
				'name' => 'Cantagalo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3301157',
				'name' => 'Cardoso Moreira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3301207',
				'name' => 'Carmo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3301306',
				'name' => 'Casimiro de Abreu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3301405',
				'name' => 'Conceição de Macabu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3301504',
				'name' => 'Cordeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3301603',
				'name' => 'Duas Barras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3301702',
				'name' => 'Duque de Caxias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3301801',
				'name' => 'Engenheiro Paulo de Frontin',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3301850',
				'name' => 'Guapimirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3301876',
				'name' => 'Iguaba Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3301900',
				'name' => 'Itaboraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302007',
				'name' => 'Itaguaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302056',
				'name' => 'Italva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302106',
				'name' => 'Itaocara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302205',
				'name' => 'Itaperuna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302254',
				'name' => 'Itatiaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302270',
				'name' => 'Japeri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302304',
				'name' => 'Laje do Muriaé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302403',
				'name' => 'Macaé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302452',
				'name' => 'Macuco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302502',
				'name' => 'Magé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302601',
				'name' => 'Mangaratiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302700',
				'name' => 'Maricá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302809',
				'name' => 'Mendes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302858',
				'name' => 'Mesquita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3302908',
				'name' => 'Miguel Pereira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3303005',
				'name' => 'Miracema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3303104',
				'name' => 'Natividade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3303203',
				'name' => 'Nilópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3303302',
				'name' => 'Niterói',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3303401',
				'name' => 'Nova Friburgo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3303500',
				'name' => 'Nova Iguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3303609',
				'name' => 'Paracambi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3303708',
				'name' => 'Paraíba do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3303807',
				'name' => 'Paraty',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3303856',
				'name' => 'Paty do Alferes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3303906',
				'name' => 'Petrópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3303955',
				'name' => 'Pinheiral',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304003',
				'name' => 'Piraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304102',
				'name' => 'Porciúncula',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304110',
				'name' => 'Porto Real',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304128',
				'name' => 'Quatis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304144',
				'name' => 'Queimados',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304151',
				'name' => 'Quissamã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304201',
				'name' => 'Resende',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304300',
				'name' => 'Rio Bonito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304409',
				'name' => 'Rio Claro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304508',
				'name' => 'Rio das Flores',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304524',
				'name' => 'Rio das Ostras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304557',
				'name' => 'Rio de Janeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304607',
				'name' => 'Santa Maria Madalena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304706',
				'name' => 'Santo Antônio de Pádua',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304755',
				'name' => 'São Francisco de Itabapoana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304805',
				'name' => 'São Fidélis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3304904',
				'name' => 'São Gonçalo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3305000',
				'name' => 'São João da Barra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3305109',
				'name' => 'São João de Meriti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3305133',
				'name' => 'São José de Ubá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3305158',
				'name' => 'São José do Vale do Rio Preto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3305208',
				'name' => 'São Pedro da Aldeia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3305307',
				'name' => 'São Sebastião do Alto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3305406',
				'name' => 'Sapucaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3305505',
				'name' => 'Saquarema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3305554',
				'name' => 'Seropédica',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3305604',
				'name' => 'Silva Jardim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3305703',
				'name' => 'Sumidouro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3305752',
				'name' => 'Tanguá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3305802',
				'name' => 'Teresópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3305901',
				'name' => 'Trajano de Moraes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3306008',
				'name' => 'Três Rios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3306107',
				'name' => 'Valença',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3306156',
				'name' => 'Varre-Sai',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3306206',
				'name' => 'Vassouras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3306305',
				'name' => 'Volta Redonda',
				'state_id' => $state->id
			]
		]);
    }
}
