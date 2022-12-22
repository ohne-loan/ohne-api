<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class SaoPauloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'São Paulo',
			'uf' => 'SP'
		]);

		City::insert([
			[
				'ibge_code' => '3500105',
				'name' => 'Adamantina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3500204',
				'name' => 'Adolfo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3500303',
				'name' => 'Aguaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3500402',
				'name' => 'Águas da Prata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3500501',
				'name' => 'Águas de Lindóia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3500550',
				'name' => 'Águas de Santa Bárbara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3500600',
				'name' => 'Águas de São Pedro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3500709',
				'name' => 'Agudos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3500758',
				'name' => 'Alambari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3500808',
				'name' => 'Alfredo Marcondes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3500907',
				'name' => 'Altair',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3501004',
				'name' => 'Altinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3501103',
				'name' => 'Alto Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3501152',
				'name' => 'Alumínio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3501202',
				'name' => 'Álvares Florence',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3501301',
				'name' => 'Álvares Machado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3501400',
				'name' => 'Álvaro de Carvalho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3501509',
				'name' => 'Alvinlândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3501608',
				'name' => 'Americana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3501707',
				'name' => 'Américo Brasiliense',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3501806',
				'name' => 'Américo de Campos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3501905',
				'name' => 'Amparo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3502002',
				'name' => 'Analândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3502101',
				'name' => 'Andradina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3502200',
				'name' => 'Angatuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3502309',
				'name' => 'Anhembi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3502408',
				'name' => 'Anhumas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3502507',
				'name' => 'Aparecida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3502606',
				'name' => 'Aparecida D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3502705',
				'name' => 'Apiaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3502754',
				'name' => 'Araçariguama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3502804',
				'name' => 'Araçatuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3502903',
				'name' => 'Araçoiaba da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3503000',
				'name' => 'Aramina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3503109',
				'name' => 'Arandu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3503158',
				'name' => 'Arapeí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3503208',
				'name' => 'Araraquara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3503307',
				'name' => 'Araras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3503356',
				'name' => 'Arco-Íris',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3503406',
				'name' => 'Arealva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3503505',
				'name' => 'Areias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3503604',
				'name' => 'Areiópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3503703',
				'name' => 'Ariranha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3503802',
				'name' => 'Artur Nogueira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3503901',
				'name' => 'Arujá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3503950',
				'name' => 'Aspásia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3504008',
				'name' => 'Assis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3504107',
				'name' => 'Atibaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3504206',
				'name' => 'Auriflama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3504305',
				'name' => 'Avaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3504404',
				'name' => 'Avanhandava',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3504503',
				'name' => 'Avaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3504602',
				'name' => 'Bady Bassitt',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3504701',
				'name' => 'Balbinos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3504800',
				'name' => 'Bálsamo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3504909',
				'name' => 'Bananal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3505005',
				'name' => 'Barão de Antonina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3505104',
				'name' => 'Barbosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3505203',
				'name' => 'Bariri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3505302',
				'name' => 'Barra Bonita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3505351',
				'name' => 'Barra do Chapéu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3505401',
				'name' => 'Barra do Turvo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3505500',
				'name' => 'Barretos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3505609',
				'name' => 'Barrinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3505708',
				'name' => 'Barueri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3505807',
				'name' => 'Bastos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3505906',
				'name' => 'Batatais',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3506003',
				'name' => 'Bauru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3506102',
				'name' => 'Bebedouro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3506201',
				'name' => 'Bento de Abreu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3506300',
				'name' => 'Bernardino de Campos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3506359',
				'name' => 'Bertioga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3506409',
				'name' => 'Bilac',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3506508',
				'name' => 'Birigui',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3506607',
				'name' => 'Biritiba-Mirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3506706',
				'name' => 'Boa Esperança do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3506805',
				'name' => 'Bocaina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3506904',
				'name' => 'Bofete',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3507001',
				'name' => 'Boituva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3507100',
				'name' => 'Bom Jesus dos Perdões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3507159',
				'name' => 'Bom Sucesso de Itararé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3507209',
				'name' => 'Borá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3507308',
				'name' => 'Boracéia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3507407',
				'name' => 'Borborema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3507456',
				'name' => 'Borebi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3507506',
				'name' => 'Botucatu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3507605',
				'name' => 'Bragança Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3507704',
				'name' => 'Braúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3507753',
				'name' => 'Brejo Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3507803',
				'name' => 'Brodowski',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3507902',
				'name' => 'Brotas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3508009',
				'name' => 'Buri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3508108',
				'name' => 'Buritama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3508207',
				'name' => 'Buritizal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3508306',
				'name' => 'Cabrália Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3508405',
				'name' => 'Cabreúva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3508504',
				'name' => 'Caçapava',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3508603',
				'name' => 'Cachoeira Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3508702',
				'name' => 'Caconde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3508801',
				'name' => 'Cafelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3508900',
				'name' => 'Caiabu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3509007',
				'name' => 'Caieiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3509106',
				'name' => 'Caiuá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3509205',
				'name' => 'Cajamar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3509254',
				'name' => 'Cajati',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3509304',
				'name' => 'Cajobi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3509403',
				'name' => 'Cajuru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3509452',
				'name' => 'Campina do Monte Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3509502',
				'name' => 'Campinas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3509601',
				'name' => 'Campo Limpo Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3509700',
				'name' => 'Campos do Jordão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3509809',
				'name' => 'Campos Novos Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3509908',
				'name' => 'Cananéia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3509957',
				'name' => 'Canas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3510005',
				'name' => 'Cândido Mota',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3510104',
				'name' => 'Cândido Rodrigues',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3510153',
				'name' => 'Canitar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3510203',
				'name' => 'Capão Bonito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3510302',
				'name' => 'Capela do Alto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3510401',
				'name' => 'Capivari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3510500',
				'name' => 'Caraguatatuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3510609',
				'name' => 'Carapicuíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3510708',
				'name' => 'Cardoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3510807',
				'name' => 'Casa Branca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3510906',
				'name' => 'Cássia dos Coqueiros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3511003',
				'name' => 'Castilho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3511102',
				'name' => 'Catanduva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3511201',
				'name' => 'Catiguá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3511300',
				'name' => 'Cedral',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3511409',
				'name' => 'Cerqueira César',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3511508',
				'name' => 'Cerquilho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3511607',
				'name' => 'Cesário Lange',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3511706',
				'name' => 'Charqueada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3511904',
				'name' => 'Clementina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3512001',
				'name' => 'Colina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3512100',
				'name' => 'Colômbia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3512209',
				'name' => 'Conchal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3512308',
				'name' => 'Conchas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3512407',
				'name' => 'Cordeirópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3512506',
				'name' => 'Coroados',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3512605',
				'name' => 'Coronel Macedo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3512704',
				'name' => 'Corumbataí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3512803',
				'name' => 'Cosmópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3512902',
				'name' => 'Cosmorama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3513009',
				'name' => 'Cotia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3513108',
				'name' => 'Cravinhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3513207',
				'name' => 'Cristais Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3513306',
				'name' => 'Cruzália',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3513405',
				'name' => 'Cruzeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3513504',
				'name' => 'Cubatão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3513603',
				'name' => 'Cunha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3513702',
				'name' => 'Descalvado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3513801',
				'name' => 'Diadema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3513850',
				'name' => 'Dirce Reis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3513900',
				'name' => 'Divinolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3514007',
				'name' => 'Dobrada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3514106',
				'name' => 'Dois Córregos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3514205',
				'name' => 'Dolcinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3514304',
				'name' => 'Dourado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3514403',
				'name' => 'Dracena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3514502',
				'name' => 'Duartina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3514601',
				'name' => 'Dumont',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3514700',
				'name' => 'Echaporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3514809',
				'name' => 'Eldorado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3514908',
				'name' => 'Elias Fausto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3514924',
				'name' => 'Elisiário',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3514957',
				'name' => 'Embaúba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515004',
				'name' => 'Embu das Artes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515103',
				'name' => 'Embu-Guaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515129',
				'name' => 'Emilianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515152',
				'name' => 'Engenheiro Coelho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515186',
				'name' => 'Espírito Santo do Pinhal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515194',
				'name' => 'Espírito Santo do Turvo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515202',
				'name' => 'Estrela D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515301',
				'name' => 'Estrela do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515350',
				'name' => 'Euclides da Cunha Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515400',
				'name' => 'Fartura',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515509',
				'name' => 'Fernandópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515608',
				'name' => 'Fernando Prestes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515657',
				'name' => 'Fernão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515707',
				'name' => 'Ferraz de Vasconcelos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515806',
				'name' => 'Flora Rica',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3515905',
				'name' => 'Floreal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3516002',
				'name' => 'Flórida Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3516101',
				'name' => 'Florínia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3516200',
				'name' => 'Franca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3516309',
				'name' => 'Francisco Morato',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3516408',
				'name' => 'Franco da Rocha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3516507',
				'name' => 'Gabriel Monteiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3516606',
				'name' => 'Gália',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3516705',
				'name' => 'Garça',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3516804',
				'name' => 'Gastão Vidigal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3516853',
				'name' => 'Gavião Peixoto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3516903',
				'name' => 'General Salgado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3517000',
				'name' => 'Getulina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3517109',
				'name' => 'Glicério',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3517208',
				'name' => 'Guaiçara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3517307',
				'name' => 'Guaimbê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3517406',
				'name' => 'Guaíra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3517505',
				'name' => 'Guapiaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3517604',
				'name' => 'Guapiara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3517703',
				'name' => 'Guará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3517802',
				'name' => 'Guaraçaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3517901',
				'name' => 'Guaraci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3518008',
				'name' => 'Guarani D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3518107',
				'name' => 'Guarantã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3518206',
				'name' => 'Guararapes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3518305',
				'name' => 'Guararema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3518404',
				'name' => 'Guaratinguetá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3518503',
				'name' => 'Guareí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3518602',
				'name' => 'Guariba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3518701',
				'name' => 'Guarujá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3518800',
				'name' => 'Guarulhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3518859',
				'name' => 'Guatapará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3518909',
				'name' => 'Guzolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3519006',
				'name' => 'Herculândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3519055',
				'name' => 'Holambra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3519071',
				'name' => 'Hortolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3519105',
				'name' => 'Iacanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3519204',
				'name' => 'Iacri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3519253',
				'name' => 'Iaras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3519303',
				'name' => 'Ibaté',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3519402',
				'name' => 'Ibirá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3519501',
				'name' => 'Ibirarema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3519600',
				'name' => 'Ibitinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3519709',
				'name' => 'Ibiúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3519808',
				'name' => 'Icém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3519907',
				'name' => 'Iepê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3520004',
				'name' => 'Igaraçu do Tietê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3520103',
				'name' => 'Igarapava',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3520202',
				'name' => 'Igaratá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3520301',
				'name' => 'Iguape',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3520400',
				'name' => 'Ilhabela',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3520426',
				'name' => 'Ilha Comprida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3520442',
				'name' => 'Ilha Solteira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3520509',
				'name' => 'Indaiatuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3520608',
				'name' => 'Indiana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3520707',
				'name' => 'Indiaporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3520806',
				'name' => 'Inúbia Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3520905',
				'name' => 'Ipaussu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3521002',
				'name' => 'Iperó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3521101',
				'name' => 'Ipeúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3521150',
				'name' => 'Ipiguá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3521200',
				'name' => 'Iporanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3521309',
				'name' => 'Ipuã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3521408',
				'name' => 'Iracemápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3521507',
				'name' => 'Irapuã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3521606',
				'name' => 'Irapuru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3521705',
				'name' => 'Itaberá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3521804',
				'name' => 'Itaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3521903',
				'name' => 'Itajobi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3522000',
				'name' => 'Itaju',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3522109',
				'name' => 'Itanhaém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3522158',
				'name' => 'Itaóca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3522208',
				'name' => 'Itapecerica da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3522307',
				'name' => 'Itapetininga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3522406',
				'name' => 'Itapeva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3522505',
				'name' => 'Itapevi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3522604',
				'name' => 'Itapira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3522653',
				'name' => 'Itapirapuã Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3522703',
				'name' => 'Itápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3522802',
				'name' => 'Itaporanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3522901',
				'name' => 'Itapuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3523008',
				'name' => 'Itapura',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3523107',
				'name' => 'Itaquaquecetuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3523206',
				'name' => 'Itararé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3523305',
				'name' => 'Itariri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3523404',
				'name' => 'Itatiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3523503',
				'name' => 'Itatinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3523602',
				'name' => 'Itirapina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3523701',
				'name' => 'Itirapuã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3523800',
				'name' => 'Itobi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3523909',
				'name' => 'Itu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3524006',
				'name' => 'Itupeva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3524105',
				'name' => 'Ituverava',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3524204',
				'name' => 'Jaborandi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3524303',
				'name' => 'Jaboticabal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3524402',
				'name' => 'Jacareí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3524501',
				'name' => 'Jaci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3524600',
				'name' => 'Jacupiranga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3524709',
				'name' => 'Jaguariúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3524808',
				'name' => 'Jales',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3524907',
				'name' => 'Jambeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3525003',
				'name' => 'Jandira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3525102',
				'name' => 'Jardinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3525201',
				'name' => 'Jarinu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3525300',
				'name' => 'Jaú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3525409',
				'name' => 'Jeriquara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3525508',
				'name' => 'Joanópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3525607',
				'name' => 'João Ramalho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3525706',
				'name' => 'José Bonifácio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3525805',
				'name' => 'Júlio Mesquita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3525854',
				'name' => 'Jumirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3525904',
				'name' => 'Jundiaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3526001',
				'name' => 'Junqueirópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3526100',
				'name' => 'Juquiá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3526209',
				'name' => 'Juquitiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3526308',
				'name' => 'Lagoinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3526407',
				'name' => 'Laranjal Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3526506',
				'name' => 'Lavínia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3526605',
				'name' => 'Lavrinhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3526704',
				'name' => 'Leme',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3526803',
				'name' => 'Lençóis Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3526902',
				'name' => 'Limeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3527009',
				'name' => 'Lindóia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3527108',
				'name' => 'Lins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3527207',
				'name' => 'Lorena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3527256',
				'name' => 'Lourdes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3527306',
				'name' => 'Louveira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3527405',
				'name' => 'Lucélia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3527504',
				'name' => 'Lucianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3527603',
				'name' => 'Luís Antônio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3527702',
				'name' => 'Luiziânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3527801',
				'name' => 'Lupércio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3527900',
				'name' => 'Lutécia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3528007',
				'name' => 'Macatuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3528106',
				'name' => 'Macaubal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3528205',
				'name' => 'Macedônia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3528304',
				'name' => 'Magda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3528403',
				'name' => 'Mairinque',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3528502',
				'name' => 'Mairiporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3528601',
				'name' => 'Manduri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3528700',
				'name' => 'Marabá Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3528809',
				'name' => 'Maracaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3528858',
				'name' => 'Marapoama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3528908',
				'name' => 'Mariápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3529005',
				'name' => 'Marília',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3529104',
				'name' => 'Marinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3529203',
				'name' => 'Martinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3529302',
				'name' => 'Matão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3529401',
				'name' => 'Mauá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3529500',
				'name' => 'Mendonça',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3529609',
				'name' => 'Meridiano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3529658',
				'name' => 'Mesópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3529708',
				'name' => 'Miguelópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3529807',
				'name' => 'Mineiros do Tietê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3529906',
				'name' => 'Miracatu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3530003',
				'name' => 'Mira Estrela',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3530102',
				'name' => 'Mirandópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3530201',
				'name' => 'Mirante do Paranapanema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3530300',
				'name' => 'Mirassol',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3530409',
				'name' => 'Mirassolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3530508',
				'name' => 'Mococa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3530607',
				'name' => 'Mogi das Cruzes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3530706',
				'name' => 'Mogi Guaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3530805',
				'name' => 'Moji Mirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3530904',
				'name' => 'Mombuca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3531001',
				'name' => 'Monções',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3531100',
				'name' => 'Mongaguá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3531209',
				'name' => 'Monte Alegre do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3531308',
				'name' => 'Monte Alto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3531407',
				'name' => 'Monte Aprazível',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3531506',
				'name' => 'Monte Azul Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3531605',
				'name' => 'Monte Castelo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3531704',
				'name' => 'Monteiro Lobato',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3531803',
				'name' => 'Monte Mor',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3531902',
				'name' => 'Morro Agudo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532009',
				'name' => 'Morungaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532058',
				'name' => 'Motuca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532108',
				'name' => 'Murutinga do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532157',
				'name' => 'Nantes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532207',
				'name' => 'Narandiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532306',
				'name' => 'Natividade da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532405',
				'name' => 'Nazaré Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532504',
				'name' => 'Neves Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532603',
				'name' => 'Nhandeara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532702',
				'name' => 'Nipoã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532801',
				'name' => 'Nova Aliança',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532827',
				'name' => 'Nova Campina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532843',
				'name' => 'Nova Canaã Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532868',
				'name' => 'Nova Castilho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3532900',
				'name' => 'Nova Europa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3533007',
				'name' => 'Nova Granada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3533106',
				'name' => 'Nova Guataporanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3533205',
				'name' => 'Nova Independência',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3533254',
				'name' => 'Novais',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3533304',
				'name' => 'Nova Luzitânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3533403',
				'name' => 'Nova Odessa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3533502',
				'name' => 'Novo Horizonte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3533601',
				'name' => 'Nuporanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3533700',
				'name' => 'Ocauçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3533809',
				'name' => 'Óleo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3533908',
				'name' => 'Olímpia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3534005',
				'name' => 'Onda Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3534104',
				'name' => 'Oriente',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3534203',
				'name' => 'Orindiúva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3534302',
				'name' => 'Orlândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3534401',
				'name' => 'Osasco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3534500',
				'name' => 'Oscar Bressane',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3534609',
				'name' => 'Osvaldo Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3534708',
				'name' => 'Ourinhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3534757',
				'name' => 'Ouroeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3534807',
				'name' => 'Ouro Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3534906',
				'name' => 'Pacaembu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3535002',
				'name' => 'Palestina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3535101',
				'name' => 'Palmares Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3535200',
				'name' => 'Palmeira D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3535309',
				'name' => 'Palmital',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3535408',
				'name' => 'Panorama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3535507',
				'name' => 'Paraguaçu Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3535606',
				'name' => 'Paraibuna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3535705',
				'name' => 'Paraíso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3535804',
				'name' => 'Paranapanema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3535903',
				'name' => 'Paranapuã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3536000',
				'name' => 'Parapuã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3536109',
				'name' => 'Pardinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3536208',
				'name' => 'Pariquera-Açu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3536257',
				'name' => 'Parisi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3536307',
				'name' => 'Patrocínio Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3536406',
				'name' => 'Paulicéia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3536505',
				'name' => 'Paulínia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3536570',
				'name' => 'Paulistânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3536604',
				'name' => 'Paulo de Faria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3536703',
				'name' => 'Pederneiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3536802',
				'name' => 'Pedra Bela',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3536901',
				'name' => 'Pedranópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3537008',
				'name' => 'Pedregulho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3537107',
				'name' => 'Pedreira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3537156',
				'name' => 'Pedrinhas Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3537206',
				'name' => 'Pedro de Toledo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3537305',
				'name' => 'Penápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3537404',
				'name' => 'Pereira Barreto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3537503',
				'name' => 'Pereiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3537602',
				'name' => 'Peruíbe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3537701',
				'name' => 'Piacatu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3537800',
				'name' => 'Piedade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3537909',
				'name' => 'Pilar do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3538006',
				'name' => 'Pindamonhangaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3538105',
				'name' => 'Pindorama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3538204',
				'name' => 'Pinhalzinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3538303',
				'name' => 'Piquerobi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3538501',
				'name' => 'Piquete',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3538600',
				'name' => 'Piracaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3538709',
				'name' => 'Piracicaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3538808',
				'name' => 'Piraju',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3538907',
				'name' => 'Pirajuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3539004',
				'name' => 'Pirangi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3539103',
				'name' => 'Pirapora do Bom Jesus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3539202',
				'name' => 'Pirapozinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3539301',
				'name' => 'Pirassununga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3539400',
				'name' => 'Piratininga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3539509',
				'name' => 'Pitangueiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3539608',
				'name' => 'Planalto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3539707',
				'name' => 'Platina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3539806',
				'name' => 'Poá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3539905',
				'name' => 'Poloni',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3540002',
				'name' => 'Pompéia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3540101',
				'name' => 'Pongaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3540200',
				'name' => 'Pontal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3540259',
				'name' => 'Pontalinda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3540309',
				'name' => 'Pontes Gestal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3540408',
				'name' => 'Populina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3540507',
				'name' => 'Porangaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3540606',
				'name' => 'Porto Feliz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3540705',
				'name' => 'Porto Ferreira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3540754',
				'name' => 'Potim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3540804',
				'name' => 'Potirendaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3540853',
				'name' => 'Pracinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3540903',
				'name' => 'Pradópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3541000',
				'name' => 'Praia Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3541059',
				'name' => 'Pratânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3541109',
				'name' => 'Presidente Alves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3541208',
				'name' => 'Presidente Bernardes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3541307',
				'name' => 'Presidente Epitácio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3541406',
				'name' => 'Presidente Prudente',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3541505',
				'name' => 'Presidente Venceslau',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3541604',
				'name' => 'Promissão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3541653',
				'name' => 'Quadra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3541703',
				'name' => 'Quatá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3541802',
				'name' => 'Queiroz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3541901',
				'name' => 'Queluz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3542008',
				'name' => 'Quintana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3542107',
				'name' => 'Rafard',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3542206',
				'name' => 'Rancharia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3542305',
				'name' => 'Redenção da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3542404',
				'name' => 'Regente Feijó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3542503',
				'name' => 'Reginópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3542602',
				'name' => 'Registro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3542701',
				'name' => 'Restinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3542800',
				'name' => 'Ribeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3542909',
				'name' => 'Ribeirão Bonito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3543006',
				'name' => 'Ribeirão Branco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3543105',
				'name' => 'Ribeirão Corrente',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3543204',
				'name' => 'Ribeirão do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3543238',
				'name' => 'Ribeirão dos Índios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3543253',
				'name' => 'Ribeirão Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3543303',
				'name' => 'Ribeirão Pires',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3543402',
				'name' => 'Ribeirão Preto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3543501',
				'name' => 'Riversul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3543600',
				'name' => 'Rifaina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3543709',
				'name' => 'Rincão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3543808',
				'name' => 'Rinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3543907',
				'name' => 'Rio Claro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3544004',
				'name' => 'Rio das Pedras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3544103',
				'name' => 'Rio Grande da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3544202',
				'name' => 'Riolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3544251',
				'name' => 'Rosana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3544301',
				'name' => 'Roseira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3544400',
				'name' => 'Rubiácea',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3544509',
				'name' => 'Rubinéia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3544608',
				'name' => 'Sabino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3544707',
				'name' => 'Sagres',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3544806',
				'name' => 'Sales',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3544905',
				'name' => 'Sales Oliveira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3545001',
				'name' => 'Salesópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3545100',
				'name' => 'Salmourão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3545159',
				'name' => 'Saltinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3545209',
				'name' => 'Salto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3545308',
				'name' => 'Salto de Pirapora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3545407',
				'name' => 'Salto Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3545506',
				'name' => 'Sandovalina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3545605',
				'name' => 'Santa Adélia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3545704',
				'name' => 'Santa Albertina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3545803',
				'name' => 'Santa Bárbara D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3546009',
				'name' => 'Santa Branca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3546108',
				'name' => 'Santa Clara D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3546207',
				'name' => 'Santa Cruz da Conceição',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3546256',
				'name' => 'Santa Cruz da Esperança',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3546306',
				'name' => 'Santa Cruz das Palmeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3546405',
				'name' => 'Santa Cruz do Rio Pardo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3546504',
				'name' => 'Santa Ernestina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3546603',
				'name' => 'Santa Fé do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3546702',
				'name' => 'Santa Gertrudes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3546801',
				'name' => 'Santa Isabel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3546900',
				'name' => 'Santa Lúcia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3547007',
				'name' => 'Santa Maria da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3547106',
				'name' => 'Santa Mercedes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3547205',
				'name' => 'Santana da Ponte Pensa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3547304',
				'name' => 'Santana de Parnaíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3547403',
				'name' => 'Santa Rita D\'Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3547502',
				'name' => 'Santa Rita do Passa Quatro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3547601',
				'name' => 'Santa Rosa de Viterbo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3547650',
				'name' => 'Santa Salete',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3547700',
				'name' => 'Santo Anastácio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3547809',
				'name' => 'Santo André',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3547908',
				'name' => 'Santo Antônio da Alegria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3548005',
				'name' => 'Santo Antônio de Posse',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3548054',
				'name' => 'Santo Antônio do Aracanguá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3548104',
				'name' => 'Santo Antônio do Jardim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3548203',
				'name' => 'Santo Antônio do Pinhal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3548302',
				'name' => 'Santo Expedito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3548401',
				'name' => 'Santópolis do Aguapeí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3548500',
				'name' => 'Santos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3548609',
				'name' => 'São Bento do Sapucaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3548708',
				'name' => 'São Bernardo do Campo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3548807',
				'name' => 'São Caetano do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3548906',
				'name' => 'São Carlos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3549003',
				'name' => 'São Francisco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3549102',
				'name' => 'São João da Boa Vista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3549201',
				'name' => 'São João das Duas Pontes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3549250',
				'name' => 'São João de Iracema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3549300',
				'name' => 'São João do Pau D\'Alho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3549409',
				'name' => 'São Joaquim da Barra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3549508',
				'name' => 'São José da Bela Vista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3549607',
				'name' => 'São José do Barreiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3549706',
				'name' => 'São José do Rio Pardo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3549805',
				'name' => 'São José do Rio Preto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3549904',
				'name' => 'São José dos Campos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3549953',
				'name' => 'São Lourenço da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3550001',
				'name' => 'São Luís do Paraitinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3550100',
				'name' => 'São Manuel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3550209',
				'name' => 'São Miguel Arcanjo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3550308',
				'name' => 'São Paulo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3550407',
				'name' => 'São Pedro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3550506',
				'name' => 'São Pedro do Turvo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3550605',
				'name' => 'São Roque',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3550704',
				'name' => 'São Sebastião',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3550803',
				'name' => 'São Sebastião da Grama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3550902',
				'name' => 'São Simão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3551009',
				'name' => 'São Vicente',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3551108',
				'name' => 'Sarapuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3551207',
				'name' => 'Sarutaiá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3551306',
				'name' => 'Sebastianópolis do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3551405',
				'name' => 'Serra Azul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3551504',
				'name' => 'Serrana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3551603',
				'name' => 'Serra Negra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3551702',
				'name' => 'Sertãozinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3551801',
				'name' => 'Sete Barras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3551900',
				'name' => 'Severínia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3552007',
				'name' => 'Silveiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3552106',
				'name' => 'Socorro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3552205',
				'name' => 'Sorocaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3552304',
				'name' => 'Sud Mennucci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3552403',
				'name' => 'Sumaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3552502',
				'name' => 'Suzano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3552551',
				'name' => 'Suzanápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3552601',
				'name' => 'Tabapuã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3552700',
				'name' => 'Tabatinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3552809',
				'name' => 'Taboão da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3552908',
				'name' => 'Taciba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3553005',
				'name' => 'Taguaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3553104',
				'name' => 'Taiaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3553203',
				'name' => 'Taiúva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3553302',
				'name' => 'Tambaú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3553401',
				'name' => 'Tanabi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3553500',
				'name' => 'Tapiraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3553609',
				'name' => 'Tapiratiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3553658',
				'name' => 'Taquaral',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3553708',
				'name' => 'Taquaritinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3553807',
				'name' => 'Taquarituba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3553856',
				'name' => 'Taquarivaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3553906',
				'name' => 'Tarabai',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3553955',
				'name' => 'Tarumã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3554003',
				'name' => 'Tatuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3554102',
				'name' => 'Taubaté',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3554201',
				'name' => 'Tejupá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3554300',
				'name' => 'Teodoro Sampaio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3554409',
				'name' => 'Terra Roxa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3554508',
				'name' => 'Tietê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3554607',
				'name' => 'Timburi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3554656',
				'name' => 'Torre de Pedra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3554706',
				'name' => 'Torrinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3554755',
				'name' => 'Trabiju',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3554805',
				'name' => 'Tremembé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3554904',
				'name' => 'Três Fronteiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3554953',
				'name' => 'Tuiuti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3555000',
				'name' => 'Tupã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3555109',
				'name' => 'Tupi Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3555208',
				'name' => 'Turiúba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3555307',
				'name' => 'Turmalina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3555356',
				'name' => 'Ubarana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3555406',
				'name' => 'Ubatuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3555505',
				'name' => 'Ubirajara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3555604',
				'name' => 'Uchoa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3555703',
				'name' => 'União Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3555802',
				'name' => 'Urânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3555901',
				'name' => 'Uru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3556008',
				'name' => 'Urupês',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3556107',
				'name' => 'Valentim Gentil',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3556206',
				'name' => 'Valinhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3556305',
				'name' => 'Valparaíso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3556354',
				'name' => 'Vargem',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3556404',
				'name' => 'Vargem Grande do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3556453',
				'name' => 'Vargem Grande Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3556503',
				'name' => 'Várzea Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3556602',
				'name' => 'Vera Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3556701',
				'name' => 'Vinhedo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3556800',
				'name' => 'Viradouro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3556909',
				'name' => 'Vista Alegre do Alto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3556958',
				'name' => 'Vitória Brasil',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3557006',
				'name' => 'Votorantim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3557105',
				'name' => 'Votuporanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3557154',
				'name' => 'Zacarias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3557204',
				'name' => 'Chavantes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3557303',
				'name' => 'Estiva Gerbi',
				'state_id' => $state->id
			]
		]);
    }
}
