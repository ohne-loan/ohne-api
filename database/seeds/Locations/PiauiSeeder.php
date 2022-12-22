<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class PiauiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Piauí',
			'uf' => 'PI'
		]);

		City::insert([
			[
				'ibge_code' => '2200053',
				'name' => 'Acauã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2200103',
				'name' => 'Agricolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2200202',
				'name' => 'Água Branca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2200251',
				'name' => 'Alagoinha do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2200277',
				'name' => 'Alegrete do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2200301',
				'name' => 'Alto Longá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2200400',
				'name' => 'Altos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2200459',
				'name' => 'Alvorada do Gurguéia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2200509',
				'name' => 'Amarante',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2200608',
				'name' => 'Angical do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2200707',
				'name' => 'Anísio de Abreu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2200806',
				'name' => 'Antônio Almeida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2200905',
				'name' => 'Aroazes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2200954',
				'name' => 'Aroeiras do Itaim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201002',
				'name' => 'Arraial',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201051',
				'name' => 'Assunção do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201101',
				'name' => 'Avelino Lopes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201150',
				'name' => 'Baixa Grande do Ribeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201176',
				'name' => 'Barra D\'Alcântara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201200',
				'name' => 'Barras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201309',
				'name' => 'Barreiras do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201408',
				'name' => 'Barro Duro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201507',
				'name' => 'Batalha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201556',
				'name' => 'Bela Vista do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201572',
				'name' => 'Belém do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201606',
				'name' => 'Beneditinos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201705',
				'name' => 'Bertolínia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201739',
				'name' => 'Betânia do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201770',
				'name' => 'Boa Hora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201804',
				'name' => 'Bocaina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201903',
				'name' => 'Bom Jesus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201919',
				'name' => 'Bom Princípio do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201929',
				'name' => 'Bonfim do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201945',
				'name' => 'Boqueirão do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201960',
				'name' => 'Brasileira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2201988',
				'name' => 'Brejo do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202000',
				'name' => 'Buriti dos Lopes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202026',
				'name' => 'Buriti dos Montes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202059',
				'name' => 'Cabeceiras do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202075',
				'name' => 'Cajazeiras do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202083',
				'name' => 'Cajueiro da Praia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202091',
				'name' => 'Caldeirão Grande do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202109',
				'name' => 'Campinas do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202117',
				'name' => 'Campo Alegre do Fidalgo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202133',
				'name' => 'Campo Grande do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202174',
				'name' => 'Campo Largo do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202208',
				'name' => 'Campo Maior',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202251',
				'name' => 'Canavieira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202307',
				'name' => 'Canto do Buriti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202406',
				'name' => 'Capitão de Campos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202455',
				'name' => 'Capitão Gervásio Oliveira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202505',
				'name' => 'Caracol',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202539',
				'name' => 'Caraúbas do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202554',
				'name' => 'Caridade do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202604',
				'name' => 'Castelo do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202653',
				'name' => 'Caxingó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202703',
				'name' => 'Cocal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202711',
				'name' => 'Cocal de Telha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202729',
				'name' => 'Cocal dos Alves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202737',
				'name' => 'Coivaras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202752',
				'name' => 'Colônia do Gurguéia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202778',
				'name' => 'Colônia do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202802',
				'name' => 'Conceição do Canindé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202851',
				'name' => 'Coronel José Dias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2202901',
				'name' => 'Corrente',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203008',
				'name' => 'Cristalândia do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203107',
				'name' => 'Cristino Castro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203206',
				'name' => 'Curimatá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203230',
				'name' => 'Currais',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203255',
				'name' => 'Curralinhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203271',
				'name' => 'Curral Novo do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203305',
				'name' => 'Demerval Lobão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203354',
				'name' => 'Dirceu Arcoverde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203404',
				'name' => 'Dom Expedito Lopes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203420',
				'name' => 'Domingos Mourão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203453',
				'name' => 'Dom Inocêncio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203503',
				'name' => 'Elesbão Veloso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203602',
				'name' => 'Eliseu Martins',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203701',
				'name' => 'Esperantina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203750',
				'name' => 'Fartura do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203800',
				'name' => 'Flores do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203859',
				'name' => 'Floresta do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2203909',
				'name' => 'Floriano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2204006',
				'name' => 'Francinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2204105',
				'name' => 'Francisco Ayres',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2204154',
				'name' => 'Francisco Macedo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2204204',
				'name' => 'Francisco Santos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2204303',
				'name' => 'Fronteiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2204352',
				'name' => 'Geminiano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2204402',
				'name' => 'Gilbués',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2204501',
				'name' => 'Guadalupe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2204550',
				'name' => 'Guaribas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2204600',
				'name' => 'Hugo Napoleão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2204659',
				'name' => 'Ilha Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2204709',
				'name' => 'Inhuma',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2204808',
				'name' => 'Ipiranga do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2204907',
				'name' => 'Isaías Coelho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205003',
				'name' => 'Itainópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205102',
				'name' => 'Itaueira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205151',
				'name' => 'Jacobina do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205201',
				'name' => 'Jaicós',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205250',
				'name' => 'Jardim do Mulato',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205276',
				'name' => 'Jatobá do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205300',
				'name' => 'Jerumenha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205359',
				'name' => 'João Costa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205409',
				'name' => 'Joaquim Pires',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205458',
				'name' => 'Joca Marques',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205508',
				'name' => 'José de Freitas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205516',
				'name' => 'Juazeiro do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205524',
				'name' => 'Júlio Borges',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205532',
				'name' => 'Jurema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205540',
				'name' => 'Lagoinha do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205557',
				'name' => 'Lagoa Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205565',
				'name' => 'Lagoa do Barro do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205573',
				'name' => 'Lagoa de São Francisco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205581',
				'name' => 'Lagoa do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205599',
				'name' => 'Lagoa do Sítio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205607',
				'name' => 'Landri Sales',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205706',
				'name' => 'Luís Correia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205805',
				'name' => 'Luzilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205854',
				'name' => 'Madeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205904',
				'name' => 'Manoel Emídio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2205953',
				'name' => 'Marcolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206001',
				'name' => 'Marcos Parente',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206050',
				'name' => 'Massapê do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206100',
				'name' => 'Matias Olímpio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206209',
				'name' => 'Miguel Alves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206308',
				'name' => 'Miguel Leão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206357',
				'name' => 'Milton Brandão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206407',
				'name' => 'Monsenhor Gil',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206506',
				'name' => 'Monsenhor Hipólito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206605',
				'name' => 'Monte Alegre do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206654',
				'name' => 'Morro Cabeça no Tempo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206670',
				'name' => 'Morro do Chapéu do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206696',
				'name' => 'Murici dos Portelas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206704',
				'name' => 'Nazaré do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206720',
				'name' => 'Nazária',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206753',
				'name' => 'Nossa Senhora de Nazaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206803',
				'name' => 'Nossa Senhora dos Remédios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206902',
				'name' => 'Novo Oriente do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2206951',
				'name' => 'Novo Santo Antônio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207009',
				'name' => 'Oeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207108',
				'name' => 'Olho D\'Água do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207207',
				'name' => 'Padre Marcos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207306',
				'name' => 'Paes Landim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207355',
				'name' => 'Pajeú do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207405',
				'name' => 'Palmeira do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207504',
				'name' => 'Palmeirais',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207553',
				'name' => 'Paquetá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207603',
				'name' => 'Parnaguá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207702',
				'name' => 'Parnaíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207751',
				'name' => 'Passagem Franca do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207777',
				'name' => 'Patos do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207793',
				'name' => 'Pau D\'Arco do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207801',
				'name' => 'Paulistana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207850',
				'name' => 'Pavussu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207900',
				'name' => 'Pedro II',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207934',
				'name' => 'Pedro Laurentino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2207959',
				'name' => 'Nova Santa Rita',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2208007',
				'name' => 'Picos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2208106',
				'name' => 'Pimenteiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2208205',
				'name' => 'Pio IX',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2208304',
				'name' => 'Piracuruca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2208403',
				'name' => 'Piripiri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2208502',
				'name' => 'Porto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2208551',
				'name' => 'Porto Alegre do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2208601',
				'name' => 'Prata do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2208650',
				'name' => 'Queimada Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2208700',
				'name' => 'Redenção do Gurguéia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2208809',
				'name' => 'Regeneração',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2208858',
				'name' => 'Riacho Frio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2208874',
				'name' => 'Ribeira do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2208908',
				'name' => 'Ribeiro Gonçalves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209005',
				'name' => 'Rio Grande do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209104',
				'name' => 'Santa Cruz do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209153',
				'name' => 'Santa Cruz dos Milagres',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209203',
				'name' => 'Santa Filomena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209302',
				'name' => 'Santa Luz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209351',
				'name' => 'Santana do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209377',
				'name' => 'Santa Rosa do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209401',
				'name' => 'Santo Antônio de Lisboa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209450',
				'name' => 'Santo Antônio dos Milagres',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209500',
				'name' => 'Santo Inácio do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209559',
				'name' => 'São Braz do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209609',
				'name' => 'São Félix do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209658',
				'name' => 'São Francisco de Assis do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209708',
				'name' => 'São Francisco do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209757',
				'name' => 'São Gonçalo do Gurguéia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209807',
				'name' => 'São Gonçalo do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209856',
				'name' => 'São João da Canabrava',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209872',
				'name' => 'São João da Fronteira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209906',
				'name' => 'São João da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209955',
				'name' => 'São João da Varjota',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2209971',
				'name' => 'São João do Arraial',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210003',
				'name' => 'São João do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210052',
				'name' => 'São José do Divino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210102',
				'name' => 'São José do Peixe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210201',
				'name' => 'São José do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210300',
				'name' => 'São Julião',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210359',
				'name' => 'São Lourenço do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210375',
				'name' => 'São Luis do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210383',
				'name' => 'São Miguel da Baixa Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210391',
				'name' => 'São Miguel do Fidalgo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210409',
				'name' => 'São Miguel do Tapuio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210508',
				'name' => 'São Pedro do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210607',
				'name' => 'São Raimundo Nonato',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210623',
				'name' => 'Sebastião Barros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210631',
				'name' => 'Sebastião Leal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210656',
				'name' => 'Sigefredo Pacheco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210706',
				'name' => 'Simões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210805',
				'name' => 'Simplício Mendes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210904',
				'name' => 'Socorro do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210938',
				'name' => 'Sussuapara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210953',
				'name' => 'Tamboril do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2210979',
				'name' => 'Tanque do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2211001',
				'name' => 'Teresina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2211100',
				'name' => 'União',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2211209',
				'name' => 'Uruçuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2211308',
				'name' => 'Valença do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2211357',
				'name' => 'Várzea Branca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2211407',
				'name' => 'Várzea Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2211506',
				'name' => 'Vera Mendes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2211605',
				'name' => 'Vila Nova do Piauí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2211704',
				'name' => 'Wall Ferraz',
				'state_id' => $state->id
			]
		]);
    }
}
