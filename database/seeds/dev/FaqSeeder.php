<?php

namespace Database\Seeds\Dev;

use App\Models\FAQ\Categorie;
use App\Models\FAQ\FAQ;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		// SOBRE A OHNE
		$categorie = Categorie::create([
		    'title' => 'SOBRE A OHNE'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'O que a Ohne oferece?',
            'answer' => 'Oferece empréstimo pessoal online de forma facilitada, rápida e segura para pessoas físicas não negativadas. O valor do empréstimo é de 1 mil a 40 mil reais.'
        ]);


        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'O serviço da Ohne é seguro?',
            'answer' => 'A Ohne trabalha com todos os parâmetros estabelecidos por lei, atuando como correspondente bancário de uma instituição financeira regulamentada pelo Banco Central do Brasil. Sendo assim, a Ohne é 100% segura para seu empréstimo.'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Por que devo apresentar meus dados pessoais?',
            'answer' => 'Os dados pessoais fornecem para Ohne as informações de quem você é. Dessa forma, conseguimos oferecer o crédito que mais se adapta às suas necessidades, dentro da sua atual situação financeira.'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'A Ohne é um banco?',
            'answer' => 'Não. A Ohne é uma correspondente bancária do Banco Topázio, uma instituição financeira regulamentada pelo Banco Central do Brasil segundo os termos da legislação brasileira.'
        ]);

        //EMPRÉSTIMO

        $categorie = Categorie::create([
            'title' => 'EMPRÉSTIMO'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Como solicito empréstimo na Ohne?',
            'answer' => 'Entre na plataforma da Ohne, na área de empréstimos, preencha seus dados e solicite uma simulação. Com isso, a Ohne consegue saber quem é você e qual é a sua necessidade. A empresa fará uma análise do seu perfil de crédito e encontrará a melhor opção de crédito com a melhor taxa.'
        ]);


        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Quais os documentos necessários?',
            'answer' => '<ol><li>Documento de identidade com validade em território nacional (CNH ou RG e CPF)</li><li>Comprovante de residência (Menos de 03 meses)</li><li>Comprovante de renda (Menos de 03 meses)</li><li>Se casado: Comprovante de renda do cônjuge (Menos de 03 meses)</li></ol>'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Como envio meus documentos?',
            'answer' => 'Dentro da própria plataforma, durante a etapa de preenchimento dos dados complementares, você pode fazer o upload dos documentos solicitados ou até mesmo tirar a foto, caso esteja fazendo o processo através do seu smartphone ou tablet.'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Qual o tempo de resposta para minha análise?',
            'answer' => 'Você descobre a sua taxa em até 5 minutos e depois é só completar o cadastro. Após o cadastro, você saberá o resultado final da solicitação em até 48 horas.'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Como assino o contrato?',
            'answer' => 'Após o crédito aprovado, o contrato é assinado digitalmente através de uma plataforma parceira da Ohne, que lhe enviará um email com o link direcionado. Não é necessário imprimir o contrato. Tudo é feito digitalmente para simplificar a sua vida e ao final do processo, você pode fazer o download do contrato já assinado.'
        ]);


        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'É necessário algum depósito antecipado?',
            'answer' => 'Não. A Ohne não solicita nenhum tipo de depósito ou transferência antecipada. Todos os pagamentos são feitos através de boletos enviados por email ou solicitados pelo usuário dentro da plataforma. Caso você receba algum email duvidoso, por favor, entre em contato conosco.'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Posso ser negativado?',
            'answer' => 'Não. A Ohne não disponibiliza crédito para CPFs negativados.'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Não tenho conta em banco, posso pedir um empréstimo?',
            'answer' => 'Não. Para solicitar um empréstimo na Ohne é necessário possuir uma conta bancária ativa em seu nome.'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Posso solicitar um empréstimo no nome da minha esposa/meu marido?',
            'answer' => 'Não. O empréstimo deve ser solicitado no seu nome. O que você poderá fazer, no entanto, é utilizar um comprovante de residência no nome dos pais ou cônjuge, caso more com eles, e um comprovante de renda familiar para aumentar suas chances de crédito.'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Como faço meu login?',
            'answer' => 'Ao solicitar um empréstimo, caso você seja aprovado, automaticamente você estará logado e poderá acompanhar os detalhes do seu empréstimo através da plataforma Ohne, utilizando seu email e senha criada durante o processo.'
        ]);

        //DOCUMENTAÇÃO

        $categorie = Categorie::create([
            'title' => 'DOCUMENTAÇÃO'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Quais documentos devo ter em mãos para solicitar um empréstimo?',
            'answer' => '<ol><li>Documento de identidade com validade em território nacional (CNH ou RG e CPF)</li><li>Comprovante de residência (Menos de 03 meses)</li><li>Comprovante de renda (Menos de 03 meses)</li><li>Se casado: Comprovante de renda do cônjuge (Menos de 03 meses)</li></ol>'
            ]);


        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Quais tipos de comprovantes de residência são aceitos?',
            'answer' => 'São aceitos os seguintes comprovantes:
<ul>
    <li>Conta de luz.</li>
    <li>Conta de telefone (fixo).</li>
    <li>Conta de água (em que conste localidade e o nome do cliente).</li>
    <li>Conta de gás.</li>
    <li>Fatura de cartão de crédito.</li>
    <li>Extrato de fundo de garantia (emitido pela Caixa Econômica Federal).</li>
</ul>
Caso você não possua comprovante de endereço em seu nome, serão aceitos comprovantes em nome do cônjuge, pais ou irmãos, desde que a data de vencimento seja, no máximo, de até 60 dias da data da solicitação do crédito. '
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Quais comprovantes de renda são aceitos?',
            'answer' => '<u>Assalariados:</u>
