<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class RioGrandeDoSulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Rio Grande do Sul',
			'uf' => 'RS'
		]);

		City::insert([
			[
				'ibge_code' => '4300034',
				'name' => 'Aceguá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300059',
				'name' => 'Água Santa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300109',
				'name' => 'Agudo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300208',
				'name' => 'Ajuricaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300307',
				'name' => 'Alecrim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300406',
				'name' => 'Alegrete',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300455',
				'name' => 'Alegria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300471',
				'name' => 'Almirante Tamandaré do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300505',
				'name' => 'Alpestre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300554',
				'name' => 'Alto Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300570',
				'name' => 'Alto Feliz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300604',
				'name' => 'Alvorada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300638',
				'name' => 'Amaral Ferrador',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300646',
				'name' => 'Ametista do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300661',
				'name' => 'André da Rocha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300703',
				'name' => 'Anta Gorda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300802',
				'name' => 'Antônio Prado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300851',
				'name' => 'Arambaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300877',
				'name' => 'Araricá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4300901',
				'name' => 'Aratiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301008',
				'name' => 'Arroio do Meio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301057',
				'name' => 'Arroio do Sal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301073',
				'name' => 'Arroio do Padre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301107',
				'name' => 'Arroio dos Ratos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301206',
				'name' => 'Arroio do Tigre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301305',
				'name' => 'Arroio Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301404',
				'name' => 'Arvorezinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301503',
				'name' => 'Augusto Pestana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301552',
				'name' => 'Áurea',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301602',
				'name' => 'Bagé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301636',
				'name' => 'Balneário Pinhal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301651',
				'name' => 'Barão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301701',
				'name' => 'Barão de Cotegipe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301750',
				'name' => 'Barão do Triunfo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301800',
				'name' => 'Barracão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301859',
				'name' => 'Barra do Guarita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301875',
				'name' => 'Barra do Quaraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301909',
				'name' => 'Barra do Ribeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301925',
				'name' => 'Barra do Rio Azul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4301958',
				'name' => 'Barra Funda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302006',
				'name' => 'Barros Cassal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302055',
				'name' => 'Benjamin Constant do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302105',
				'name' => 'Bento Gonçalves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302154',
				'name' => 'Boa Vista das Missões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302204',
				'name' => 'Boa Vista do Buricá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302220',
				'name' => 'Boa Vista do Cadeado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302238',
				'name' => 'Boa Vista do Incra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302253',
				'name' => 'Boa Vista do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302303',
				'name' => 'Bom Jesus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302352',
				'name' => 'Bom Princípio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302378',
				'name' => 'Bom Progresso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302402',
				'name' => 'Bom Retiro do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302451',
				'name' => 'Boqueirão do Leão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302501',
				'name' => 'Bossoroca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302584',
				'name' => 'Bozano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302600',
				'name' => 'Braga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302659',
				'name' => 'Brochier',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302709',
				'name' => 'Butiá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302808',
				'name' => 'Caçapava do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4302907',
				'name' => 'Cacequi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4303004',
				'name' => 'Cachoeira do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4303103',
				'name' => 'Cachoeirinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4303202',
				'name' => 'Cacique Doble',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4303301',
				'name' => 'Caibaté',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4303400',
				'name' => 'Caiçara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4303509',
				'name' => 'Camaquã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4303558',
				'name' => 'Camargo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4303608',
				'name' => 'Cambará do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4303673',
				'name' => 'Campestre da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4303707',
				'name' => 'Campina das Missões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4303806',
				'name' => 'Campinas do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4303905',
				'name' => 'Campo Bom',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304002',
				'name' => 'Campo Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304101',
				'name' => 'Campos Borges',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304200',
				'name' => 'Candelária',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304309',
				'name' => 'Cândido Godói',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304358',
				'name' => 'Candiota',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304408',
				'name' => 'Canela',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304507',
				'name' => 'Canguçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304606',
				'name' => 'Canoas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304614',
				'name' => 'Canudos do Vale',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304622',
				'name' => 'Capão Bonito do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304630',
				'name' => 'Capão da Canoa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304655',
				'name' => 'Capão do Cipó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304663',
				'name' => 'Capão do Leão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304671',
				'name' => 'Capivari do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304689',
				'name' => 'Capela de Santana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304697',
				'name' => 'Capitão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304705',
				'name' => 'Carazinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304713',
				'name' => 'Caraá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304804',
				'name' => 'Carlos Barbosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304853',
				'name' => 'Carlos Gomes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304903',
				'name' => 'Casca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4304952',
				'name' => 'Caseiros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305009',
				'name' => 'Catuípe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305108',
				'name' => 'Caxias do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305116',
				'name' => 'Centenário',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305124',
				'name' => 'Cerrito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305132',
				'name' => 'Cerro Branco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305157',
				'name' => 'Cerro Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305173',
				'name' => 'Cerro Grande do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305207',
				'name' => 'Cerro Largo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305306',
				'name' => 'Chapada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305355',
				'name' => 'Charqueadas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305371',
				'name' => 'Charrua',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305405',
				'name' => 'Chiapetta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305439',
				'name' => 'Chuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305447',
				'name' => 'Chuvisca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305454',
				'name' => 'Cidreira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305504',
				'name' => 'Ciríaco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305587',
				'name' => 'Colinas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305603',
				'name' => 'Colorado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305702',
				'name' => 'Condor',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305801',
				'name' => 'Constantina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305835',
				'name' => 'Coqueiro Baixo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305850',
				'name' => 'Coqueiros do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305871',
				'name' => 'Coronel Barros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305900',
				'name' => 'Coronel Bicaco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305934',
				'name' => 'Coronel Pilar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305959',
				'name' => 'Cotiporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4305975',
				'name' => 'Coxilha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306007',
				'name' => 'Crissiumal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306056',
				'name' => 'Cristal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306072',
				'name' => 'Cristal do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306106',
				'name' => 'Cruz Alta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306130',
				'name' => 'Cruzaltense',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306205',
				'name' => 'Cruzeiro do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306304',
				'name' => 'David Canabarro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306320',
				'name' => 'Derrubadas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306353',
				'name' => 'Dezesseis de Novembro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306379',
				'name' => 'Dilermando de Aguiar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306403',
				'name' => 'Dois Irmãos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306429',
				'name' => 'Dois Irmãos das Missões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306452',
				'name' => 'Dois Lajeados',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306502',
				'name' => 'Dom Feliciano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306551',
				'name' => 'Dom Pedro de Alcântara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306601',
				'name' => 'Dom Pedrito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306700',
				'name' => 'Dona Francisca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306734',
				'name' => 'Doutor Maurício Cardoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306759',
				'name' => 'Doutor Ricardo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306767',
				'name' => 'Eldorado do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306809',
				'name' => 'Encantado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306908',
				'name' => 'Encruzilhada do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306924',
				'name' => 'Engenho Velho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306932',
				'name' => 'Entre-Ijuís',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306957',
				'name' => 'Entre Rios do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4306973',
				'name' => 'Erebango',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307005',
				'name' => 'Erechim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307054',
				'name' => 'Ernestina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307104',
				'name' => 'Herval',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307203',
				'name' => 'Erval Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307302',
				'name' => 'Erval Seco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307401',
				'name' => 'Esmeralda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307450',
				'name' => 'Esperança do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307500',
				'name' => 'Espumoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307559',
				'name' => 'Estação',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307609',
				'name' => 'Estância Velha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307708',
				'name' => 'Esteio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307807',
				'name' => 'Estrela',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307815',
				'name' => 'Estrela Velha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307831',
				'name' => 'Eugênio de Castro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307864',
				'name' => 'Fagundes Varela',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4307906',
				'name' => 'Farroupilha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308003',
				'name' => 'Faxinal do Soturno',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308052',
				'name' => 'Faxinalzinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308078',
				'name' => 'Fazenda Vilanova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308102',
				'name' => 'Feliz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308201',
				'name' => 'Flores da Cunha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308250',
				'name' => 'Floriano Peixoto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308300',
				'name' => 'Fontoura Xavier',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308409',
				'name' => 'Formigueiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308433',
				'name' => 'Forquetinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308458',
				'name' => 'Fortaleza dos Valos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308508',
				'name' => 'Frederico Westphalen',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308607',
				'name' => 'Garibaldi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308656',
				'name' => 'Garruchos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308706',
				'name' => 'Gaurama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308805',
				'name' => 'General Câmara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308854',
				'name' => 'Gentil',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4308904',
				'name' => 'Getúlio Vargas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309001',
				'name' => 'Giruá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309050',
				'name' => 'Glorinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309100',
				'name' => 'Gramado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309126',
				'name' => 'Gramado dos Loureiros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309159',
				'name' => 'Gramado Xavier',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309209',
				'name' => 'Gravataí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309258',
				'name' => 'Guabiju',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309308',
				'name' => 'Guaíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309407',
				'name' => 'Guaporé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309506',
				'name' => 'Guarani das Missões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309555',
				'name' => 'Harmonia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309571',
				'name' => 'Herveiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309605',
				'name' => 'Horizontina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309654',
				'name' => 'Hulha Negra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309704',
				'name' => 'Humaitá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309753',
				'name' => 'Ibarama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309803',
				'name' => 'Ibiaçá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309902',
				'name' => 'Ibiraiaras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4309951',
				'name' => 'Ibirapuitã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310009',
				'name' => 'Ibirubá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310108',
				'name' => 'Igrejinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310207',
				'name' => 'Ijuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310306',
				'name' => 'Ilópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310330',
				'name' => 'Imbé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310363',
				'name' => 'Imigrante',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310405',
				'name' => 'Independência',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310413',
				'name' => 'Inhacorá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310439',
				'name' => 'Ipê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310462',
				'name' => 'Ipiranga do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310504',
				'name' => 'Iraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310538',
				'name' => 'Itaara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310553',
				'name' => 'Itacurubi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310579',
				'name' => 'Itapuca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310603',
				'name' => 'Itaqui',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310652',
				'name' => 'Itati',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310702',
				'name' => 'Itatiba do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310751',
				'name' => 'Ivorá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310801',
				'name' => 'Ivoti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310850',
				'name' => 'Jaboticaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310876',
				'name' => 'Jacuizinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4310900',
				'name' => 'Jacutinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311007',
				'name' => 'Jaguarão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311106',
				'name' => 'Jaguari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311122',
				'name' => 'Jaquirana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311130',
				'name' => 'Jari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311155',
				'name' => 'Jóia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311205',
				'name' => 'Júlio de Castilhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311239',
				'name' => 'Lagoa Bonita do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311254',
				'name' => 'Lagoão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311270',
				'name' => 'Lagoa dos Três Cantos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311304',
				'name' => 'Lagoa Vermelha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311403',
				'name' => 'Lajeado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311429',
				'name' => 'Lajeado do Bugre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311502',
				'name' => 'Lavras do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311601',
				'name' => 'Liberato Salzano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311627',
				'name' => 'Lindolfo Collor',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311643',
				'name' => 'Linha Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311700',
				'name' => 'Machadinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311718',
				'name' => 'Maçambará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311734',
				'name' => 'Mampituba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311759',
				'name' => 'Manoel Viana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311775',
				'name' => 'Maquiné',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311791',
				'name' => 'Maratá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311809',
				'name' => 'Marau',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311908',
				'name' => 'Marcelino Ramos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4311981',
				'name' => 'Mariana Pimentel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312005',
				'name' => 'Mariano Moro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312054',
				'name' => 'Marques de Souza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312104',
				'name' => 'Mata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312138',
				'name' => 'Mato Castelhano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312153',
				'name' => 'Mato Leitão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312179',
				'name' => 'Mato Queimado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312203',
				'name' => 'Maximiliano de Almeida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312252',
				'name' => 'Minas do Leão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312302',
				'name' => 'Miraguaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312351',
				'name' => 'Montauri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312377',
				'name' => 'Monte Alegre dos Campos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312385',
				'name' => 'Monte Belo do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312401',
				'name' => 'Montenegro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312427',
				'name' => 'Mormaço',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312443',
				'name' => 'Morrinhos do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312450',
				'name' => 'Morro Redondo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312476',
				'name' => 'Morro Reuter',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312500',
				'name' => 'Mostardas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312609',
				'name' => 'Muçum',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312617',
				'name' => 'Muitos Capões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312625',
				'name' => 'Muliterno',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312658',
				'name' => 'Não-Me-Toque',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312674',
				'name' => 'Nicolau Vergueiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312708',
				'name' => 'Nonoai',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312757',
				'name' => 'Nova Alvorada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312807',
				'name' => 'Nova Araçá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312906',
				'name' => 'Nova Bassano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4312955',
				'name' => 'Nova Boa Vista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313003',
				'name' => 'Nova Bréscia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313011',
				'name' => 'Nova Candelária',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313037',
				'name' => 'Nova Esperança do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313060',
				'name' => 'Nova Hartz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313086',
				'name' => 'Nova Pádua',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313102',
				'name' => 'Nova Palma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313201',
				'name' => 'Nova Petrópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313300',
				'name' => 'Nova Prata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313334',
				'name' => 'Nova Ramada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313359',
				'name' => 'Nova Roma do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313375',
				'name' => 'Nova Santa Rita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313391',
				'name' => 'Novo Cabrais',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313409',
				'name' => 'Novo Hamburgo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313425',
				'name' => 'Novo Machado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313441',
				'name' => 'Novo Tiradentes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313466',
				'name' => 'Novo Xingu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313490',
				'name' => 'Novo Barreiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313508',
				'name' => 'Osório',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313607',
				'name' => 'Paim Filho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313656',
				'name' => 'Palmares do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313706',
				'name' => 'Palmeira das Missões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313805',
				'name' => 'Palmitinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313904',
				'name' => 'Panambi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4313953',
				'name' => 'Pantano Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314001',
				'name' => 'Paraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314027',
				'name' => 'Paraíso do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314035',
				'name' => 'Pareci Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314050',
				'name' => 'Parobé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314068',
				'name' => 'Passa Sete',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314076',
				'name' => 'Passo do Sobrado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314100',
				'name' => 'Passo Fundo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314134',
				'name' => 'Paulo Bento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314159',
				'name' => 'Paverama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314175',
				'name' => 'Pedras Altas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314209',
				'name' => 'Pedro Osório',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314308',
				'name' => 'Pejuçara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314407',
				'name' => 'Pelotas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314423',
				'name' => 'Picada Café',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314456',
				'name' => 'Pinhal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314464',
				'name' => 'Pinhal da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314472',
				'name' => 'Pinhal Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314498',
				'name' => 'Pinheirinho do Vale',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314506',
				'name' => 'Pinheiro Machado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314548',
				'name' => 'Pinto Bandeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314555',
				'name' => 'Pirapó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314605',
				'name' => 'Piratini',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314704',
				'name' => 'Planalto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314753',
				'name' => 'Poço das Antas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314779',
				'name' => 'Pontão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314787',
				'name' => 'Ponte Preta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314803',
				'name' => 'Portão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4314902',
				'name' => 'Porto Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315008',
				'name' => 'Porto Lucena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315057',
				'name' => 'Porto Mauá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315073',
				'name' => 'Porto Vera Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315107',
				'name' => 'Porto Xavier',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315131',
				'name' => 'Pouso Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315149',
				'name' => 'Presidente Lucena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315156',
				'name' => 'Progresso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315172',
				'name' => 'Protásio Alves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315206',
				'name' => 'Putinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315305',
				'name' => 'Quaraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315313',
				'name' => 'Quatro Irmãos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315321',
				'name' => 'Quevedos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315354',
				'name' => 'Quinze de Novembro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315404',
				'name' => 'Redentora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315453',
				'name' => 'Relvado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315503',
				'name' => 'Restinga Seca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315552',
				'name' => 'Rio dos Índios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315602',
				'name' => 'Rio Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315701',
				'name' => 'Rio Pardo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315750',
				'name' => 'Riozinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315800',
				'name' => 'Roca Sales',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315909',
				'name' => 'Rodeio Bonito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4315958',
				'name' => 'Rolador',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316006',
				'name' => 'Rolante',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316105',
				'name' => 'Ronda Alta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316204',
				'name' => 'Rondinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316303',
				'name' => 'Roque Gonzales',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316402',
				'name' => 'Rosário do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316428',
				'name' => 'Sagrada Família',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316436',
				'name' => 'Saldanha Marinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316451',
				'name' => 'Salto do Jacuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316477',
				'name' => 'Salvador das Missões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316501',
				'name' => 'Salvador do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316600',
				'name' => 'Sananduva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316709',
				'name' => 'Santa Bárbara do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316733',
				'name' => 'Santa Cecília do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316758',
				'name' => 'Santa Clara do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316808',
				'name' => 'Santa Cruz do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316907',
				'name' => 'Santa Maria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316956',
				'name' => 'Santa Maria do Herval',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4316972',
				'name' => 'Santa Margarida do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4317004',
				'name' => 'Santana da Boa Vista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4317103',
				'name' => 'Sant\'Ana do Livramento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4317202',
				'name' => 'Santa Rosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4317251',
				'name' => 'Santa Tereza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4317301',
				'name' => 'Santa Vitória do Palmar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4317400',
				'name' => 'Santiago',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4317509',
				'name' => 'Santo Ângelo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4317558',
				'name' => 'Santo Antônio do Palma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4317608',
				'name' => 'Santo Antônio da Patrulha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4317707',
				'name' => 'Santo Antônio das Missões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4317756',
				'name' => 'Santo Antônio do Planalto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4317806',
				'name' => 'Santo Augusto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4317905',
				'name' => 'Santo Cristo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4317954',
				'name' => 'Santo Expedito do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318002',
				'name' => 'São Borja',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318051',
				'name' => 'São Domingos do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318101',
				'name' => 'São Francisco de Assis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318200',
				'name' => 'São Francisco de Paula',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318309',
				'name' => 'São Gabriel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318408',
				'name' => 'São Jerônimo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318424',
				'name' => 'São João da Urtiga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318432',
				'name' => 'São João do Polêsine',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318440',
				'name' => 'São Jorge',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318457',
				'name' => 'São José das Missões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318465',
				'name' => 'São José do Herval',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318481',
				'name' => 'São José do Hortêncio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318499',
				'name' => 'São José do Inhacorá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318507',
				'name' => 'São José do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318606',
				'name' => 'São José do Ouro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318614',
				'name' => 'São José do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318622',
				'name' => 'São José dos Ausentes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318705',
				'name' => 'São Leopoldo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318804',
				'name' => 'São Lourenço do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4318903',
				'name' => 'São Luiz Gonzaga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319000',
				'name' => 'São Marcos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319109',
				'name' => 'São Martinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319125',
				'name' => 'São Martinho da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319158',
				'name' => 'São Miguel das Missões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319208',
				'name' => 'São Nicolau',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319307',
				'name' => 'São Paulo das Missões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319356',
				'name' => 'São Pedro da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319364',
				'name' => 'São Pedro das Missões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319372',
				'name' => 'São Pedro do Butiá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319406',
				'name' => 'São Pedro do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319505',
				'name' => 'São Sebastião do Caí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319604',
				'name' => 'São Sepé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319703',
				'name' => 'São Valentim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319711',
				'name' => 'São Valentim do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319737',
				'name' => 'São Valério do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319752',
				'name' => 'São Vendelino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319802',
				'name' => 'São Vicente do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4319901',
				'name' => 'Sapiranga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320008',
				'name' => 'Sapucaia do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320107',
				'name' => 'Sarandi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320206',
				'name' => 'Seberi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320230',
				'name' => 'Sede Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320263',
				'name' => 'Segredo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320305',
				'name' => 'Selbach',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320321',
				'name' => 'Senador Salgado Filho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320354',
				'name' => 'Sentinela do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320404',
				'name' => 'Serafina Corrêa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320453',
				'name' => 'Sério',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320503',
				'name' => 'Sertão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320552',
				'name' => 'Sertão Santana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320578',
				'name' => 'Sete de Setembro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320602',
				'name' => 'Severiano de Almeida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320651',
				'name' => 'Silveira Martins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320677',
				'name' => 'Sinimbu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320701',
				'name' => 'Sobradinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320800',
				'name' => 'Soledade',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320859',
				'name' => 'Tabaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4320909',
				'name' => 'Tapejara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321006',
				'name' => 'Tapera',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321105',
				'name' => 'Tapes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321204',
				'name' => 'Taquara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321303',
				'name' => 'Taquari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321329',
				'name' => 'Taquaruçu do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321352',
				'name' => 'Tavares',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321402',
				'name' => 'Tenente Portela',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321436',
				'name' => 'Terra de Areia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321451',
				'name' => 'Teutônia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321469',
				'name' => 'Tio Hugo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321477',
				'name' => 'Tiradentes do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321493',
				'name' => 'Toropi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321501',
				'name' => 'Torres',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321600',
				'name' => 'Tramandaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321626',
				'name' => 'Travesseiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321634',
				'name' => 'Três Arroios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321667',
				'name' => 'Três Cachoeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321709',
				'name' => 'Três Coroas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321808',
				'name' => 'Três de Maio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321832',
				'name' => 'Três Forquilhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321857',
				'name' => 'Três Palmeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321907',
				'name' => 'Três Passos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4321956',
				'name' => 'Trindade do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322004',
				'name' => 'Triunfo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322103',
				'name' => 'Tucunduva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322152',
				'name' => 'Tunas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322186',
				'name' => 'Tupanci do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322202',
				'name' => 'Tupanciretã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322251',
				'name' => 'Tupandi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322301',
				'name' => 'Tuparendi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322327',
				'name' => 'Turuçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322343',
				'name' => 'Ubiretama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322350',
				'name' => 'União da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322376',
				'name' => 'Unistalda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322400',
				'name' => 'Uruguaiana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322509',
				'name' => 'Vacaria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322525',
				'name' => 'Vale Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322533',
				'name' => 'Vale do Sol',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322541',
				'name' => 'Vale Real',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322558',
				'name' => 'Vanini',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322608',
				'name' => 'Venâncio Aires',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322707',
				'name' => 'Vera Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322806',
				'name' => 'Veranópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322855',
				'name' => 'Vespasiano Correa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4322905',
				'name' => 'Viadutos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4323002',
				'name' => 'Viamão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4323101',
				'name' => 'Vicente Dutra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4323200',
				'name' => 'Victor Graeff',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4323309',
				'name' => 'Vila Flores',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4323358',
				'name' => 'Vila Lângaro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4323408',
				'name' => 'Vila Maria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4323457',
				'name' => 'Vila Nova do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4323507',
				'name' => 'Vista Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4323606',
				'name' => 'Vista Alegre do Prata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4323705',
				'name' => 'Vista Gaúcha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4323754',
				'name' => 'Vitória das Missões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4323770',
				'name' => 'Westfalia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '4323804',
				'name' => 'Xangri-lá',
				'state_id' => $state->id
			]
		]);
    }
}
