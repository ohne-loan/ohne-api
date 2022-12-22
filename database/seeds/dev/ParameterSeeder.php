<?php

namespace Database\Seeds\Dev;

use App\Models\Parameter;
use Illuminate\Database\Seeder;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Parameter::insert([
            [
                'key' => 'contact.email',
                'value' => 'ohne@ohne.com',
                'type' => 'STRING',
                'alias' => 'E-mail de padrão para contato OHNE',
                'public' => false
            ],
            [
                'key' => 'signature.email',
                'value' => 'ohne@ohne.com.br',
                'type' => 'STRING',
                'alias' => 'E-mail padrão para assinatura de contratos',
                'public' => false
            ],
			[
				'key' => 'lib.d4sign.safe',
                'value' => 'd6347068-2096-44c3-9f9f-d2a7bd383475',
                'type' => 'STRING',
				'alias' => 'Cofre de contratos na D4sign',
				'public' => false
			],
			[
				'key' => 'loan.contract.template',
                'value' => 'MTkxNQ==',
				'type' => 'STRING',
				'alias' => 'ID do template de contrato na D4sign',
				'public' => false
			],
			[
				'key' => 'loan.contract.template.topazio',
                'value' => 'Mjg1Mw==',
				'type' => 'STRING',
				'alias' => 'ID do template de contrato na D4sign',
				'public' => false
			],
			[
				'key' => 'investment.contract.template',
				'value' => 'MTQ1OQ==',
				'type' => 'STRING',
				'alias' => 'ID do template de contrato na D4sign',
				'public' => false
			],
			[
				'key' => 'loan.default.rate.month',
				'value' => '0.03',
				'type' => 'FLOAT',
				'alias' => 'Taxa padrão para simulação de empréstimos',
				'public' => true
			],
            [
                'key' => 'loan.default.rate.year',
                'value' => '0.43',
                'type' => 'FLOAT',
                'alias' => 'Taxa padrão para simulação de empréstimos',
                'public' => true
            ],
			[
				'key' => 'investment.default.num_installments',
				'value' => '48',
				'type' => 'INTEGER',
				'alias' => 'Número de parcelas para empréstimos',
				'public' => true
			],
			[
				'key' => 'investment.amount.min',
				'value' => '5000.0',
				'type' => 'FLOAT',
				'alias' => 'Valor mínimo de investimento',
				'public' => true
			],
			[
				'key' => 'investment.amount.max',
				'value' => '500000.0',
				'type' => 'FLOAT',
				'alias' => 'Valor máximo de investimento',
				'public' => true
			],
			[
				'key' => 'loan.amount.min',
				'value' => '5000.0',
				'type' => 'FLOAT',
				'alias' => 'Valor mínimo de empréstimo',
				'public' => true
			],
			[
				'key' => 'loan.amount.max',
				'value' => '40000.0',
				'type' => 'FLOAT',
				'alias' => 'Valor máximo de empréstimo',
				'public' => true
			],
			[
				'key' => 'user.register.expires_time',
				'value' => '24',
				'type' => 'INTEGER',
				'alias' => 'Intervalo em horas para a expiração do e-mail de cadastro',
				'public' => false
			],
			[
				'key' => 'loan.installments.sets.app',
				'value' => '1;2;3;4;5;6;7;8;9;10;11;12;13;14;15;16;17;18',
				'type' => 'ARRAY',
				'alias' => 'Quantidade de parcelas para empréstimo simulação do site',
				'public' => true
			],
            [
                'key' => 'loan.installments.sets.site',
                'value' => '6;10;12;18',
                'type' => 'ARRAY',
                'alias' => 'Quantidade de parcelas para empréstimo real do cadastro',
                'public' => true
            ],
            [
                'key' => 'loan.simulation.type.app',
                'value' => 'APP',
                'type' => 'STRING',
                'alias' => 'Parâmetro para simulação do empréstimo real',
                'public' => true
            ],
            [
                'key' => 'loan.simulation.type.site',
                'value' => 'SITE',
                'type' => 'STRING',
                'alias' => 'Parâmetro para simulação do empréstimo do site',
                'public' => true
            ],
			[
				'key' => 'investment.payment.days',
				'value' => '20;25;30',
				'type' => 'ARRAY',
				'alias' => 'Datas para o recebimento das contraprestações',
				'public' => true
			],
			[
				'key' => 'investment.check_alpha',
				'value' => '1',
				'type' => 'BOOLEAN',
				'alias' => 'Realizar checagem ALPHA ao realizar o cadastro inicial para investimentos',
				'public' => false
			],
			[
				'key' => 'invoice.overdue.fine',
				'value' => '0.02',
				'type' => 'FLOAT',
				'alias' => 'Porcentagem de multa cobrada sobre o valor total do empréstimo em caso de atrasos no boleto',
				'public' => true
			],
			[
				'key' => 'invoice.overdue.interest',
				'value' => '0.01',
				'type' => 'FLOAT',
				'alias' => 'Porcentagem de juros cobrada para cada dia de atraso do boleto',
				'public' => true
			],
            [
                'key' => 'invoice.overdue.maxDays',
                'value' => '30',
                'type' => 'INTEGER',
                'alias' => 'Número máximo de dias que o boleto poderá ser pago após o vencimento',
                'public' => true
            ],
            [
                'key' => 'credor.company',
                'value' => 'SOROCRED CRÉDITO FINANCIAMENTO E INVESTIMENTO S/A',
                'type' => 'STRING',
                'alias' => 'Nome da instituição credora',
                'public' => true
            ],
            [
                'key' => 'credor.company.address',
                'value' => 'Rua XV de Novembro, 45 CENTRO - SOROCABA – SP',
                'type' => 'STRING',
                'alias' => 'Endereço da instituição credora',
                'public' => true
            ],
            [
                'key' => 'credor.company.cnpj',
                'value' => '04.814.563/0001-74',
                'type' => 'STRING',
                'alias' => 'CNPJ da instituição credora',
                'public' => true
            ],
		]);
    }
}