<ul>
    <li>Holerite ou contracheque informatizado do mês corrente ou anterior.</li>
    <li>Comissionados deverão apresentar os três últimos contracheques para cálculo da média mensal.</li>
</ul>
<u>Aposentados/Pensionistas:</u>
<ul>
    <li>Último extrato do INSS.</li>
    <li>Comprovante de saque do INSS (emitido há no máximo 30 dias).</li>
    <li>Recibo de depósito de benefício (recibo com autenticação).</li>
</ul>
<u>Profissionais liberais:</u>
<ul>
    <li>Apresentação da Carteira de Órgão de Classe E.</li>
    <li>Declaração de empresas que comprovem o tempo de prestação de serviço e o valor recebido pela atividade realizada (empresas reconhecidas).</li>
</ul>
<u>Empresários (sócios de empresas ou proprietários de firmas individuais):</u>
<ul>
    <li>IR (declaração do Imposto de Renda do último exercício).</li>
    <li>Contrato Social ou documento de firma individual.</li>
</ul>
<u>Agricultor/Pecuarista:</u>
<ul>
    <li>Notificação do IR + ITR.</li>
</ul>
<u>Autônomo sem comprovação de profissão/renda:</u>
<ul>
    <li>Carnê 100% pago, quitado há no máximo 60 dias.</li>
    <li>Fatura de cartão de crédito com pagamento total no último vencimento.</li>
    <li>Declaração de Imposto de Renda não é aceito como comprovante de renda.</li>
</ul>'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Como vou assinar o contrato de empréstimo?',
            'answer' => 'A assinatura do contrato é online, assim como todos os demais procedimentos. Uma empresa parceira da Ohne, certificada em assinaturas digitais, enviará um link para o seu email, para que você possa assinar o seu contrato com total segurança.'
        ]);


        // JÁ SOU CLIENTE
        $categorie = Categorie::create([
            'title' => 'JÁ SOU CLIENTE'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Posso alterar a data de vencimento dos boletos?',
            'answer' => 'Não é possível alterar a data de vencimento dos seus boletos. O dia de vencimento é sempre um dia após a data de assinatura do seu contrato.'
        ]);


        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Posso solicitar outro empréstimo sem ter quitado o atual?',
            'answer' => 'Você só poderá solicitar outro empréstimo caso tenha quitado o anterior e ter mais de 90 dias desde a solicitação do último empréstimo.'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Posso quitar o empréstimo antes do prazo estipulado?',
            'answer' => 'Sim, é possível. Para isto é necessário enviar um email para contato@ohne.com.br e solicitar a quitação do mesmo. A Ohne fará os cálculos e lhe responderá com os valores para quitação. Caso esteja de acordo, um boleto será encaminhado para o seu email com a data de vencimento solicitada.'
        ]);


        // PERGUNTAS GERAIS
        $categorie = Categorie::create([
            'title' => 'PERGUNTAS GERAIS'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'O que é CET?',
            'answer' => 'É o Custo Efetivo Total, taxa que considera todos os encargos e despesas incidentes nas operações de crédito e de arrendamento mercantil financeiro, contratadas ou ofertadas a pessoas físicas, microempresas ou empresas de pequeno porte. O principal custo da operação de crédito é a taxa de juros cobrada pela instituição financeira. No entanto, quando são acrescidos tributos, tarifas, seguros, custos relacionados ao registro de contrato e outras despesas cobradas na operação, a taxa real da operação aumenta. A essa taxa – calculada levando-se em consideração todos os custos incluídos na operação de crédito — é denominada de Custo Efetivo Total (CET). Em outras palavras, ao comparar operações de crédito ofertadas por duas instituições financeiras, aquela que apresenta uma taxa de juros mais baixa pode não ser a mais vantajosa para o consumidor, quando considerados todos os outros custos envolvidos.'
        ]);


        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Por que não consegui um empréstimo?',
            'answer' => 'Consulte se você não está negativado no mercado. Revise se seus dados cadastrais estão corretos. Além disso, o valor solicitado pode não condizer com seu histórico na análise de crédito ou sua avaliação não foi satisfatória.'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Preciso ser cliente para ter um cadastro?',
            'answer' => 'Sim, pois o cadastro irá servir para você acompanhar o seu empréstimo.Para qualquer outra ação no site, não se faz necessário o cadastro.'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'A Ohne trabalha com empréstimo consignado?',
            'answer' => 'Por enquanto não, mas fique atento! Em breve, lançaremos novos produtos para todos os tipos de público.'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Por que as taxas da Ohne são as mais baixas?',
            'answer' => 'Pelo fato da Ohne ser uma fintech, não possuindo agências e centenas de funcionários, como acontece em bancos tradicionais. Além disso, a Ohne trabalha com empresas parceiras, otimizando a análise de crédito dos clientes, visando selecionar apenas os bons pagadores e recompensá-los com as menores taxas do mercado.'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'Meu pedido de empréstimo foi negado. Quando posso solicitar outro?',
            'answer' => 'Você tem um prazo de 90 dias para solicitar outro empréstimo. Caso esteja negativado este período serve para sua regularização no mercado.'
        ]);

        FAQ::create([
            'faq_categorie_id' => $categorie->id,
            'question' => 'O que acontece se eu atrasar o pagamento do meu empréstimo?',
            'answer' => 'Como consta em contrato, o não pagamento de uma de suas parcelas resulta em juros adicionais, multa e na possibilidade de ter seu nome automaticamente inscrito em órgãos de proteção ao crédito. Portanto, caso algum imprevisto aconteça, entre em contato conosco através do link que enviaremos para o seu email.'
        ]);




    }
}
