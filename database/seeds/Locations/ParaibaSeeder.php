<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class ParaibaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Paraíba',
			'uf' => 'PB'
		]);

		City::insert([
			[
				'ibge_code' => '2500106',
				'name' => 'Água Branca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2500205',
				'name' => 'Aguiar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2500304',
				'name' => 'Alagoa Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2500403',
				'name' => 'Alagoa Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2500502',
				'name' => 'Alagoinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2500536',
				'name' => 'Alcantil',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2500577',
				'name' => 'Algodão de Jandaíra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2500601',
				'name' => 'Alhandra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2500700',
				'name' => 'São João do Rio do Peixe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2500734',
				'name' => 'Amparo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2500775',
				'name' => 'Aparecida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2500809',
				'name' => 'Araçagi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2500908',
				'name' => 'Arara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2501005',
				'name' => 'Araruna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2501104',
				'name' => 'Areia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2501153',
				'name' => 'Areia de Baraúnas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2501203',
				'name' => 'Areial',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2501302',
				'name' => 'Aroeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2501351',
				'name' => 'Assunção',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2501401',
				'name' => 'Baía da Traição',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2501500',
				'name' => 'Bananeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2501534',
				'name' => 'Baraúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2501575',
				'name' => 'Barra de Santana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2501609',
				'name' => 'Barra de Santa Rosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2501708',
				'name' => 'Barra de São Miguel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2501807',
				'name' => 'Bayeux',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2501906',
				'name' => 'Belém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2502003',
				'name' => 'Belém do Brejo do Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2502052',
				'name' => 'Bernardino Batista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2502102',
				'name' => 'Boa Ventura',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2502151',
				'name' => 'Boa Vista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2502201',
				'name' => 'Bom Jesus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2502300',
				'name' => 'Bom Sucesso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2502409',
				'name' => 'Bonito de Santa Fé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2502508',
				'name' => 'Boqueirão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2502607',
				'name' => 'Igaracy',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2502706',
				'name' => 'Borborema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2502805',
				'name' => 'Brejo do Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2502904',
				'name' => 'Brejo dos Santos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2503001',
				'name' => 'Caaporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2503100',
				'name' => 'Cabaceiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2503209',
				'name' => 'Cabedelo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2503308',
				'name' => 'Cachoeira dos Índios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2503407',
				'name' => 'Cacimba de Areia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2503506',
				'name' => 'Cacimba de Dentro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2503555',
				'name' => 'Cacimbas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2503605',
				'name' => 'Caiçara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2503704',
				'name' => 'Cajazeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2503753',
				'name' => 'Cajazeirinhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2503803',
				'name' => 'Caldas Brandão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2503902',
				'name' => 'Camalaú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504009',
				'name' => 'Campina Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504033',
				'name' => 'Capim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504074',
				'name' => 'Caraúbas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504108',
				'name' => 'Carrapateira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504157',
				'name' => 'Casserengue',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504207',
				'name' => 'Catingueira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504306',
				'name' => 'Catolé do Rocha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504355',
				'name' => 'Caturité',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504405',
				'name' => 'Conceição',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504504',
				'name' => 'Condado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504603',
				'name' => 'Conde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504702',
				'name' => 'Congo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504801',
				'name' => 'Coremas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504850',
				'name' => 'Coxixola',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2504900',
				'name' => 'Cruz do Espírito Santo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2505006',
				'name' => 'Cubati',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2505105',
				'name' => 'Cuité',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2505204',
				'name' => 'Cuitegi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2505238',
				'name' => 'Cuité de Mamanguape',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2505279',
				'name' => 'Curral de Cima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2505303',
				'name' => 'Curral Velho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2505352',
				'name' => 'Damião',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2505402',
				'name' => 'Desterro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2505501',
				'name' => 'Vista Serrana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2505600',
				'name' => 'Diamante',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2505709',
				'name' => 'Dona Inês',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2505808',
				'name' => 'Duas Estradas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2505907',
				'name' => 'Emas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2506004',
				'name' => 'Esperança',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2506103',
				'name' => 'Fagundes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2506202',
				'name' => 'Frei Martinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2506251',
				'name' => 'Gado Bravo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2506301',
				'name' => 'Guarabira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2506400',
				'name' => 'Gurinhém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2506509',
				'name' => 'Gurjão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2506608',
				'name' => 'Ibiara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2506707',
				'name' => 'Imaculada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2506806',
				'name' => 'Ingá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2506905',
				'name' => 'Itabaiana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2507002',
				'name' => 'Itaporanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2507101',
				'name' => 'Itapororoca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2507200',
				'name' => 'Itatuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2507309',
				'name' => 'Jacaraú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2507408',
				'name' => 'Jericó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2507507',
				'name' => 'João Pessoa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2507606',
				'name' => 'Juarez Távora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2507705',
				'name' => 'Juazeirinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2507804',
				'name' => 'Junco do Seridó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2507903',
				'name' => 'Juripiranga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2508000',
				'name' => 'Juru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2508109',
				'name' => 'Lagoa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2508208',
				'name' => 'Lagoa de Dentro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2508307',
				'name' => 'Lagoa Seca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2508406',
				'name' => 'Lastro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2508505',
				'name' => 'Livramento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2508554',
				'name' => 'Logradouro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2508604',
				'name' => 'Lucena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2508703',
				'name' => 'Mãe D\'Água',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2508802',
				'name' => 'Malta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2508901',
				'name' => 'Mamanguape',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509008',
				'name' => 'Manaíra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509057',
				'name' => 'Marcação',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509107',
				'name' => 'Mari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509156',
				'name' => 'Marizópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509206',
				'name' => 'Massaranduba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509305',
				'name' => 'Mataraca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509339',
				'name' => 'Matinhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509370',
				'name' => 'Mato Grosso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509396',
				'name' => 'Maturéia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509404',
				'name' => 'Mogeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509503',
				'name' => 'Montadas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509602',
				'name' => 'Monte Horebe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509701',
				'name' => 'Monteiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509800',
				'name' => 'Mulungu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2509909',
				'name' => 'Natuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2510006',
				'name' => 'Nazarezinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2510105',
				'name' => 'Nova Floresta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2510204',
				'name' => 'Nova Olinda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2510303',
				'name' => 'Nova Palmeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2510402',
				'name' => 'Olho D\'Água',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2510501',
				'name' => 'Olivedos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2510600',
				'name' => 'Ouro Velho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2510659',
				'name' => 'Parari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2510709',
				'name' => 'Passagem',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2510808',
				'name' => 'Patos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2510907',
				'name' => 'Paulista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2511004',
				'name' => 'Pedra Branca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2511103',
				'name' => 'Pedra Lavrada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2511202',
				'name' => 'Pedras de Fogo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2511301',
				'name' => 'Piancó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2511400',
				'name' => 'Picuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2511509',
				'name' => 'Pilar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2511608',
				'name' => 'Pilões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2511707',
				'name' => 'Pilõezinhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2511806',
				'name' => 'Pirpirituba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2511905',
				'name' => 'Pitimbu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512002',
				'name' => 'Pocinhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512036',
				'name' => 'Poço Dantas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512077',
				'name' => 'Poço de José de Moura',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512101',
				'name' => 'Pombal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512200',
				'name' => 'Prata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512309',
				'name' => 'Princesa Isabel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512408',
				'name' => 'Puxinanã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512507',
				'name' => 'Queimadas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512606',
				'name' => 'Quixabá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512705',
				'name' => 'Remígio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512721',
				'name' => 'Pedro Régis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512747',
				'name' => 'Riachão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512754',
				'name' => 'Riachão do Bacamarte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512762',
				'name' => 'Riachão do Poço',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512788',
				'name' => 'Riacho de Santo Antônio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512804',
				'name' => 'Riacho dos Cavalos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2512903',
				'name' => 'Rio Tinto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513000',
				'name' => 'Salgadinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513109',
				'name' => 'Salgado de São Félix',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513158',
				'name' => 'Santa Cecília',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513208',
				'name' => 'Santa Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513307',
				'name' => 'Santa Helena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513356',
				'name' => 'Santa Inês',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513406',
				'name' => 'Santa Luzia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513505',
				'name' => 'Santana de Mangueira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513604',
				'name' => 'Santana dos Garrotes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513653',
				'name' => 'Joca Claudino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513703',
				'name' => 'Santa Rita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513802',
				'name' => 'Santa Teresinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513851',
				'name' => 'Santo André',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513901',
				'name' => 'São Bento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513927',
				'name' => 'São Bentinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513943',
				'name' => 'São Domingos do Cariri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513968',
				'name' => 'São Domingos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2513984',
				'name' => 'São Francisco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2514008',
				'name' => 'São João do Cariri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2514107',
				'name' => 'São João do Tigre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2514206',
				'name' => 'São José da Lagoa Tapada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2514305',
				'name' => 'São José de Caiana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2514404',
				'name' => 'São José de Espinharas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2514453',
				'name' => 'São José dos Ramos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2514503',
				'name' => 'São José de Piranhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2514552',
				'name' => 'São José de Princesa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2514602',
				'name' => 'São José do Bonfim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2514651',
				'name' => 'São José do Brejo do Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2514701',
				'name' => 'São José do Sabugi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2514800',
				'name' => 'São José dos Cordeiros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2514909',
				'name' => 'São Mamede',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2515005',
				'name' => 'São Miguel de Taipu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2515104',
				'name' => 'São Sebastião de Lagoa de Roça',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2515203',
				'name' => 'São Sebastião do Umbuzeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2515302',
				'name' => 'Sapé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2515401',
				'name' => 'São Vicente do Seridó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2515500',
				'name' => 'Serra Branca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2515609',
				'name' => 'Serra da Raiz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2515708',
				'name' => 'Serra Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2515807',
				'name' => 'Serra Redonda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2515906',
				'name' => 'Serraria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2515930',
				'name' => 'Sertãozinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2515971',
				'name' => 'Sobrado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2516003',
				'name' => 'Solânea',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2516102',
				'name' => 'Soledade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2516151',
				'name' => 'Sossêgo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2516201',
				'name' => 'Sousa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2516300',
				'name' => 'Sumé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2516409',
				'name' => 'Tacima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2516508',
				'name' => 'Taperoá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2516607',
				'name' => 'Tavares',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2516706',
				'name' => 'Teixeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2516755',
				'name' => 'Tenório',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2516805',
				'name' => 'Triunfo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2516904',
				'name' => 'Uiraúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2517001',
				'name' => 'Umbuzeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2517100',
				'name' => 'Várzea',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2517209',
				'name' => 'Vieirópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2517407',
				'name' => 'Zabelê',
				'state_id' => $state->id
			]
		]);
    }
}
