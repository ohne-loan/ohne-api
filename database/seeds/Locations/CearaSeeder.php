<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class CearaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Ceará',
			'uf' => 'CE'
		]);

		City::insert([
			[
				'ibge_code' => '2300101',
				'name' => 'Abaiara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2300150',
				'name' => 'Acarape',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2300200',
				'name' => 'Acaraú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2300309',
				'name' => 'Acopiara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2300408',
				'name' => 'Aiuaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2300507',
				'name' => 'Alcântaras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2300606',
				'name' => 'Altaneira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2300705',
				'name' => 'Alto Santo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2300754',
				'name' => 'Amontada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2300804',
				'name' => 'Antonina do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2300903',
				'name' => 'Apuiarés',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2301000',
				'name' => 'Aquiraz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2301109',
				'name' => 'Aracati',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2301208',
				'name' => 'Aracoiaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2301257',
				'name' => 'Ararendá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2301307',
				'name' => 'Araripe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2301406',
				'name' => 'Aratuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2301505',
				'name' => 'Arneiroz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2301604',
				'name' => 'Assaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2301703',
				'name' => 'Aurora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2301802',
				'name' => 'Baixio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2301851',
				'name' => 'Banabuiú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2301901',
				'name' => 'Barbalha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2301950',
				'name' => 'Barreira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2302008',
				'name' => 'Barro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2302057',
				'name' => 'Barroquinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2302107',
				'name' => 'Baturité',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2302206',
				'name' => 'Beberibe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2302305',
				'name' => 'Bela Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2302404',
				'name' => 'Boa Viagem',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2302503',
				'name' => 'Brejo Santo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2302602',
				'name' => 'Camocim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2302701',
				'name' => 'Campos Sales',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2302800',
				'name' => 'Canindé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2302909',
				'name' => 'Capistrano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2303006',
				'name' => 'Caridade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2303105',
				'name' => 'Cariré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2303204',
				'name' => 'Caririaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2303303',
				'name' => 'Cariús',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2303402',
				'name' => 'Carnaubal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2303501',
				'name' => 'Cascavel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2303600',
				'name' => 'Catarina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2303659',
				'name' => 'Catunda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2303709',
				'name' => 'Caucaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2303808',
				'name' => 'Cedro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2303907',
				'name' => 'Chaval',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2303931',
				'name' => 'Choró',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2303956',
				'name' => 'Chorozinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304004',
				'name' => 'Coreaú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304103',
				'name' => 'Crateús',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304202',
				'name' => 'Crato',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304236',
				'name' => 'Croatá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304251',
				'name' => 'Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304269',
				'name' => 'Deputado Irapuan Pinheiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304277',
				'name' => 'Ererê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304285',
				'name' => 'Eusébio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304301',
				'name' => 'Farias Brito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304350',
				'name' => 'Forquilha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304400',
				'name' => 'Fortaleza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304459',
				'name' => 'Fortim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304509',
				'name' => 'Frecheirinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304608',
				'name' => 'General Sampaio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304657',
				'name' => 'Graça',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304707',
				'name' => 'Granja',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304806',
				'name' => 'Granjeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304905',
				'name' => 'Groaíras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2304954',
				'name' => 'Guaiúba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305001',
				'name' => 'Guaraciaba do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305100',
				'name' => 'Guaramiranga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305209',
				'name' => 'Hidrolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305233',
				'name' => 'Horizonte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305266',
				'name' => 'Ibaretama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305308',
				'name' => 'Ibiapina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305332',
				'name' => 'Ibicuitinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305357',
				'name' => 'Icapuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305407',
				'name' => 'Icó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305506',
				'name' => 'Iguatu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305605',
				'name' => 'Independência',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305654',
				'name' => 'Ipaporanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305704',
				'name' => 'Ipaumirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305803',
				'name' => 'Ipu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2305902',
				'name' => 'Ipueiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2306009',
				'name' => 'Iracema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2306108',
				'name' => 'Irauçuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2306207',
				'name' => 'Itaiçaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2306256',
				'name' => 'Itaitinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2306306',
				'name' => 'Itapagé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2306405',
				'name' => 'Itapipoca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2306504',
				'name' => 'Itapiúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2306553',
				'name' => 'Itarema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2306603',
				'name' => 'Itatira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2306702',
				'name' => 'Jaguaretama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2306801',
				'name' => 'Jaguaribara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2306900',
				'name' => 'Jaguaribe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2307007',
				'name' => 'Jaguaruana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2307106',
				'name' => 'Jardim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2307205',
				'name' => 'Jati',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2307254',
				'name' => 'Jijoca de Jericoacoara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2307304',
				'name' => 'Juazeiro do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2307403',
				'name' => 'Jucás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2307502',
				'name' => 'Lavras da Mangabeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2307601',
				'name' => 'Limoeiro do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2307635',
				'name' => 'Madalena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2307650',
				'name' => 'Maracanaú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2307700',
				'name' => 'Maranguape',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2307809',
				'name' => 'Marco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2307908',
				'name' => 'Martinópole',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2308005',
				'name' => 'Massapê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2308104',
				'name' => 'Mauriti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2308203',
				'name' => 'Meruoca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2308302',
				'name' => 'Milagres',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2308351',
				'name' => 'Milhã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2308377',
				'name' => 'Miraíma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2308401',
				'name' => 'Missão Velha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2308500',
				'name' => 'Mombaça',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2308609',
				'name' => 'Monsenhor Tabosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2308708',
				'name' => 'Morada Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2308807',
				'name' => 'Moraújo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2308906',
				'name' => 'Morrinhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2309003',
				'name' => 'Mucambo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2309102',
				'name' => 'Mulungu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2309201',
				'name' => 'Nova Olinda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2309300',
				'name' => 'Nova Russas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2309409',
				'name' => 'Novo Oriente',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2309458',
				'name' => 'Ocara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2309508',
				'name' => 'Orós',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2309607',
				'name' => 'Pacajus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2309706',
				'name' => 'Pacatuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2309805',
				'name' => 'Pacoti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2309904',
				'name' => 'Pacujá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2310001',
				'name' => 'Palhano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2310100',
				'name' => 'Palmácia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2310209',
				'name' => 'Paracuru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2310258',
				'name' => 'Paraipaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2310308',
				'name' => 'Parambu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2310407',
				'name' => 'Paramoti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2310506',
				'name' => 'Pedra Branca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2310605',
				'name' => 'Penaforte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2310704',
				'name' => 'Pentecoste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2310803',
				'name' => 'Pereiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2310852',
				'name' => 'Pindoretama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2310902',
				'name' => 'Piquet Carneiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2310951',
				'name' => 'Pires Ferreira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2311009',
				'name' => 'Poranga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2311108',
				'name' => 'Porteiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2311207',
				'name' => 'Potengi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2311231',
				'name' => 'Potiretama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2311264',
				'name' => 'Quiterianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2311306',
				'name' => 'Quixadá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2311355',
				'name' => 'Quixelô',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2311405',
				'name' => 'Quixeramobim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2311504',
				'name' => 'Quixeré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2311603',
				'name' => 'Redenção',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2311702',
				'name' => 'Reriutaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2311801',
				'name' => 'Russas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2311900',
				'name' => 'Saboeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2311959',
				'name' => 'Salitre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2312007',
				'name' => 'Santana do Acaraú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2312106',
				'name' => 'Santana do Cariri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2312205',
				'name' => 'Santa Quitéria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2312304',
				'name' => 'São Benedito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2312403',
				'name' => 'São Gonçalo do Amarante',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2312502',
				'name' => 'São João do Jaguaribe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2312601',
				'name' => 'São Luís do Curu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2312700',
				'name' => 'Senador Pompeu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2312809',
				'name' => 'Senador Sá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2312908',
				'name' => 'Sobral',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313005',
				'name' => 'Solonópole',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313104',
				'name' => 'Tabuleiro do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313203',
				'name' => 'Tamboril',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313252',
				'name' => 'Tarrafas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313302',
				'name' => 'Tauá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313351',
				'name' => 'Tejuçuoca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313401',
				'name' => 'Tianguá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313500',
				'name' => 'Trairi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313559',
				'name' => 'Tururu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313609',
				'name' => 'Ubajara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313708',
				'name' => 'Umari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313757',
				'name' => 'Umirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313807',
				'name' => 'Uruburetama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313906',
				'name' => 'Uruoca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2313955',
				'name' => 'Varjota',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2314003',
				'name' => 'Várzea Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2314102',
				'name' => 'Viçosa do Ceará',
				'state_id' => $state->id
			]
		]);
    }
}
