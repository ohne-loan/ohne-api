<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class MinasGeraisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Minas Gerais',
			'uf' => 'MG'
		]);

		City::insert([
			[
				'ibge_code' => '3100104',
				'name' => 'Abadia dos Dourados',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3100203',
				'name' => 'Abaeté',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3100302',
				'name' => 'Abre Campo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3100401',
				'name' => 'Acaiaca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3100500',
				'name' => 'Açucena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3100609',
				'name' => 'Água Boa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3100708',
				'name' => 'Água Comprida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3100807',
				'name' => 'Aguanil',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3100906',
				'name' => 'Águas Formosas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3101003',
				'name' => 'Águas Vermelhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3101102',
				'name' => 'Aimorés',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3101201',
				'name' => 'Aiuruoca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3101300',
				'name' => 'Alagoa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3101409',
				'name' => 'Albertina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3101508',
				'name' => 'Além Paraíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3101607',
				'name' => 'Alfenas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3101631',
				'name' => 'Alfredo Vasconcelos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3101706',
				'name' => 'Almenara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3101805',
				'name' => 'Alpercata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3101904',
				'name' => 'Alpinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3102001',
				'name' => 'Alterosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3102050',
				'name' => 'Alto Caparaó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3102100',
				'name' => 'Alto Rio Doce',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3102209',
				'name' => 'Alvarenga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3102308',
				'name' => 'Alvinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3102407',
				'name' => 'Alvorada de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3102506',
				'name' => 'Amparo do Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3102605',
				'name' => 'Andradas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3102704',
				'name' => 'Cachoeira de Pajeú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3102803',
				'name' => 'Andrelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3102852',
				'name' => 'Angelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3102902',
				'name' => 'Antônio Carlos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3103009',
				'name' => 'Antônio Dias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3103108',
				'name' => 'Antônio Prado de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3103207',
				'name' => 'Araçaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3103306',
				'name' => 'Aracitaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3103405',
				'name' => 'Araçuaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3103504',
				'name' => 'Araguari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3103603',
				'name' => 'Arantina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3103702',
				'name' => 'Araponga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3103751',
				'name' => 'Araporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3103801',
				'name' => 'Arapuá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3103900',
				'name' => 'Araújos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3104007',
				'name' => 'Araxá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3104106',
				'name' => 'Arceburgo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3104205',
				'name' => 'Arcos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3104304',
				'name' => 'Areado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3104403',
				'name' => 'Argirita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3104452',
				'name' => 'Aricanduva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3104502',
				'name' => 'Arinos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3104601',
				'name' => 'Astolfo Dutra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3104700',
				'name' => 'Ataléia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3104809',
				'name' => 'Augusto de Lima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3104908',
				'name' => 'Baependi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3105004',
				'name' => 'Baldim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3105103',
				'name' => 'Bambuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3105202',
				'name' => 'Bandeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3105301',
				'name' => 'Bandeira do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3105400',
				'name' => 'Barão de Cocais',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3105509',
				'name' => 'Barão de Monte Alto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3105608',
				'name' => 'Barbacena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3105707',
				'name' => 'Barra Longa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3105905',
				'name' => 'Barroso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3106002',
				'name' => 'Bela Vista de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3106101',
				'name' => 'Belmiro Braga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3106200',
				'name' => 'Belo Horizonte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3106309',
				'name' => 'Belo Oriente',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3106408',
				'name' => 'Belo Vale',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3106507',
				'name' => 'Berilo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3106606',
				'name' => 'Bertópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3106655',
				'name' => 'Berizal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3106705',
				'name' => 'Betim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3106804',
				'name' => 'Bias Fortes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3106903',
				'name' => 'Bicas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3107000',
				'name' => 'Biquinhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3107109',
				'name' => 'Boa Esperança',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3107208',
				'name' => 'Bocaina de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3107307',
				'name' => 'Bocaiúva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3107406',
				'name' => 'Bom Despacho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3107505',
				'name' => 'Bom Jardim de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3107604',
				'name' => 'Bom Jesus da Penha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3107703',
				'name' => 'Bom Jesus do Amparo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3107802',
				'name' => 'Bom Jesus do Galho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3107901',
				'name' => 'Bom Repouso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3108008',
				'name' => 'Bom Sucesso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3108107',
				'name' => 'Bonfim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3108206',
				'name' => 'Bonfinópolis de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3108255',
				'name' => 'Bonito de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3108305',
				'name' => 'Borda da Mata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3108404',
				'name' => 'Botelhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3108503',
				'name' => 'Botumirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3108552',
				'name' => 'Brasilândia de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3108602',
				'name' => 'Brasília de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3108701',
				'name' => 'Brás Pires',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3108800',
				'name' => 'Braúnas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3108909',
				'name' => 'Brazópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3109006',
				'name' => 'Brumadinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3109105',
				'name' => 'Bueno Brandão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3109204',
				'name' => 'Buenópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3109253',
				'name' => 'Bugre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3109303',
				'name' => 'Buritis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3109402',
				'name' => 'Buritizeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3109451',
				'name' => 'Cabeceira Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3109501',
				'name' => 'Cabo Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3109600',
				'name' => 'Cachoeira da Prata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3109709',
				'name' => 'Cachoeira de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3109808',
				'name' => 'Cachoeira Dourada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3109907',
				'name' => 'Caetanópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3110004',
				'name' => 'Caeté',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3110103',
				'name' => 'Caiana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3110202',
				'name' => 'Cajuri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3110301',
				'name' => 'Caldas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3110400',
				'name' => 'Camacho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3110509',
				'name' => 'Camanducaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3110608',
				'name' => 'Cambuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3110707',
				'name' => 'Cambuquira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3110806',
				'name' => 'Campanário',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3110905',
				'name' => 'Campanha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3111002',
				'name' => 'Campestre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3111101',
				'name' => 'Campina Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3111150',
				'name' => 'Campo Azul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3111200',
				'name' => 'Campo Belo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3111309',
				'name' => 'Campo do Meio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3111408',
				'name' => 'Campo Florido',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3111507',
				'name' => 'Campos Altos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3111606',
				'name' => 'Campos Gerais',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3111705',
				'name' => 'Canaã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3111804',
				'name' => 'Canápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3111903',
				'name' => 'Cana Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3112000',
				'name' => 'Candeias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3112059',
				'name' => 'Cantagalo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3112109',
				'name' => 'Caparaó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3112208',
				'name' => 'Capela Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3112307',
				'name' => 'Capelinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3112406',
				'name' => 'Capetinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3112505',
				'name' => 'Capim Branco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3112604',
				'name' => 'Capinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3112653',
				'name' => 'Capitão Andrade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3112703',
				'name' => 'Capitão Enéas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3112802',
				'name' => 'Capitólio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3112901',
				'name' => 'Caputira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3113008',
				'name' => 'Caraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3113107',
				'name' => 'Caranaíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3113206',
				'name' => 'Carandaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3113305',
				'name' => 'Carangola',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3113404',
				'name' => 'Caratinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3113503',
				'name' => 'Carbonita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3113602',
				'name' => 'Careaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3113701',
				'name' => 'Carlos Chagas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3113800',
				'name' => 'Carmésia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3113909',
				'name' => 'Carmo da Cachoeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3114006',
				'name' => 'Carmo da Mata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3114105',
				'name' => 'Carmo de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3114204',
				'name' => 'Carmo do Cajuru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3114303',
				'name' => 'Carmo do Paranaíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3114402',
				'name' => 'Carmo do Rio Claro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3114501',
				'name' => 'Carmópolis de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3114550',
				'name' => 'Carneirinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3114600',
				'name' => 'Carrancas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3114709',
				'name' => 'Carvalhópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3114808',
				'name' => 'Carvalhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3114907',
				'name' => 'Casa Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3115003',
				'name' => 'Cascalho Rico',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3115102',
				'name' => 'Cássia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3115201',
				'name' => 'Conceição da Barra de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3115300',
				'name' => 'Cataguases',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3115359',
				'name' => 'Catas Altas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3115409',
				'name' => 'Catas Altas da Noruega',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3115458',
				'name' => 'Catuji',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3115474',
				'name' => 'Catuti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3115508',
				'name' => 'Caxambu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3115607',
				'name' => 'Cedro do Abaeté',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3115706',
				'name' => 'Central de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3115805',
				'name' => 'Centralina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3115904',
				'name' => 'Chácara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3116001',
				'name' => 'Chalé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3116100',
				'name' => 'Chapada do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3116159',
				'name' => 'Chapada Gaúcha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3116209',
				'name' => 'Chiador',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3116308',
				'name' => 'Cipotânea',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3116407',
				'name' => 'Claraval',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3116506',
				'name' => 'Claro dos Poções',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3116605',
				'name' => 'Cláudio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3116704',
				'name' => 'Coimbra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3116803',
				'name' => 'Coluna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3116902',
				'name' => 'Comendador Gomes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3117009',
				'name' => 'Comercinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3117108',
				'name' => 'Conceição da Aparecida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3117207',
				'name' => 'Conceição das Pedras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3117306',
				'name' => 'Conceição das Alagoas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3117405',
				'name' => 'Conceição de Ipanema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3117504',
				'name' => 'Conceição do Mato Dentro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3117603',
				'name' => 'Conceição do Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3117702',
				'name' => 'Conceição do Rio Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3117801',
				'name' => 'Conceição dos Ouros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3117836',
				'name' => 'Cônego Marinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3117876',
				'name' => 'Confins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3117900',
				'name' => 'Congonhal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3118007',
				'name' => 'Congonhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3118106',
				'name' => 'Congonhas do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3118205',
				'name' => 'Conquista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3118304',
				'name' => 'Conselheiro Lafaiete',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3118403',
				'name' => 'Conselheiro Pena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3118502',
				'name' => 'Consolação',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3118601',
				'name' => 'Contagem',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3118700',
				'name' => 'Coqueiral',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3118809',
				'name' => 'Coração de Jesus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3118908',
				'name' => 'Cordisburgo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3119005',
				'name' => 'Cordislândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3119104',
				'name' => 'Corinto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3119203',
				'name' => 'Coroaci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3119302',
				'name' => 'Coromandel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3119401',
				'name' => 'Coronel Fabriciano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3119500',
				'name' => 'Coronel Murta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3119609',
				'name' => 'Coronel Pacheco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3119708',
				'name' => 'Coronel Xavier Chaves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3119807',
				'name' => 'Córrego Danta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3119906',
				'name' => 'Córrego do Bom Jesus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3119955',
				'name' => 'Córrego Fundo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3120003',
				'name' => 'Córrego Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3120102',
				'name' => 'Couto de Magalhães de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3120151',
				'name' => 'Crisólita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3120201',
				'name' => 'Cristais',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3120300',
				'name' => 'Cristália',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3120409',
				'name' => 'Cristiano Otoni',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3120508',
				'name' => 'Cristina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3120607',
				'name' => 'Crucilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3120706',
				'name' => 'Cruzeiro da Fortaleza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3120805',
				'name' => 'Cruzília',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3120839',
				'name' => 'Cuparaque',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3120870',
				'name' => 'Curral de Dentro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3120904',
				'name' => 'Curvelo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3121001',
				'name' => 'Datas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3121100',
				'name' => 'Delfim Moreira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3121209',
				'name' => 'Delfinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3121258',
				'name' => 'Delta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3121308',
				'name' => 'Descoberto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3121407',
				'name' => 'Desterro de Entre Rios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3121506',
				'name' => 'Desterro do Melo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3121605',
				'name' => 'Diamantina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3121704',
				'name' => 'Diogo de Vasconcelos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3121803',
				'name' => 'Dionísio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3121902',
				'name' => 'Divinésia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3122009',
				'name' => 'Divino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3122108',
				'name' => 'Divino das Laranjeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3122207',
				'name' => 'Divinolândia de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3122306',
				'name' => 'Divinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3122355',
				'name' => 'Divisa Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3122405',
				'name' => 'Divisa Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3122454',
				'name' => 'Divisópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3122470',
				'name' => 'Dom Bosco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3122504',
				'name' => 'Dom Cavati',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3122603',
				'name' => 'Dom Joaquim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3122702',
				'name' => 'Dom Silvério',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3122801',
				'name' => 'Dom Viçoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3122900',
				'name' => 'Dona Eusébia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3123007',
				'name' => 'Dores de Campos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3123106',
				'name' => 'Dores de Guanhães',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3123205',
				'name' => 'Dores do Indaiá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3123304',
				'name' => 'Dores do Turvo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3123403',
				'name' => 'Doresópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3123502',
				'name' => 'Douradoquara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3123528',
				'name' => 'Durandé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3123601',
				'name' => 'Elói Mendes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3123700',
				'name' => 'Engenheiro Caldas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3123809',
				'name' => 'Engenheiro Navarro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3123858',
				'name' => 'Entre Folhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3123908',
				'name' => 'Entre Rios de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3124005',
				'name' => 'Ervália',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3124104',
				'name' => 'Esmeraldas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3124203',
				'name' => 'Espera Feliz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3124302',
				'name' => 'Espinosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3124401',
				'name' => 'Espírito Santo do Dourado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3124500',
				'name' => 'Estiva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3124609',
				'name' => 'Estrela Dalva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3124708',
				'name' => 'Estrela do Indaiá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3124807',
				'name' => 'Estrela do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3124906',
				'name' => 'Eugenópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3125002',
				'name' => 'Ewbank da Câmara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3125101',
				'name' => 'Extrema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3125200',
				'name' => 'Fama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3125309',
				'name' => 'Faria Lemos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3125408',
				'name' => 'Felício dos Santos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3125507',
				'name' => 'São Gonçalo do Rio Preto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3125606',
				'name' => 'Felisburgo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3125705',
				'name' => 'Felixlândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3125804',
				'name' => 'Fernandes Tourinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3125903',
				'name' => 'Ferros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3125952',
				'name' => 'Fervedouro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3126000',
				'name' => 'Florestal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3126109',
				'name' => 'Formiga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3126208',
				'name' => 'Formoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3126307',
				'name' => 'Fortaleza de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3126406',
				'name' => 'Fortuna de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3126505',
				'name' => 'Francisco Badaró',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3126604',
				'name' => 'Francisco Dumont',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3126703',
				'name' => 'Francisco Sá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3126752',
				'name' => 'Franciscópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3126802',
				'name' => 'Frei Gaspar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3126901',
				'name' => 'Frei Inocêncio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3126950',
				'name' => 'Frei Lagonegro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127008',
				'name' => 'Fronteira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127057',
				'name' => 'Fronteira dos Vales',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127073',
				'name' => 'Fruta de Leite',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127107',
				'name' => 'Frutal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127206',
				'name' => 'Funilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127305',
				'name' => 'Galiléia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127339',
				'name' => 'Gameleiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127354',
				'name' => 'Glaucilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127370',
				'name' => 'Goiabeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127388',
				'name' => 'Goianá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127404',
				'name' => 'Gonçalves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127503',
				'name' => 'Gonzaga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127602',
				'name' => 'Gouveia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127701',
				'name' => 'Governador Valadares',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127800',
				'name' => 'Grão Mogol',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3127909',
				'name' => 'Grupiara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3128006',
				'name' => 'Guanhães',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3128105',
				'name' => 'Guapé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3128204',
				'name' => 'Guaraciaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3128253',
				'name' => 'Guaraciama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3128303',
				'name' => 'Guaranésia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3128402',
				'name' => 'Guarani',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3128501',
				'name' => 'Guarará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3128600',
				'name' => 'Guarda-Mor',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3128709',
				'name' => 'Guaxupé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3128808',
				'name' => 'Guidoval',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3128907',
				'name' => 'Guimarânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3129004',
				'name' => 'Guiricema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3129103',
				'name' => 'Gurinhatã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3129202',
				'name' => 'Heliodora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3129301',
				'name' => 'Iapu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3129400',
				'name' => 'Ibertioga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3129509',
				'name' => 'Ibiá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3129608',
				'name' => 'Ibiaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3129657',
				'name' => 'Ibiracatu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3129707',
				'name' => 'Ibiraci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3129806',
				'name' => 'Ibirité',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3129905',
				'name' => 'Ibitiúra de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3130002',
				'name' => 'Ibituruna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3130051',
				'name' => 'Icaraí de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3130101',
				'name' => 'Igarapé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3130200',
				'name' => 'Igaratinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3130309',
				'name' => 'Iguatama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3130408',
				'name' => 'Ijaci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3130507',
				'name' => 'Ilicínea',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3130556',
				'name' => 'Imbé de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3130606',
				'name' => 'Inconfidentes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3130655',
				'name' => 'Indaiabira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3130705',
				'name' => 'Indianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3130804',
				'name' => 'Ingaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3130903',
				'name' => 'Inhapim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3131000',
				'name' => 'Inhaúma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3131109',
				'name' => 'Inimutaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3131158',
				'name' => 'Ipaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3131208',
				'name' => 'Ipanema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3131307',
				'name' => 'Ipatinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3131406',
				'name' => 'Ipiaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3131505',
				'name' => 'Ipuiúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3131604',
				'name' => 'Iraí de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3131703',
				'name' => 'Itabira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3131802',
				'name' => 'Itabirinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3131901',
				'name' => 'Itabirito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3132008',
				'name' => 'Itacambira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3132107',
				'name' => 'Itacarambi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3132206',
				'name' => 'Itaguara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3132305',
				'name' => 'Itaipé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3132404',
				'name' => 'Itajubá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3132503',
				'name' => 'Itamarandiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3132602',
				'name' => 'Itamarati de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3132701',
				'name' => 'Itambacuri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3132800',
				'name' => 'Itambé do Mato Dentro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3132909',
				'name' => 'Itamogi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3133006',
				'name' => 'Itamonte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3133105',
				'name' => 'Itanhandu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3133204',
				'name' => 'Itanhomi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3133303',
				'name' => 'Itaobim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3133402',
				'name' => 'Itapagipe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3133501',
				'name' => 'Itapecerica',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3133600',
				'name' => 'Itapeva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3133709',
				'name' => 'Itatiaiuçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3133758',
				'name' => 'Itaú de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3133808',
				'name' => 'Itaúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3133907',
				'name' => 'Itaverava',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3134004',
				'name' => 'Itinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3134103',
				'name' => 'Itueta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3134202',
				'name' => 'Ituiutaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3134301',
				'name' => 'Itumirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3134400',
				'name' => 'Iturama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3134509',
				'name' => 'Itutinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3134608',
				'name' => 'Jaboticatubas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3134707',
				'name' => 'Jacinto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3134806',
				'name' => 'Jacuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3134905',
				'name' => 'Jacutinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3135001',
				'name' => 'Jaguaraçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3135050',
				'name' => 'Jaíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3135076',
				'name' => 'Jampruca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3135100',
				'name' => 'Janaúba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3135209',
				'name' => 'Januária',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3135308',
				'name' => 'Japaraíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3135357',
				'name' => 'Japonvar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3135407',
				'name' => 'Jeceaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3135456',
				'name' => 'Jenipapo de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3135506',
				'name' => 'Jequeri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3135605',
				'name' => 'Jequitaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3135704',
				'name' => 'Jequitibá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3135803',
				'name' => 'Jequitinhonha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3135902',
				'name' => 'Jesuânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136009',
				'name' => 'Joaíma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136108',
				'name' => 'Joanésia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136207',
				'name' => 'João Monlevade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136306',
				'name' => 'João Pinheiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136405',
				'name' => 'Joaquim Felício',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136504',
				'name' => 'Jordânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136520',
				'name' => 'José Gonçalves de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136553',
				'name' => 'José Raydan',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136579',
				'name' => 'Josenópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136603',
				'name' => 'Nova União',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136652',
				'name' => 'Juatuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136702',
				'name' => 'Juiz de Fora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136801',
				'name' => 'Juramento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136900',
				'name' => 'Juruaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3136959',
				'name' => 'Juvenília',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3137007',
				'name' => 'Ladainha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3137106',
				'name' => 'Lagamar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3137205',
				'name' => 'Lagoa da Prata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3137304',
				'name' => 'Lagoa dos Patos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3137403',
				'name' => 'Lagoa Dourada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3137502',
				'name' => 'Lagoa Formosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3137536',
				'name' => 'Lagoa Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3137601',
				'name' => 'Lagoa Santa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3137700',
				'name' => 'Lajinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3137809',
				'name' => 'Lambari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3137908',
				'name' => 'Lamim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138005',
				'name' => 'Laranjal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138104',
				'name' => 'Lassance',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138203',
				'name' => 'Lavras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138302',
				'name' => 'Leandro Ferreira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138351',
				'name' => 'Leme do Prado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138401',
				'name' => 'Leopoldina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138500',
				'name' => 'Liberdade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138609',
				'name' => 'Lima Duarte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138625',
				'name' => 'Limeira do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138658',
				'name' => 'Lontra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138674',
				'name' => 'Luisburgo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138682',
				'name' => 'Luislândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138708',
				'name' => 'Luminárias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138807',
				'name' => 'Luz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3138906',
				'name' => 'Machacalis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3139003',
				'name' => 'Machado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3139102',
				'name' => 'Madre de Deus de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3139201',
				'name' => 'Malacacheta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3139250',
				'name' => 'Mamonas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3139300',
				'name' => 'Manga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3139409',
				'name' => 'Manhuaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3139508',
				'name' => 'Manhumirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3139607',
				'name' => 'Mantena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3139706',
				'name' => 'Maravilhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3139805',
				'name' => 'Mar de Espanha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3139904',
				'name' => 'Maria da Fé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3140001',
				'name' => 'Mariana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3140100',
				'name' => 'Marilac',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3140159',
				'name' => 'Mário Campos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3140209',
				'name' => 'Maripá de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3140308',
				'name' => 'Marliéria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3140407',
				'name' => 'Marmelópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3140506',
				'name' => 'Martinho Campos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3140530',
				'name' => 'Martins Soares',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3140555',
				'name' => 'Mata Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3140605',
				'name' => 'Materlândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3140704',
				'name' => 'Mateus Leme',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3140803',
				'name' => 'Matias Barbosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3140852',
				'name' => 'Matias Cardoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3140902',
				'name' => 'Matipó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3141009',
				'name' => 'Mato Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3141108',
				'name' => 'Matozinhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3141207',
				'name' => 'Matutina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3141306',
				'name' => 'Medeiros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3141405',
				'name' => 'Medina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3141504',
				'name' => 'Mendes Pimentel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3141603',
				'name' => 'Mercês',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3141702',
				'name' => 'Mesquita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3141801',
				'name' => 'Minas Novas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3141900',
				'name' => 'Minduri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3142007',
				'name' => 'Mirabela',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3142106',
				'name' => 'Miradouro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3142205',
				'name' => 'Miraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3142254',
				'name' => 'Miravânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3142304',
				'name' => 'Moeda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3142403',
				'name' => 'Moema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3142502',
				'name' => 'Monjolos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3142601',
				'name' => 'Monsenhor Paulo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3142700',
				'name' => 'Montalvânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3142809',
				'name' => 'Monte Alegre de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3142908',
				'name' => 'Monte Azul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3143005',
				'name' => 'Monte Belo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3143104',
				'name' => 'Monte Carmelo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3143153',
				'name' => 'Monte Formoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3143203',
				'name' => 'Monte Santo de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3143302',
				'name' => 'Montes Claros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3143401',
				'name' => 'Monte Sião',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3143450',
				'name' => 'Montezuma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3143500',
				'name' => 'Morada Nova de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3143609',
				'name' => 'Morro da Garça',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3143708',
				'name' => 'Morro do Pilar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3143807',
				'name' => 'Munhoz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3143906',
				'name' => 'Muriaé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3144003',
				'name' => 'Mutum',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3144102',
				'name' => 'Muzambinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3144201',
				'name' => 'Nacip Raydan',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3144300',
				'name' => 'Nanuque',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3144359',
				'name' => 'Naque',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3144375',
				'name' => 'Natalândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3144409',
				'name' => 'Natércia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3144508',
				'name' => 'Nazareno',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3144607',
				'name' => 'Nepomuceno',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3144656',
				'name' => 'Ninheira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3144672',
				'name' => 'Nova Belém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3144706',
				'name' => 'Nova Era',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3144805',
				'name' => 'Nova Lima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3144904',
				'name' => 'Nova Módica',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145000',
				'name' => 'Nova Ponte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145059',
				'name' => 'Nova Porteirinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145109',
				'name' => 'Nova Resende',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145208',
				'name' => 'Nova Serrana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145307',
				'name' => 'Novo Cruzeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145356',
				'name' => 'Novo Oriente de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145372',
				'name' => 'Novorizonte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145406',
				'name' => 'Olaria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145455',
				'name' => 'Olhos-D\'Água',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145505',
				'name' => 'Olímpio Noronha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145604',
				'name' => 'Oliveira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145703',
				'name' => 'Oliveira Fortes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145802',
				'name' => 'Onça de Pitangui',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145851',
				'name' => 'Oratórios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145877',
				'name' => 'Orizânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3145901',
				'name' => 'Ouro Branco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3146008',
				'name' => 'Ouro Fino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3146107',
				'name' => 'Ouro Preto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3146206',
				'name' => 'Ouro Verde de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3146255',
				'name' => 'Padre Carvalho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3146305',
				'name' => 'Padre Paraíso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3146404',
				'name' => 'Paineiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3146503',
				'name' => 'Pains',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3146552',
				'name' => 'Pai Pedro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3146602',
				'name' => 'Paiva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3146701',
				'name' => 'Palma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3146750',
				'name' => 'Palmópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3146909',
				'name' => 'Papagaios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3147006',
				'name' => 'Paracatu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3147105',
				'name' => 'Pará de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3147204',
				'name' => 'Paraguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3147303',
				'name' => 'Paraisópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3147402',
				'name' => 'Paraopeba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3147501',
				'name' => 'Passabém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3147600',
				'name' => 'Passa Quatro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3147709',
				'name' => 'Passa Tempo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3147808',
				'name' => 'Passa-Vinte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3147907',
				'name' => 'Passos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3147956',
				'name' => 'Patis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3148004',
				'name' => 'Patos de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3148103',
				'name' => 'Patrocínio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3148202',
				'name' => 'Patrocínio do Muriaé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3148301',
				'name' => 'Paula Cândido',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3148400',
				'name' => 'Paulistas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3148509',
				'name' => 'Pavão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3148608',
				'name' => 'Peçanha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3148707',
				'name' => 'Pedra Azul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3148756',
				'name' => 'Pedra Bonita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3148806',
				'name' => 'Pedra do Anta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3148905',
				'name' => 'Pedra do Indaiá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3149002',
				'name' => 'Pedra Dourada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3149101',
				'name' => 'Pedralva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3149150',
				'name' => 'Pedras de Maria da Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3149200',
				'name' => 'Pedrinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3149309',
				'name' => 'Pedro Leopoldo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3149408',
				'name' => 'Pedro Teixeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3149507',
				'name' => 'Pequeri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3149606',
				'name' => 'Pequi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3149705',
				'name' => 'Perdigão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3149804',
				'name' => 'Perdizes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3149903',
				'name' => 'Perdões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3149952',
				'name' => 'Periquito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3150000',
				'name' => 'Pescador',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3150109',
				'name' => 'Piau',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3150158',
				'name' => 'Piedade de Caratinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3150208',
				'name' => 'Piedade de Ponte Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3150307',
				'name' => 'Piedade do Rio Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3150406',
				'name' => 'Piedade dos Gerais',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3150505',
				'name' => 'Pimenta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3150539',
				'name' => 'Pingo-D\'Água',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3150570',
				'name' => 'Pintópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3150604',
				'name' => 'Piracema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3150703',
				'name' => 'Pirajuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3150802',
				'name' => 'Piranga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3150901',
				'name' => 'Piranguçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3151008',
				'name' => 'Piranguinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3151107',
				'name' => 'Pirapetinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3151206',
				'name' => 'Pirapora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3151305',
				'name' => 'Piraúba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3151404',
				'name' => 'Pitangui',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3151503',
				'name' => 'Piumhi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3151602',
				'name' => 'Planura',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3151701',
				'name' => 'Poço Fundo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3151800',
				'name' => 'Poços de Caldas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3151909',
				'name' => 'Pocrane',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3152006',
				'name' => 'Pompéu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3152105',
				'name' => 'Ponte Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3152131',
				'name' => 'Ponto Chique',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3152170',
				'name' => 'Ponto dos Volantes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3152204',
				'name' => 'Porteirinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3152303',
				'name' => 'Porto Firme',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3152402',
				'name' => 'Poté',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3152501',
				'name' => 'Pouso Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3152600',
				'name' => 'Pouso Alto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3152709',
				'name' => 'Prados',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3152808',
				'name' => 'Prata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3152907',
				'name' => 'Pratápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3153004',
				'name' => 'Pratinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3153103',
				'name' => 'Presidente Bernardes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3153202',
				'name' => 'Presidente Juscelino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3153301',
				'name' => 'Presidente Kubitschek',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3153400',
				'name' => 'Presidente Olegário',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3153509',
				'name' => 'Alto Jequitibá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3153608',
				'name' => 'Prudente de Morais',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3153707',
				'name' => 'Quartel Geral',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3153806',
				'name' => 'Queluzito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3153905',
				'name' => 'Raposos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3154002',
				'name' => 'Raul Soares',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3154101',
				'name' => 'Recreio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3154150',
				'name' => 'Reduto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3154200',
				'name' => 'Resende Costa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3154309',
				'name' => 'Resplendor',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3154408',
				'name' => 'Ressaquinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3154457',
				'name' => 'Riachinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3154507',
				'name' => 'Riacho dos Machados',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3154606',
				'name' => 'Ribeirão das Neves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3154705',
				'name' => 'Ribeirão Vermelho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3154804',
				'name' => 'Rio Acima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3154903',
				'name' => 'Rio Casca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3155009',
				'name' => 'Rio Doce',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3155108',
				'name' => 'Rio do Prado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3155207',
				'name' => 'Rio Espera',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3155306',
				'name' => 'Rio Manso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3155405',
				'name' => 'Rio Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3155504',
				'name' => 'Rio Paranaíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3155603',
				'name' => 'Rio Pardo de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3155702',
				'name' => 'Rio Piracicaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3155801',
				'name' => 'Rio Pomba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3155900',
				'name' => 'Rio Preto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3156007',
				'name' => 'Rio Vermelho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3156106',
				'name' => 'Ritápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3156205',
				'name' => 'Rochedo de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3156304',
				'name' => 'Rodeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3156403',
				'name' => 'Romaria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3156452',
				'name' => 'Rosário da Limeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3156502',
				'name' => 'Rubelita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3156601',
				'name' => 'Rubim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3156700',
				'name' => 'Sabará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3156809',
				'name' => 'Sabinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3156908',
				'name' => 'Sacramento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157005',
				'name' => 'Salinas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157104',
				'name' => 'Salto da Divisa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157203',
				'name' => 'Santa Bárbara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157252',
				'name' => 'Santa Bárbara do Leste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157278',
				'name' => 'Santa Bárbara do Monte Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157302',
				'name' => 'Santa Bárbara do Tugúrio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157336',
				'name' => 'Santa Cruz de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157377',
				'name' => 'Santa Cruz de Salinas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157401',
				'name' => 'Santa Cruz do Escalvado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157500',
				'name' => 'Santa Efigênia de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157609',
				'name' => 'Santa Fé de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157658',
				'name' => 'Santa Helena de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157708',
				'name' => 'Santa Juliana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157807',
				'name' => 'Santa Luzia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3157906',
				'name' => 'Santa Margarida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3158003',
				'name' => 'Santa Maria de Itabira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3158102',
				'name' => 'Santa Maria do Salto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3158201',
				'name' => 'Santa Maria do Suaçuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3158300',
				'name' => 'Santana da Vargem',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3158409',
				'name' => 'Santana de Cataguases',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3158508',
				'name' => 'Santana de Pirapama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3158607',
				'name' => 'Santana do Deserto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3158706',
				'name' => 'Santana do Garambéu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3158805',
				'name' => 'Santana do Jacaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3158904',
				'name' => 'Santana do Manhuaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3158953',
				'name' => 'Santana do Paraíso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3159001',
				'name' => 'Santana do Riacho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3159100',
				'name' => 'Santana dos Montes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3159209',
				'name' => 'Santa Rita de Caldas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3159308',
				'name' => 'Santa Rita de Jacutinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3159357',
				'name' => 'Santa Rita de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3159407',
				'name' => 'Santa Rita de Ibitipoca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3159506',
				'name' => 'Santa Rita do Itueto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3159605',
				'name' => 'Santa Rita do Sapucaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3159704',
				'name' => 'Santa Rosa da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3159803',
				'name' => 'Santa Vitória',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3159902',
				'name' => 'Santo Antônio do Amparo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3160009',
				'name' => 'Santo Antônio do Aventureiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3160108',
				'name' => 'Santo Antônio do Grama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3160207',
				'name' => 'Santo Antônio do Itambé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3160306',
				'name' => 'Santo Antônio do Jacinto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3160405',
				'name' => 'Santo Antônio do Monte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3160454',
				'name' => 'Santo Antônio do Retiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3160504',
				'name' => 'Santo Antônio do Rio Abaixo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3160603',
				'name' => 'Santo Hipólito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3160702',
				'name' => 'Santos Dumont',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3160801',
				'name' => 'São Bento Abade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3160900',
				'name' => 'São Brás do Suaçuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3160959',
				'name' => 'São Domingos das Dores',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3161007',
				'name' => 'São Domingos do Prata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3161056',
				'name' => 'São Félix de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3161106',
				'name' => 'São Francisco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3161205',
				'name' => 'São Francisco de Paula',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3161304',
				'name' => 'São Francisco de Sales',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3161403',
				'name' => 'São Francisco do Glória',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3161502',
				'name' => 'São Geraldo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3161601',
				'name' => 'São Geraldo da Piedade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3161650',
				'name' => 'São Geraldo do Baixio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3161700',
				'name' => 'São Gonçalo do Abaeté',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3161809',
				'name' => 'São Gonçalo do Pará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3161908',
				'name' => 'São Gonçalo do Rio Abaixo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162005',
				'name' => 'São Gonçalo do Sapucaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162104',
				'name' => 'São Gotardo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162203',
				'name' => 'São João Batista do Glória',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162252',
				'name' => 'São João da Lagoa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162302',
				'name' => 'São João da Mata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162401',
				'name' => 'São João da Ponte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162450',
				'name' => 'São João das Missões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162500',
				'name' => 'São João del Rei',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162559',
				'name' => 'São João do Manhuaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162575',
				'name' => 'São João do Manteninha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162609',
				'name' => 'São João do Oriente',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162658',
				'name' => 'São João do Pacuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162708',
				'name' => 'São João do Paraíso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162807',
				'name' => 'São João Evangelista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162906',
				'name' => 'São João Nepomuceno',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162922',
				'name' => 'São Joaquim de Bicas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162948',
				'name' => 'São José da Barra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3162955',
				'name' => 'São José da Lapa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3163003',
				'name' => 'São José da Safira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3163102',
				'name' => 'São José da Varginha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3163201',
				'name' => 'São José do Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3163300',
				'name' => 'São José do Divino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3163409',
				'name' => 'São José do Goiabal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3163508',
				'name' => 'São José do Jacuri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3163607',
				'name' => 'São José do Mantimento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3163706',
				'name' => 'São Lourenço',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3163805',
				'name' => 'São Miguel do Anta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3163904',
				'name' => 'São Pedro da União',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3164001',
				'name' => 'São Pedro dos Ferros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3164100',
				'name' => 'São Pedro do Suaçuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3164209',
				'name' => 'São Romão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3164308',
				'name' => 'São Roque de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3164407',
				'name' => 'São Sebastião da Bela Vista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3164431',
				'name' => 'São Sebastião da Vargem Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3164472',
				'name' => 'São Sebastião do Anta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3164506',
				'name' => 'São Sebastião do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3164605',
				'name' => 'São Sebastião do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3164704',
				'name' => 'São Sebastião do Paraíso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3164803',
				'name' => 'São Sebastião do Rio Preto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3164902',
				'name' => 'São Sebastião do Rio Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3165008',
				'name' => 'São Tiago',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3165107',
				'name' => 'São Tomás de Aquino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3165206',
				'name' => 'São Thomé das Letras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3165305',
				'name' => 'São Vicente de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3165404',
				'name' => 'Sapucaí-Mirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3165503',
				'name' => 'Sardoá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3165537',
				'name' => 'Sarzedo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3165552',
				'name' => 'Setubinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3165560',
				'name' => 'Sem-Peixe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3165578',
				'name' => 'Senador Amaral',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3165602',
				'name' => 'Senador Cortes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3165701',
				'name' => 'Senador Firmino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3165800',
				'name' => 'Senador José Bento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3165909',
				'name' => 'Senador Modestino Gonçalves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3166006',
				'name' => 'Senhora de Oliveira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3166105',
				'name' => 'Senhora do Porto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3166204',
				'name' => 'Senhora dos Remédios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3166303',
				'name' => 'Sericita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3166402',
				'name' => 'Seritinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3166501',
				'name' => 'Serra Azul de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3166600',
				'name' => 'Serra da Saudade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3166709',
				'name' => 'Serra dos Aimorés',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3166808',
				'name' => 'Serra do Salitre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3166907',
				'name' => 'Serrania',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3166956',
				'name' => 'Serranópolis de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3167004',
				'name' => 'Serranos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3167103',
				'name' => 'Serro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3167202',
				'name' => 'Sete Lagoas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3167301',
				'name' => 'Silveirânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3167400',
				'name' => 'Silvianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3167509',
				'name' => 'Simão Pereira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3167608',
				'name' => 'Simonésia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3167707',
				'name' => 'Sobrália',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3167806',
				'name' => 'Soledade de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3167905',
				'name' => 'Tabuleiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3168002',
				'name' => 'Taiobeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3168051',
				'name' => 'Taparuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3168101',
				'name' => 'Tapira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3168200',
				'name' => 'Tapiraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3168309',
				'name' => 'Taquaraçu de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3168408',
				'name' => 'Tarumirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3168507',
				'name' => 'Teixeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3168606',
				'name' => 'Teófilo Otoni',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3168705',
				'name' => 'Timóteo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3168804',
				'name' => 'Tiradentes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3168903',
				'name' => 'Tiros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3169000',
				'name' => 'Tocantins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3169059',
				'name' => 'Tocos do Moji',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3169109',
				'name' => 'Toledo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3169208',
				'name' => 'Tombos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3169307',
				'name' => 'Três Corações',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3169356',
				'name' => 'Três Marias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3169406',
				'name' => 'Três Pontas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3169505',
				'name' => 'Tumiritinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3169604',
				'name' => 'Tupaciguara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3169703',
				'name' => 'Turmalina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3169802',
				'name' => 'Turvolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3169901',
				'name' => 'Ubá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170008',
				'name' => 'Ubaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170057',
				'name' => 'Ubaporanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170107',
				'name' => 'Uberaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170206',
				'name' => 'Uberlândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170305',
				'name' => 'Umburatiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170404',
				'name' => 'Unaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170438',
				'name' => 'União de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170479',
				'name' => 'Uruana de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170503',
				'name' => 'Urucânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170529',
				'name' => 'Urucuia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170578',
				'name' => 'Vargem Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170602',
				'name' => 'Vargem Bonita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170651',
				'name' => 'Vargem Grande do Rio Pardo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170701',
				'name' => 'Varginha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170750',
				'name' => 'Varjão de Minas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170800',
				'name' => 'Várzea da Palma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3170909',
				'name' => 'Varzelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3171006',
				'name' => 'Vazante',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3171030',
				'name' => 'Verdelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3171071',
				'name' => 'Veredinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3171105',
				'name' => 'Veríssimo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3171154',
				'name' => 'Vermelho Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3171204',
				'name' => 'Vespasiano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3171303',
				'name' => 'Viçosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3171402',
				'name' => 'Vieiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3171501',
				'name' => 'Mathias Lobato',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3171600',
				'name' => 'Virgem da Lapa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3171709',
				'name' => 'Virgínia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3171808',
				'name' => 'Virginópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3171907',
				'name' => 'Virgolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3172004',
				'name' => 'Visconde do Rio Branco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3172103',
				'name' => 'Volta Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3172202',
				'name' => 'Wenceslau Braz',
				'state_id' => $state->id
			]
		]);
    }
}
