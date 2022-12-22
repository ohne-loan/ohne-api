<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class PernambucoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Pernambuco',
			'uf' => 'PE'
		]);

		City::insert([
			[
				'ibge_code' => '2600054',
				'name' => 'Abreu e Lima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2600104',
				'name' => 'Afogados da Ingazeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2600203',
				'name' => 'Afrânio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2600302',
				'name' => 'Agrestina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2600401',
				'name' => 'Água Preta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2600500',
				'name' => 'Águas Belas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2600609',
				'name' => 'Alagoinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2600708',
				'name' => 'Aliança',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2600807',
				'name' => 'Altinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2600906',
				'name' => 'Amaraji',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2601003',
				'name' => 'Angelim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2601052',
				'name' => 'Araçoiaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2601102',
				'name' => 'Araripina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2601201',
				'name' => 'Arcoverde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2601300',
				'name' => 'Barra de Guabiraba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2601409',
				'name' => 'Barreiros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2601508',
				'name' => 'Belém de Maria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2601607',
				'name' => 'Belém do São Francisco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2601706',
				'name' => 'Belo Jardim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2601805',
				'name' => 'Betânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2601904',
				'name' => 'Bezerros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2602001',
				'name' => 'Bodocó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2602100',
				'name' => 'Bom Conselho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2602209',
				'name' => 'Bom Jardim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2602308',
				'name' => 'Bonito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2602407',
				'name' => 'Brejão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2602506',
				'name' => 'Brejinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2602605',
				'name' => 'Brejo da Madre de Deus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2602704',
				'name' => 'Buenos Aires',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2602803',
				'name' => 'Buíque',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2602902',
				'name' => 'Cabo de Santo Agostinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2603009',
				'name' => 'Cabrobó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2603108',
				'name' => 'Cachoeirinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2603207',
				'name' => 'Caetés',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2603306',
				'name' => 'Calçado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2603405',
				'name' => 'Calumbi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2603454',
				'name' => 'Camaragibe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2603504',
				'name' => 'Camocim de São Félix',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2603603',
				'name' => 'Camutanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2603702',
				'name' => 'Canhotinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2603801',
				'name' => 'Capoeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2603900',
				'name' => 'Carnaíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2603926',
				'name' => 'Carnaubeira da Penha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2604007',
				'name' => 'Carpina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2604106',
				'name' => 'Caruaru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2604155',
				'name' => 'Casinhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2604205',
				'name' => 'Catende',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2604304',
				'name' => 'Cedro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2604403',
				'name' => 'Chã de Alegria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2604502',
				'name' => 'Chã Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2604601',
				'name' => 'Condado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2604700',
				'name' => 'Correntes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2604809',
				'name' => 'Cortês',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2604908',
				'name' => 'Cumaru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2605004',
				'name' => 'Cupira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2605103',
				'name' => 'Custódia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2605152',
				'name' => 'Dormentes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2605202',
				'name' => 'Escada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2605301',
				'name' => 'Exu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2605400',
				'name' => 'Feira Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2605459',
				'name' => 'Fernando de Noronha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2605509',
				'name' => 'Ferreiros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2605608',
				'name' => 'Flores',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2605707',
				'name' => 'Floresta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2605806',
				'name' => 'Frei Miguelinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2605905',
				'name' => 'Gameleira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2606002',
				'name' => 'Garanhuns',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2606101',
				'name' => 'Glória do Goitá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2606200',
				'name' => 'Goiana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2606309',
				'name' => 'Granito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2606408',
				'name' => 'Gravatá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2606507',
				'name' => 'Iati',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2606606',
				'name' => 'Ibimirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2606705',
				'name' => 'Ibirajuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2606804',
				'name' => 'Igarassu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2606903',
				'name' => 'Iguaraci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2607000',
				'name' => 'Inajá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2607109',
				'name' => 'Ingazeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2607208',
				'name' => 'Ipojuca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2607307',
				'name' => 'Ipubi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2607406',
				'name' => 'Itacuruba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2607505',
				'name' => 'Itaíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2607604',
				'name' => 'Ilha de Itamaracá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2607653',
				'name' => 'Itambé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2607703',
				'name' => 'Itapetim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2607752',
				'name' => 'Itapissuma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2607802',
				'name' => 'Itaquitinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2607901',
				'name' => 'Jaboatão dos Guararapes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2607950',
				'name' => 'Jaqueira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2608008',
				'name' => 'Jataúba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2608057',
				'name' => 'Jatobá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2608107',
				'name' => 'João Alfredo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2608206',
				'name' => 'Joaquim Nabuco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2608255',
				'name' => 'Jucati',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2608305',
				'name' => 'Jupi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2608404',
				'name' => 'Jurema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2608453',
				'name' => 'Lagoa do Carro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2608503',
				'name' => 'Lagoa de Itaenga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2608602',
				'name' => 'Lagoa do Ouro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2608701',
				'name' => 'Lagoa dos Gatos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2608750',
				'name' => 'Lagoa Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2608800',
				'name' => 'Lajedo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2608909',
				'name' => 'Limoeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2609006',
				'name' => 'Macaparana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2609105',
				'name' => 'Machados',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2609154',
				'name' => 'Manari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2609204',
				'name' => 'Maraial',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2609303',
				'name' => 'Mirandiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2609402',
				'name' => 'Moreno',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2609501',
				'name' => 'Nazaré da Mata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2609600',
				'name' => 'Olinda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2609709',
				'name' => 'Orobó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2609808',
				'name' => 'Orocó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2609907',
				'name' => 'Ouricuri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2610004',
				'name' => 'Palmares',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2610103',
				'name' => 'Palmeirina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2610202',
				'name' => 'Panelas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2610301',
				'name' => 'Paranatama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2610400',
				'name' => 'Parnamirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2610509',
				'name' => 'Passira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2610608',
				'name' => 'Paudalho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2610707',
				'name' => 'Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2610806',
				'name' => 'Pedra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2610905',
				'name' => 'Pesqueira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2611002',
				'name' => 'Petrolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2611101',
				'name' => 'Petrolina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2611200',
				'name' => 'Poção',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2611309',
				'name' => 'Pombos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2611408',
				'name' => 'Primavera',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2611507',
				'name' => 'Quipapá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2611533',
				'name' => 'Quixaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2611606',
				'name' => 'Recife',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2611705',
				'name' => 'Riacho das Almas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2611804',
				'name' => 'Ribeirão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2611903',
				'name' => 'Rio Formoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2612000',
				'name' => 'Sairé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2612109',
				'name' => 'Salgadinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2612208',
				'name' => 'Salgueiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2612307',
				'name' => 'Saloá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2612406',
				'name' => 'Sanharó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2612455',
				'name' => 'Santa Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2612471',
				'name' => 'Santa Cruz da Baixa Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2612505',
				'name' => 'Santa Cruz do Capibaribe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2612554',
				'name' => 'Santa Filomena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2612604',
				'name' => 'Santa Maria da Boa Vista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2612703',
				'name' => 'Santa Maria do Cambucá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2612802',
				'name' => 'Santa Terezinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2612901',
				'name' => 'São Benedito do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2613008',
				'name' => 'São Bento do Una',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2613107',
				'name' => 'São Caitano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2613206',
				'name' => 'São João',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2613305',
				'name' => 'São Joaquim do Monte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2613404',
				'name' => 'São José da Coroa Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2613503',
				'name' => 'São José do Belmonte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2613602',
				'name' => 'São José do Egito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2613701',
				'name' => 'São Lourenço da Mata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2613800',
				'name' => 'São Vicente Ferrer',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2613909',
				'name' => 'Serra Talhada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2614006',
				'name' => 'Serrita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2614105',
				'name' => 'Sertânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2614204',
				'name' => 'Sirinhaém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2614303',
				'name' => 'Moreilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2614402',
				'name' => 'Solidão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2614501',
				'name' => 'Surubim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2614600',
				'name' => 'Tabira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2614709',
				'name' => 'Tacaimbó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2614808',
				'name' => 'Tacaratu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2614857',
				'name' => 'Tamandaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2615003',
				'name' => 'Taquaritinga do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2615102',
				'name' => 'Terezinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2615201',
				'name' => 'Terra Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2615300',
				'name' => 'Timbaúba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2615409',
				'name' => 'Toritama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2615508',
				'name' => 'Tracunhaém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2615607',
				'name' => 'Trindade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2615706',
				'name' => 'Triunfo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2615805',
				'name' => 'Tupanatinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2615904',
				'name' => 'Tuparetama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2616001',
				'name' => 'Venturosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2616100',
				'name' => 'Verdejante',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2616183',
				'name' => 'Vertente do Lério',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2616209',
				'name' => 'Vertentes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2616308',
				'name' => 'Vicência',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2616407',
				'name' => 'Vitória de Santo Antão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2616506',
				'name' => 'Xexéu',
				'state_id' => $state->id
			]
		]);
    }
}
