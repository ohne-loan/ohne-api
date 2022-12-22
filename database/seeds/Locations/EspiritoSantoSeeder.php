<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class EspiritoSantoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Espírito Santo',
			'uf' => 'ES'
		]);

		City::insert([
			[
				'ibge_code' => '3200102',
				'name' => 'Afonso Cláudio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3200136',
				'name' => 'Águia Branca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3200169',
				'name' => 'Água Doce do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3200201',
				'name' => 'Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3200300',
				'name' => 'Alfredo Chaves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3200359',
				'name' => 'Alto Rio Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3200409',
				'name' => 'Anchieta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3200508',
				'name' => 'Apiacá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3200607',
				'name' => 'Aracruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3200706',
				'name' => 'Atilio Vivacqua',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3200805',
				'name' => 'Baixo Guandu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3200904',
				'name' => 'Barra de São Francisco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3201001',
				'name' => 'Boa Esperança',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3201100',
				'name' => 'Bom Jesus do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3201159',
				'name' => 'Brejetuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3201209',
				'name' => 'Cachoeiro de Itapemirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3201308',
				'name' => 'Cariacica',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3201407',
				'name' => 'Castelo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3201506',
				'name' => 'Colatina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3201605',
				'name' => 'Conceição da Barra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3201704',
				'name' => 'Conceição do Castelo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3201803',
				'name' => 'Divino de São Lourenço',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3201902',
				'name' => 'Domingos Martins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3202009',
				'name' => 'Dores do Rio Preto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3202108',
				'name' => 'Ecoporanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3202207',
				'name' => 'Fundão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3202256',
				'name' => 'Governador Lindenberg',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3202306',
				'name' => 'Guaçuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3202405',
				'name' => 'Guarapari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3202454',
				'name' => 'Ibatiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3202504',
				'name' => 'Ibiraçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3202553',
				'name' => 'Ibitirama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3202603',
				'name' => 'Iconha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3202652',
				'name' => 'Irupi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3202702',
				'name' => 'Itaguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3202801',
				'name' => 'Itapemirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3202900',
				'name' => 'Itarana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203007',
				'name' => 'Iúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203056',
				'name' => 'Jaguaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203106',
				'name' => 'Jerônimo Monteiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203130',
				'name' => 'João Neiva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203163',
				'name' => 'Laranja da Terra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203205',
				'name' => 'Linhares',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203304',
				'name' => 'Mantenópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203320',
				'name' => 'Marataízes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203346',
				'name' => 'Marechal Floriano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203353',
				'name' => 'Marilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203403',
				'name' => 'Mimoso do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203502',
				'name' => 'Montanha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203601',
				'name' => 'Mucurici',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203700',
				'name' => 'Muniz Freire',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203809',
				'name' => 'Muqui',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3203908',
				'name' => 'Nova Venécia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204005',
				'name' => 'Pancas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204054',
				'name' => 'Pedro Canário',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204104',
				'name' => 'Pinheiros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204203',
				'name' => 'Piúma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204252',
				'name' => 'Ponto Belo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204302',
				'name' => 'Presidente Kennedy',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204351',
				'name' => 'Rio Bananal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204401',
				'name' => 'Rio Novo do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204500',
				'name' => 'Santa Leopoldina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204559',
				'name' => 'Santa Maria de Jetibá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204609',
				'name' => 'Santa Teresa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204658',
				'name' => 'São Domingos do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204708',
				'name' => 'São Gabriel da Palha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204807',
				'name' => 'São José do Calçado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204906',
				'name' => 'São Mateus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3204955',
				'name' => 'São Roque do Canaã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3205002',
				'name' => 'Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3205010',
				'name' => 'Sooretama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3205036',
				'name' => 'Vargem Alta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3205069',
				'name' => 'Venda Nova do Imigrante',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3205101',
				'name' => 'Viana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3205150',
				'name' => 'Vila Pavão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3205176',
				'name' => 'Vila Valério',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3205200',
				'name' => 'Vila Velha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '3205309',
				'name' => 'Vitória',
				'state_id' => $state->id
			]
		]);
    }
}
