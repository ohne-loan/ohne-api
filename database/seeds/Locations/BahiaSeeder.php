<?php

namespace Database\Seeds\Locations;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class BahiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$state = State::create([
			'name' => 'Bahia',
			'uf' => 'BA'
		]);

		City::insert([
			[
				'ibge_code' => '2900108',
				'name' => 'Abaíra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2900207',
				'name' => 'Abaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2900306',
				'name' => 'Acajutiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2900355',
				'name' => 'Adustina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2900405',
				'name' => 'Água Fria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2900504',
				'name' => 'Érico Cardoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2900603',
				'name' => 'Aiquara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2900702',
				'name' => 'Alagoinhas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2900801',
				'name' => 'Alcobaça',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2900900',
				'name' => 'Almadina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2901007',
				'name' => 'Amargosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2901106',
				'name' => 'Amélia Rodrigues',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2901155',
				'name' => 'América Dourada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2901205',
				'name' => 'Anagé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2901304',
				'name' => 'Andaraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2901353',
				'name' => 'Andorinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2901403',
				'name' => 'Angical',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2901502',
				'name' => 'Anguera',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2901601',
				'name' => 'Antas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2901700',
				'name' => 'Antônio Cardoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2901809',
				'name' => 'Antônio Gonçalves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2901908',
				'name' => 'Aporá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2901957',
				'name' => 'Apuarema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2902005',
				'name' => 'Aracatu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2902054',
				'name' => 'Araças',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2902104',
				'name' => 'Araci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2902203',
				'name' => 'Aramari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2902252',
				'name' => 'Arataca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2902302',
				'name' => 'Aratuípe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2902401',
				'name' => 'Aurelino Leal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2902500',
				'name' => 'Baianópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2902609',
				'name' => 'Baixa Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2902658',
				'name' => 'Banzaê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2902708',
				'name' => 'Barra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2902807',
				'name' => 'Barra da Estiva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2902906',
				'name' => 'Barra do Choça',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2903003',
				'name' => 'Barra do Mendes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2903102',
				'name' => 'Barra do Rocha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2903201',
				'name' => 'Barreiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2903235',
				'name' => 'Barro Alto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2903276',
				'name' => 'Barrocas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2903300',
				'name' => 'Barro Preto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2903409',
				'name' => 'Belmonte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2903508',
				'name' => 'Belo Campo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2903607',
				'name' => 'Biritinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2903706',
				'name' => 'Boa Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2903805',
				'name' => 'Boa Vista do Tupim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2903904',
				'name' => 'Bom Jesus da Lapa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2903953',
				'name' => 'Bom Jesus da Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2904001',
				'name' => 'Boninal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2904050',
				'name' => 'Bonito',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2904100',
				'name' => 'Boquira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2904209',
				'name' => 'Botuporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2904308',
				'name' => 'Brejões',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2904407',
				'name' => 'Brejolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2904506',
				'name' => 'Brotas de Macaúbas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2904605',
				'name' => 'Brumado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2904704',
				'name' => 'Buerarema',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2904753',
				'name' => 'Buritirama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2904803',
				'name' => 'Caatiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2904852',
				'name' => 'Cabaceiras do Paraguaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2904902',
				'name' => 'Cachoeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2905008',
				'name' => 'Caculé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2905107',
				'name' => 'Caém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2905156',
				'name' => 'Caetanos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2905206',
				'name' => 'Caetité',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2905305',
				'name' => 'Cafarnaum',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2905404',
				'name' => 'Cairu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2905503',
				'name' => 'Caldeirão Grande',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2905602',
				'name' => 'Camacan',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2905701',
				'name' => 'Camaçari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2905800',
				'name' => 'Camamu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2905909',
				'name' => 'Campo Alegre de Lourdes',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2906006',
				'name' => 'Campo Formoso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2906105',
				'name' => 'Canápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2906204',
				'name' => 'Canarana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2906303',
				'name' => 'Canavieiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2906402',
				'name' => 'Candeal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2906501',
				'name' => 'Candeias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2906600',
				'name' => 'Candiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2906709',
				'name' => 'Cândido Sales',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2906808',
				'name' => 'Cansanção',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2906824',
				'name' => 'Canudos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2906857',
				'name' => 'Capela do Alto Alegre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2906873',
				'name' => 'Capim Grosso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2906899',
				'name' => 'Caraíbas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2906907',
				'name' => 'Caravelas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2907004',
				'name' => 'Cardeal da Silva',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2907103',
				'name' => 'Carinhanha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2907202',
				'name' => 'Casa Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2907301',
				'name' => 'Castro Alves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2907400',
				'name' => 'Catolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2907509',
				'name' => 'Catu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2907558',
				'name' => 'Caturama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2907608',
				'name' => 'Central',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2907707',
				'name' => 'Chorrochó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2907806',
				'name' => 'Cícero Dantas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2907905',
				'name' => 'Cipó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2908002',
				'name' => 'Coaraci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2908101',
				'name' => 'Cocos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2908200',
				'name' => 'Conceição da Feira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2908309',
				'name' => 'Conceição do Almeida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2908408',
				'name' => 'Conceição do Coité',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2908507',
				'name' => 'Conceição do Jacuípe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2908606',
				'name' => 'Conde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2908705',
				'name' => 'Condeúba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2908804',
				'name' => 'Contendas do Sincorá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2908903',
				'name' => 'Coração de Maria',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2909000',
				'name' => 'Cordeiros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2909109',
				'name' => 'Coribe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2909208',
				'name' => 'Coronel João Sá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2909307',
				'name' => 'Correntina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2909406',
				'name' => 'Cotegipe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2909505',
				'name' => 'Cravolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2909604',
				'name' => 'Crisópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2909703',
				'name' => 'Cristópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2909802',
				'name' => 'Cruz das Almas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2909901',
				'name' => 'Curaçá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910008',
				'name' => 'Dário Meira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910057',
				'name' => 'Dias D\'Ávila',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910107',
				'name' => 'Dom Basílio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910206',
				'name' => 'Dom Macedo Costa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910305',
				'name' => 'Elísio Medrado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910404',
				'name' => 'Encruzilhada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910503',
				'name' => 'Entre Rios',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910602',
				'name' => 'Esplanada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910701',
				'name' => 'Euclides da Cunha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910727',
				'name' => 'Eunápolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910750',
				'name' => 'Fátima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910776',
				'name' => 'Feira da Mata',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910800',
				'name' => 'Feira de Santana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910859',
				'name' => 'Filadélfia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2910909',
				'name' => 'Firmino Alves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2911006',
				'name' => 'Floresta Azul',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2911105',
				'name' => 'Formosa do Rio Preto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2911204',
				'name' => 'Gandu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2911253',
				'name' => 'Gavião',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2911303',
				'name' => 'Gentio do Ouro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2911402',
				'name' => 'Glória',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2911501',
				'name' => 'Gongogi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2911600',
				'name' => 'Governador Mangabeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2911659',
				'name' => 'Guajeru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2911709',
				'name' => 'Guanambi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2911808',
				'name' => 'Guaratinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2911857',
				'name' => 'Heliópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2911907',
				'name' => 'Iaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2912004',
				'name' => 'Ibiassucê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2912103',
				'name' => 'Ibicaraí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2912202',
				'name' => 'Ibicoara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2912301',
				'name' => 'Ibicuí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2912400',
				'name' => 'Ibipeba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2912509',
				'name' => 'Ibipitanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2912608',
				'name' => 'Ibiquera',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2912707',
				'name' => 'Ibirapitanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2912806',
				'name' => 'Ibirapuã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2912905',
				'name' => 'Ibirataia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2913002',
				'name' => 'Ibitiara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2913101',
				'name' => 'Ibititá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2913200',
				'name' => 'Ibotirama',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2913309',
				'name' => 'Ichu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2913408',
				'name' => 'Igaporã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2913457',
				'name' => 'Igrapiúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2913507',
				'name' => 'Iguaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2913606',
				'name' => 'Ilhéus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2913705',
				'name' => 'Inhambupe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2913804',
				'name' => 'Ipecaetá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2913903',
				'name' => 'Ipiaú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2914000',
				'name' => 'Ipirá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2914109',
				'name' => 'Ipupiara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2914208',
				'name' => 'Irajuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2914307',
				'name' => 'Iramaia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2914406',
				'name' => 'Iraquara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2914505',
				'name' => 'Irará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2914604',
				'name' => 'Irecê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2914653',
				'name' => 'Itabela',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2914703',
				'name' => 'Itaberaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2914802',
				'name' => 'Itabuna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2914901',
				'name' => 'Itacaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2915007',
				'name' => 'Itaeté',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2915106',
				'name' => 'Itagi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2915205',
				'name' => 'Itagibá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2915304',
				'name' => 'Itagimirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2915353',
				'name' => 'Itaguaçu da Bahia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2915403',
				'name' => 'Itaju do Colônia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2915502',
				'name' => 'Itajuípe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2915601',
				'name' => 'Itamaraju',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2915700',
				'name' => 'Itamari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2915809',
				'name' => 'Itambé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2915908',
				'name' => 'Itanagra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2916005',
				'name' => 'Itanhém',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2916104',
				'name' => 'Itaparica',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2916203',
				'name' => 'Itapé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2916302',
				'name' => 'Itapebi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2916401',
				'name' => 'Itapetinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2916500',
				'name' => 'Itapicuru',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2916609',
				'name' => 'Itapitanga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2916708',
				'name' => 'Itaquara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2916807',
				'name' => 'Itarantim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2916856',
				'name' => 'Itatim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2916906',
				'name' => 'Itiruçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2917003',
				'name' => 'Itiúba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2917102',
				'name' => 'Itororó',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2917201',
				'name' => 'Ituaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2917300',
				'name' => 'Ituberá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2917334',
				'name' => 'Iuiú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2917359',
				'name' => 'Jaborandi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2917409',
				'name' => 'Jacaraci',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2917508',
				'name' => 'Jacobina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2917607',
				'name' => 'Jaguaquara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2917706',
				'name' => 'Jaguarari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2917805',
				'name' => 'Jaguaripe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2917904',
				'name' => 'Jandaíra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2918001',
				'name' => 'Jequié',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2918100',
				'name' => 'Jeremoabo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2918209',
				'name' => 'Jiquiriçá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2918308',
				'name' => 'Jitaúna',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2918357',
				'name' => 'João Dourado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2918407',
				'name' => 'Juazeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2918456',
				'name' => 'Jucuruçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2918506',
				'name' => 'Jussara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2918555',
				'name' => 'Jussari',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2918605',
				'name' => 'Jussiape',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2918704',
				'name' => 'Lafaiete Coutinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2918753',
				'name' => 'Lagoa Real',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2918803',
				'name' => 'Laje',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2918902',
				'name' => 'Lajedão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919009',
				'name' => 'Lajedinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919058',
				'name' => 'Lajedo do Tabocal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919108',
				'name' => 'Lamarão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919157',
				'name' => 'Lapão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919207',
				'name' => 'Lauro de Freitas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919306',
				'name' => 'Lençóis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919405',
				'name' => 'Licínio de Almeida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919504',
				'name' => 'Livramento de Nossa Senhora',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919553',
				'name' => 'Luís Eduardo Magalhães',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919603',
				'name' => 'Macajuba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919702',
				'name' => 'Macarani',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919801',
				'name' => 'Macaúbas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919900',
				'name' => 'Macururé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919926',
				'name' => 'Madre de Deus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2919959',
				'name' => 'Maetinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2920007',
				'name' => 'Maiquinique',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2920106',
				'name' => 'Mairi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2920205',
				'name' => 'Malhada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2920304',
				'name' => 'Malhada de Pedras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2920403',
				'name' => 'Manoel Vitorino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2920452',
				'name' => 'Mansidão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2920502',
				'name' => 'Maracás',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2920601',
				'name' => 'Maragogipe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2920700',
				'name' => 'Maraú',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2920809',
				'name' => 'Marcionílio Souza',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2920908',
				'name' => 'Mascote',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2921005',
				'name' => 'Mata de São João',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2921054',
				'name' => 'Matina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2921104',
				'name' => 'Medeiros Neto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2921203',
				'name' => 'Miguel Calmon',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2921302',
				'name' => 'Milagres',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2921401',
				'name' => 'Mirangaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2921450',
				'name' => 'Mirante',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2921500',
				'name' => 'Monte Santo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2921609',
				'name' => 'Morpará',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2921708',
				'name' => 'Morro do Chapéu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2921807',
				'name' => 'Mortugaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2921906',
				'name' => 'Mucugê',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922003',
				'name' => 'Mucuri',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922052',
				'name' => 'Mulungu do Morro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922102',
				'name' => 'Mundo Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922201',
				'name' => 'Muniz Ferreira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922250',
				'name' => 'Muquém de São Francisco',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922300',
				'name' => 'Muritiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922409',
				'name' => 'Mutuípe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922508',
				'name' => 'Nazaré',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922607',
				'name' => 'Nilo Peçanha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922656',
				'name' => 'Nordestina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922706',
				'name' => 'Nova Canaã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922730',
				'name' => 'Nova Fátima',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922755',
				'name' => 'Nova Ibiá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922805',
				'name' => 'Nova Itarana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922854',
				'name' => 'Nova Redenção',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2922904',
				'name' => 'Nova Soure',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2923001',
				'name' => 'Nova Viçosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2923035',
				'name' => 'Novo Horizonte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2923050',
				'name' => 'Novo Triunfo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2923100',
				'name' => 'Olindina',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2923209',
				'name' => 'Oliveira dos Brejinhos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2923308',
				'name' => 'Ouriçangas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2923357',
				'name' => 'Ourolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2923407',
				'name' => 'Palmas de Monte Alto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2923506',
				'name' => 'Palmeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2923605',
				'name' => 'Paramirim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2923704',
				'name' => 'Paratinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2923803',
				'name' => 'Paripiranga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2923902',
				'name' => 'Pau Brasil',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2924009',
				'name' => 'Paulo Afonso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2924058',
				'name' => 'Pé de Serra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2924108',
				'name' => 'Pedrão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2924207',
				'name' => 'Pedro Alexandre',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2924306',
				'name' => 'Piatã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2924405',
				'name' => 'Pilão Arcado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2924504',
				'name' => 'Pindaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2924603',
				'name' => 'Pindobaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2924652',
				'name' => 'Pintadas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2924678',
				'name' => 'Piraí do Norte',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2924702',
				'name' => 'Piripá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2924801',
				'name' => 'Piritiba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2924900',
				'name' => 'Planaltino',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2925006',
				'name' => 'Planalto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2925105',
				'name' => 'Poções',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2925204',
				'name' => 'Pojuca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2925253',
				'name' => 'Ponto Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2925303',
				'name' => 'Porto Seguro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2925402',
				'name' => 'Potiraguá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2925501',
				'name' => 'Prado',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2925600',
				'name' => 'Presidente Dutra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2925709',
				'name' => 'Presidente Jânio Quadros',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2925758',
				'name' => 'Presidente Tancredo Neves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2925808',
				'name' => 'Queimadas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2925907',
				'name' => 'Quijingue',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2925931',
				'name' => 'Quixabeira',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2925956',
				'name' => 'Rafael Jambeiro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2926004',
				'name' => 'Remanso',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2926103',
				'name' => 'Retirolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2926202',
				'name' => 'Riachão das Neves',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2926301',
				'name' => 'Riachão do Jacuípe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2926400',
				'name' => 'Riacho de Santana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2926509',
				'name' => 'Ribeira do Amparo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2926608',
				'name' => 'Ribeira do Pombal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2926657',
				'name' => 'Ribeirão do Largo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2926707',
				'name' => 'Rio de Contas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2926806',
				'name' => 'Rio do Antônio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2926905',
				'name' => 'Rio do Pires',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2927002',
				'name' => 'Rio Real',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2927101',
				'name' => 'Rodelas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2927200',
				'name' => 'Ruy Barbosa',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2927309',
				'name' => 'Salinas da Margarida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2927408',
				'name' => 'Salvador',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2927507',
				'name' => 'Santa Bárbara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2927606',
				'name' => 'Santa Brígida',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2927705',
				'name' => 'Santa Cruz Cabrália',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2927804',
				'name' => 'Santa Cruz da Vitória',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2927903',
				'name' => 'Santa Inês',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2928000',
				'name' => 'Santaluz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2928059',
				'name' => 'Santa Luzia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2928109',
				'name' => 'Santa Maria da Vitória',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2928208',
				'name' => 'Santana',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2928307',
				'name' => 'Santanópolis',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2928406',
				'name' => 'Santa Rita de Cássia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2928505',
				'name' => 'Santa Teresinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2928604',
				'name' => 'Santo Amaro',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2928703',
				'name' => 'Santo Antônio de Jesus',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2928802',
				'name' => 'Santo Estêvão',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2928901',
				'name' => 'São Desidério',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2928950',
				'name' => 'São Domingos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929008',
				'name' => 'São Félix',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929057',
				'name' => 'São Félix do Coribe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929107',
				'name' => 'São Felipe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929206',
				'name' => 'São Francisco do Conde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929255',
				'name' => 'São Gabriel',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929305',
				'name' => 'São Gonçalo dos Campos',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929354',
				'name' => 'São José da Vitória',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929370',
				'name' => 'São José do Jacuípe',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929404',
				'name' => 'São Miguel das Matas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929503',
				'name' => 'São Sebastião do Passé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929602',
				'name' => 'Sapeaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929701',
				'name' => 'Sátiro Dias',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929750',
				'name' => 'Saubara',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929800',
				'name' => 'Saúde',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2929909',
				'name' => 'Seabra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2930006',
				'name' => 'Sebastião Laranjeiras',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2930105',
				'name' => 'Senhor do Bonfim',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2930154',
				'name' => 'Serra do Ramalho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2930204',
				'name' => 'Sento Sé',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2930303',
				'name' => 'Serra Dourada',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2930402',
				'name' => 'Serra Preta',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2930501',
				'name' => 'Serrinha',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2930600',
				'name' => 'Serrolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2930709',
				'name' => 'Simões Filho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2930758',
				'name' => 'Sítio do Mato',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2930766',
				'name' => 'Sítio do Quinto',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2930774',
				'name' => 'Sobradinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2930808',
				'name' => 'Souto Soares',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2930907',
				'name' => 'Tabocas do Brejo Velho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2931004',
				'name' => 'Tanhaçu',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2931053',
				'name' => 'Tanque Novo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2931103',
				'name' => 'Tanquinho',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2931202',
				'name' => 'Taperoá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2931301',
				'name' => 'Tapiramutá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2931350',
				'name' => 'Teixeira de Freitas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2931400',
				'name' => 'Teodoro Sampaio',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2931509',
				'name' => 'Teofilândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2931608',
				'name' => 'Teolândia',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2931707',
				'name' => 'Terra Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2931806',
				'name' => 'Tremedal',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2931905',
				'name' => 'Tucano',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2932002',
				'name' => 'Uauá',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2932101',
				'name' => 'Ubaíra',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2932200',
				'name' => 'Ubaitaba',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2932309',
				'name' => 'Ubatã',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2932408',
				'name' => 'Uibaí',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2932457',
				'name' => 'Umburanas',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2932507',
				'name' => 'Una',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2932606',
				'name' => 'Urandi',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2932705',
				'name' => 'Uruçuca',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2932804',
				'name' => 'Utinga',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2932903',
				'name' => 'Valença',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2933000',
				'name' => 'Valente',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2933059',
				'name' => 'Várzea da Roça',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2933109',
				'name' => 'Várzea do Poço',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2933158',
				'name' => 'Várzea Nova',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2933174',
				'name' => 'Varzedo',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2933208',
				'name' => 'Vera Cruz',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2933257',
				'name' => 'Vereda',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2933307',
				'name' => 'Vitória da Conquista',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2933406',
				'name' => 'Wagner',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2933455',
				'name' => 'Wanderley',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2933505',
				'name' => 'Wenceslau Guimarães',
				'state_id' => $state->id
			],
			[
				'ibge_code' => '2933604',
				'name' => 'Xique-Xique',
				'state_id' => $state->id
			]
		]);
    }
}
