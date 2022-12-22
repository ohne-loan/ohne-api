<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class RioGrandeDoNorteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Rio Grande do Norte',
			'uf' => 'RN'
		]);

		City::insert([
			[
				'ibge_code' => '2400109',
				'name' => 'Acari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2400208',
				'name' => 'Açu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2400307',
				'name' => 'Afonso Bezerra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2400406',
				'name' => 'Água Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2400505',
				'name' => 'Alexandria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2400604',
				'name' => 'Almino Afonso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2400703',
				'name' => 'Alto do Rodrigues',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2400802',
				'name' => 'Angicos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2400901',
				'name' => 'Antônio Martins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2401008',
				'name' => 'Apodi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2401107',
				'name' => 'Areia Branca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2401206',
				'name' => 'Arês',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2401305',
				'name' => 'Augusto Severo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2401404',
				'name' => 'Baía Formosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2401453',
				'name' => 'Baraúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2401503',
				'name' => 'Barcelona',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2401602',
				'name' => 'Bento Fernandes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2401651',
				'name' => 'Bodó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2401701',
				'name' => 'Bom Jesus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2401800',
				'name' => 'Brejinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2401859',
				'name' => 'Caiçara do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2401909',
				'name' => 'Caiçara do Rio do Vento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2402006',
				'name' => 'Caicó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2402105',
				'name' => 'Campo Redondo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2402204',
				'name' => 'Canguaretama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2402303',
				'name' => 'Caraúbas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2402402',
				'name' => 'Carnaúba dos Dantas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2402501',
				'name' => 'Carnaubais',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2402600',
				'name' => 'Ceará-Mirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2402709',
				'name' => 'Cerro Corá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2402808',
				'name' => 'Coronel Ezequiel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2402907',
				'name' => 'Coronel João Pessoa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2403004',
				'name' => 'Cruzeta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2403103',
				'name' => 'Currais Novos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2403202',
				'name' => 'Doutor Severiano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2403251',
				'name' => 'Parnamirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2403301',
				'name' => 'Encanto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2403400',
				'name' => 'Equador',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2403509',
				'name' => 'Espírito Santo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2403608',
				'name' => 'Extremoz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2403707',
				'name' => 'Felipe Guerra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2403756',
				'name' => 'Fernando Pedroza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2403806',
				'name' => 'Florânia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2403905',
				'name' => 'Francisco Dantas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2404002',
				'name' => 'Frutuoso Gomes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2404101',
				'name' => 'Galinhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2404200',
				'name' => 'Goianinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2404309',
				'name' => 'Governador Dix-Sept Rosado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2404408',
				'name' => 'Grossos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2404507',
				'name' => 'Guamaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2404606',
				'name' => 'Ielmo Marinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2404705',
				'name' => 'Ipanguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2404804',
				'name' => 'Ipueira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2404853',
				'name' => 'Itajá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2404903',
				'name' => 'Itaú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2405009',
				'name' => 'Jaçanã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2405108',
				'name' => 'Jandaíra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2405207',
				'name' => 'Janduís',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2405306',
				'name' => 'Januário Cicco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2405405',
				'name' => 'Japi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2405504',
				'name' => 'Jardim de Angicos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2405603',
				'name' => 'Jardim de Piranhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2405702',
				'name' => 'Jardim do Seridó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2405801',
				'name' => 'João Câmara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2405900',
				'name' => 'João Dias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2406007',
				'name' => 'José da Penha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2406106',
				'name' => 'Jucurutu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2406155',
				'name' => 'Jundiá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2406205',
				'name' => 'Lagoa D\'Anta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2406304',
				'name' => 'Lagoa de Pedras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2406403',
				'name' => 'Lagoa de Velhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2406502',
				'name' => 'Lagoa Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2406601',
				'name' => 'Lagoa Salgada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2406700',
				'name' => 'Lajes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2406809',
				'name' => 'Lajes Pintadas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2406908',
				'name' => 'Lucrécia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2407005',
				'name' => 'Luís Gomes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2407104',
				'name' => 'Macaíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2407203',
				'name' => 'Macau',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2407252',
				'name' => 'Major Sales',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2407302',
				'name' => 'Marcelino Vieira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2407401',
				'name' => 'Martins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2407500',
				'name' => 'Maxaranguape',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2407609',
				'name' => 'Messias Targino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2407708',
				'name' => 'Montanhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2407807',
				'name' => 'Monte Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2407906',
				'name' => 'Monte das Gameleiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2408003',
				'name' => 'Mossoró',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2408102',
				'name' => 'Natal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2408201',
				'name' => 'Nísia Floresta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2408300',
				'name' => 'Nova Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2408409',
				'name' => 'Olho-D\'Água do Borges',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2408508',
				'name' => 'Ouro Branco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2408607',
				'name' => 'Paraná',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2408706',
				'name' => 'Paraú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2408805',
				'name' => 'Parazinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2408904',
				'name' => 'Parelhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2408953',
				'name' => 'Rio do Fogo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2409100',
				'name' => 'Passa e Fica',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2409209',
				'name' => 'Passagem',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2409308',
				'name' => 'Patu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2409332',
				'name' => 'Santa Maria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2409407',
				'name' => 'Pau dos Ferros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2409506',
				'name' => 'Pedra Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2409605',
				'name' => 'Pedra Preta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2409704',
				'name' => 'Pedro Avelino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2409803',
				'name' => 'Pedro Velho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2409902',
				'name' => 'Pendências',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2410009',
				'name' => 'Pilões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2410108',
				'name' => 'Poço Branco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2410207',
				'name' => 'Portalegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2410256',
				'name' => 'Porto do Mangue',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2410306',
				'name' => 'Presidente Juscelino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2410405',
				'name' => 'Pureza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2410504',
				'name' => 'Rafael Fernandes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2410603',
				'name' => 'Rafael Godeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2410702',
				'name' => 'Riacho da Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2410801',
				'name' => 'Riacho de Santana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2410900',
				'name' => 'Riachuelo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2411007',
				'name' => 'Rodolfo Fernandes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2411056',
				'name' => 'Tibau',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2411106',
				'name' => 'Ruy Barbosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2411205',
				'name' => 'Santa Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2411403',
				'name' => 'Santana do Matos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2411429',
				'name' => 'Santana do Seridó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2411502',
				'name' => 'Santo Antônio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2411601',
				'name' => 'São Bento do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2411700',
				'name' => 'São Bento do Trairí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2411809',
				'name' => 'São Fernando',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2411908',
				'name' => 'São Francisco do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2412005',
				'name' => 'São Gonçalo do Amarante',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2412104',
				'name' => 'São João do Sabugi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2412203',
				'name' => 'São José de Mipibu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2412302',
				'name' => 'São José do Campestre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2412401',
				'name' => 'São José do Seridó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2412500',
				'name' => 'São Miguel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2412559',
				'name' => 'São Miguel do Gostoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2412609',
				'name' => 'São Paulo do Potengi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2412708',
				'name' => 'São Pedro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2412807',
				'name' => 'São Rafael',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2412906',
				'name' => 'São Tomé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2413003',
				'name' => 'São Vicente',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2413102',
				'name' => 'Senador Elói de Souza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2413201',
				'name' => 'Senador Georgino Avelino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2413300',
				'name' => 'Serra de São Bento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2413359',
				'name' => 'Serra do Mel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2413409',
				'name' => 'Serra Negra do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2413508',
				'name' => 'Serrinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2413557',
				'name' => 'Serrinha dos Pintos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2413607',
				'name' => 'Severiano Melo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2413706',
				'name' => 'Sítio Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2413805',
				'name' => 'Taboleiro Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2413904',
				'name' => 'Taipu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2414001',
				'name' => 'Tangará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2414100',
				'name' => 'Tenente Ananias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2414159',
				'name' => 'Tenente Laurentino Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2414209',
				'name' => 'Tibau do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2414308',
				'name' => 'Timbaúba dos Batistas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2414407',
				'name' => 'Touros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2414456',
				'name' => 'Triunfo Potiguar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2414506',
				'name' => 'Umarizal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2414605',
				'name' => 'Upanema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2414704',
				'name' => 'Várzea',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2414753',
				'name' => 'Venha-Ver',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2414803',
				'name' => 'Vera Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2414902',
				'name' => 'Viçosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2415008',
				'name' => 'Vila Flor',
				'state_id' => $state->id
			]
		]);
    }
}
