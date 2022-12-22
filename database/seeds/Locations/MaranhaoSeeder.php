<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class MaranhaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Maranhão',
			'uf' => 'MA'
		]);

		City::insert([
			[
				'ibge_code' => '2100055',
				'name' => 'Açailândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100105',
				'name' => 'Afonso Cunha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100154',
				'name' => 'Água Doce do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100204',
				'name' => 'Alcântara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100303',
				'name' => 'Aldeias Altas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100402',
				'name' => 'Altamira do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100436',
				'name' => 'Alto Alegre do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100477',
				'name' => 'Alto Alegre do Pindaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100501',
				'name' => 'Alto Parnaíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100550',
				'name' => 'Amapá do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100600',
				'name' => 'Amarante do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100709',
				'name' => 'Anajatuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100808',
				'name' => 'Anapurus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100832',
				'name' => 'Apicum-Açu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100873',
				'name' => 'Araguanã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100907',
				'name' => 'Araioses',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2100956',
				'name' => 'Arame',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101004',
				'name' => 'Arari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101103',
				'name' => 'Axixá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101202',
				'name' => 'Bacabal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101251',
				'name' => 'Bacabeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101301',
				'name' => 'Bacuri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101350',
				'name' => 'Bacurituba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101400',
				'name' => 'Balsas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101509',
				'name' => 'Barão de Grajaú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101608',
				'name' => 'Barra do Corda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101707',
				'name' => 'Barreirinhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101731',
				'name' => 'Belágua',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101772',
				'name' => 'Bela Vista do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101806',
				'name' => 'Benedito Leite',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101905',
				'name' => 'Bequimão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101939',
				'name' => 'Bernardo do Mearim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2101970',
				'name' => 'Boa Vista do Gurupi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102002',
				'name' => 'Bom Jardim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102036',
				'name' => 'Bom Jesus das Selvas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102077',
				'name' => 'Bom Lugar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102101',
				'name' => 'Brejo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102150',
				'name' => 'Brejo de Areia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102200',
				'name' => 'Buriti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102309',
				'name' => 'Buriti Bravo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102325',
				'name' => 'Buriticupu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102358',
				'name' => 'Buritirana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102374',
				'name' => 'Cachoeira Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102408',
				'name' => 'Cajapió',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102507',
				'name' => 'Cajari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102556',
				'name' => 'Campestre do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102606',
				'name' => 'Cândido Mendes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102705',
				'name' => 'Cantanhede',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102754',
				'name' => 'Capinzal do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102804',
				'name' => 'Carolina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2102903',
				'name' => 'Carutapera',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103000',
				'name' => 'Caxias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103109',
				'name' => 'Cedral',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103125',
				'name' => 'Central do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103158',
				'name' => 'Centro do Guilherme',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103174',
				'name' => 'Centro Novo do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103208',
				'name' => 'Chapadinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103257',
				'name' => 'Cidelândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103307',
				'name' => 'Codó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103406',
				'name' => 'Coelho Neto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103505',
				'name' => 'Colinas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103554',
				'name' => 'Conceição do Lago-Açu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103604',
				'name' => 'Coroatá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103703',
				'name' => 'Cururupu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103752',
				'name' => 'Davinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103802',
				'name' => 'Dom Pedro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2103901',
				'name' => 'Duque Bacelar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104008',
				'name' => 'Esperantinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104057',
				'name' => 'Estreito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104073',
				'name' => 'Feira Nova do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104081',
				'name' => 'Fernando Falcão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104099',
				'name' => 'Formosa da Serra Negra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104107',
				'name' => 'Fortaleza dos Nogueiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104206',
				'name' => 'Fortuna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104305',
				'name' => 'Godofredo Viana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104404',
				'name' => 'Gonçalves Dias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104503',
				'name' => 'Governador Archer',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104552',
				'name' => 'Governador Edison Lobão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104602',
				'name' => 'Governador Eugênio Barros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104628',
				'name' => 'Governador Luiz Rocha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104651',
				'name' => 'Governador Newton Bello',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104677',
				'name' => 'Governador Nunes Freire',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104701',
				'name' => 'Graça Aranha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104800',
				'name' => 'Grajaú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2104909',
				'name' => 'Guimarães',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105005',
				'name' => 'Humberto de Campos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105104',
				'name' => 'Icatu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105153',
				'name' => 'Igarapé do Meio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105203',
				'name' => 'Igarapé Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105302',
				'name' => 'Imperatriz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105351',
				'name' => 'Itaipava do Grajaú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105401',
				'name' => 'Itapecuru Mirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105427',
				'name' => 'Itinga do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105450',
				'name' => 'Jatobá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105476',
				'name' => 'Jenipapo dos Vieiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105500',
				'name' => 'João Lisboa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105609',
				'name' => 'Joselândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105658',
				'name' => 'Junco do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105708',
				'name' => 'Lago da Pedra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105807',
				'name' => 'Lago do Junco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105906',
				'name' => 'Lago Verde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105922',
				'name' => 'Lagoa do Mato',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105948',
				'name' => 'Lago dos Rodrigues',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105963',
				'name' => 'Lagoa Grande do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2105989',
				'name' => 'Lajeado Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106003',
				'name' => 'Lima Campos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106102',
				'name' => 'Loreto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106201',
				'name' => 'Luís Domingues',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106300',
				'name' => 'Magalhães de Almeida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106326',
				'name' => 'Maracaçumé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106359',
				'name' => 'Marajá do Sena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106375',
				'name' => 'Maranhãozinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106409',
				'name' => 'Mata Roma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106508',
				'name' => 'Matinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106607',
				'name' => 'Matões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106631',
				'name' => 'Matões do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106672',
				'name' => 'Milagres do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106706',
				'name' => 'Mirador',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106755',
				'name' => 'Miranda do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106805',
				'name' => 'Mirinzal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2106904',
				'name' => 'Monção',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2107001',
				'name' => 'Montes Altos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2107100',
				'name' => 'Morros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2107209',
				'name' => 'Nina Rodrigues',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2107258',
				'name' => 'Nova Colinas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2107308',
				'name' => 'Nova Iorque',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2107357',
				'name' => 'Nova Olinda do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2107407',
				'name' => 'Olho D\'Água das Cunhãs',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2107456',
				'name' => 'Olinda Nova do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2107506',
				'name' => 'Paço do Lumiar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2107605',
				'name' => 'Palmeirândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2107704',
				'name' => 'Paraibano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2107803',
				'name' => 'Parnarama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2107902',
				'name' => 'Passagem Franca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2108009',
				'name' => 'Pastos Bons',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2108058',
				'name' => 'Paulino Neves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2108108',
				'name' => 'Paulo Ramos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2108207',
				'name' => 'Pedreiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2108256',
				'name' => 'Pedro do Rosário',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2108306',
				'name' => 'Penalva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2108405',
				'name' => 'Peri Mirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2108454',
				'name' => 'Peritoró',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2108504',
				'name' => 'Pindaré-Mirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2108603',
				'name' => 'Pinheiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2108702',
				'name' => 'Pio XII',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2108801',
				'name' => 'Pirapemas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2108900',
				'name' => 'Poção de Pedras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109007',
				'name' => 'Porto Franco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109056',
				'name' => 'Porto Rico do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109106',
				'name' => 'Presidente Dutra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109205',
				'name' => 'Presidente Juscelino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109239',
				'name' => 'Presidente Médici',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109270',
				'name' => 'Presidente Sarney',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109304',
				'name' => 'Presidente Vargas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109403',
				'name' => 'Primeira Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109452',
				'name' => 'Raposa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109502',
				'name' => 'Riachão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109551',
				'name' => 'Ribamar Fiquene',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109601',
				'name' => 'Rosário',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109700',
				'name' => 'Sambaíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109759',
				'name' => 'Santa Filomena do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109809',
				'name' => 'Santa Helena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2109908',
				'name' => 'Santa Inês',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110005',
				'name' => 'Santa Luzia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110039',
				'name' => 'Santa Luzia do Paruá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110104',
				'name' => 'Santa Quitéria do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110203',
				'name' => 'Santa Rita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110237',
				'name' => 'Santana do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110278',
				'name' => 'Santo Amaro do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110302',
				'name' => 'Santo Antônio dos Lopes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110401',
				'name' => 'São Benedito do Rio Preto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110500',
				'name' => 'São Bento',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110609',
				'name' => 'São Bernardo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110658',
				'name' => 'São Domingos do Azeitão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110708',
				'name' => 'São Domingos do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110807',
				'name' => 'São Félix de Balsas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110856',
				'name' => 'São Francisco do Brejão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2110906',
				'name' => 'São Francisco do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111003',
				'name' => 'São João Batista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111029',
				'name' => 'São João do Carú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111052',
				'name' => 'São João do Paraíso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111078',
				'name' => 'São João do Soter',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111102',
				'name' => 'São João dos Patos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111201',
				'name' => 'São José de Ribamar',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111250',
				'name' => 'São José dos Basílios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111300',
				'name' => 'São Luís',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111409',
				'name' => 'São Luís Gonzaga do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111508',
				'name' => 'São Mateus do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111532',
				'name' => 'São Pedro da Água Branca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111573',
				'name' => 'São Pedro dos Crentes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111607',
				'name' => 'São Raimundo das Mangabeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111631',
				'name' => 'São Raimundo do Doca Bezerra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111672',
				'name' => 'São Roberto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111706',
				'name' => 'São Vicente Ferrer',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111722',
				'name' => 'Satubinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111748',
				'name' => 'Senador Alexandre Costa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111763',
				'name' => 'Senador La Rocque',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111789',
				'name' => 'Serrano do Maranhão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111805',
				'name' => 'Sítio Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111904',
				'name' => 'Sucupira do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2111953',
				'name' => 'Sucupira do Riachão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2112001',
				'name' => 'Tasso Fragoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2112100',
				'name' => 'Timbiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2112209',
				'name' => 'Timon',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2112233',
				'name' => 'Trizidela do Vale',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2112274',
				'name' => 'Tufilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2112308',
				'name' => 'Tuntum',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2112407',
				'name' => 'Turiaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2112456',
				'name' => 'Turilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2112506',
				'name' => 'Tutóia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2112605',
				'name' => 'Urbano Santos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2112704',
				'name' => 'Vargem Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2112803',
				'name' => 'Viana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2112852',
				'name' => 'Vila Nova dos Martírios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2112902',
				'name' => 'Vitória do Mearim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2113009',
				'name' => 'Vitorino Freire',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2114007',
				'name' => 'Zé Doca',
				'state_id' => $state->id
			]
		]);
    }
}
