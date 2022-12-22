<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class MatoGrossoDoSulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Mato Grosso do Sul',
			'uf' => 'MS'
		]);

		City::insert([
			[
				'ibge_code' => '5000203',
				'name' => 'Água Clara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5000252',
				'name' => 'Alcinópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5000609',
				'name' => 'Amambai',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5000708',
				'name' => 'Anastácio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5000807',
				'name' => 'Anaurilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5000856',
				'name' => 'Angélica',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5000906',
				'name' => 'Antônio João',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5001003',
				'name' => 'Aparecida do Taboado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5001102',
				'name' => 'Aquidauana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5001243',
				'name' => 'Aral Moreira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5001508',
				'name' => 'Bandeirantes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5001904',
				'name' => 'Bataguassu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5002001',
				'name' => 'Batayporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5002100',
				'name' => 'Bela Vista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5002159',
				'name' => 'Bodoquena',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5002209',
				'name' => 'Bonito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5002308',
				'name' => 'Brasilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5002407',
				'name' => 'Caarapó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5002605',
				'name' => 'Camapuã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5002704',
				'name' => 'Campo Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5002803',
				'name' => 'Caracol',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5002902',
				'name' => 'Cassilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5002951',
				'name' => 'Chapadão do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5003108',
				'name' => 'Corguinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5003157',
				'name' => 'Coronel Sapucaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5003207',
				'name' => 'Corumbá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5003256',
				'name' => 'Costa Rica',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5003306',
				'name' => 'Coxim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5003454',
				'name' => 'Deodápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5003488',
				'name' => 'Dois Irmãos do Buriti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5003504',
				'name' => 'Douradina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5003702',
				'name' => 'Dourados',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5003751',
				'name' => 'Eldorado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5003801',
				'name' => 'Fátima do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5003900',
				'name' => 'Figueirão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5004007',
				'name' => 'Glória de Dourados',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5004106',
				'name' => 'Guia Lopes da Laguna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5004304',
				'name' => 'Iguatemi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5004403',
				'name' => 'Inocência',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5004502',
				'name' => 'Itaporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5004601',
				'name' => 'Itaquiraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5004700',
				'name' => 'Ivinhema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5004809',
				'name' => 'Japorã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5004908',
				'name' => 'Jaraguari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5005004',
				'name' => 'Jardim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5005103',
				'name' => 'Jateí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5005152',
				'name' => 'Juti',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5005202',
				'name' => 'Ladário',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5005251',
				'name' => 'Laguna Carapã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5005400',
				'name' => 'Maracaju',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5005608',
				'name' => 'Miranda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5005681',
				'name' => 'Mundo Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5005707',
				'name' => 'Naviraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5005806',
				'name' => 'Nioaque',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5006002',
				'name' => 'Nova Alvorada do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5006200',
				'name' => 'Nova Andradina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5006259',
				'name' => 'Novo Horizonte do Sul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5006275',
				'name' => 'Paraíso das Águas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5006309',
				'name' => 'Paranaíba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5006358',
				'name' => 'Paranhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5006408',
				'name' => 'Pedro Gomes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5006606',
				'name' => 'Ponta Porã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5006903',
				'name' => 'Porto Murtinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5007109',
				'name' => 'Ribas do Rio Pardo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5007208',
				'name' => 'Rio Brilhante',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5007307',
				'name' => 'Rio Negro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5007406',
				'name' => 'Rio Verde de Mato Grosso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5007505',
				'name' => 'Rochedo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5007554',
				'name' => 'Santa Rita do Pardo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5007695',
				'name' => 'São Gabriel do Oeste',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5007703',
				'name' => 'Sete Quedas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5007802',
				'name' => 'Selvíria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5007901',
				'name' => 'Sidrolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5007935',
				'name' => 'Sonora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5007950',
				'name' => 'Tacuru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5007976',
				'name' => 'Taquarussu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5008008',
				'name' => 'Terenos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5008305',
				'name' => 'Três Lagoas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '5008404',
				'name' => 'Vicentina',
				'state_id' => $state->id
			]
		]);
    }
}
