@extends('emails.model')
@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>Olá {{$name}}, tudo bem?</strong></p>
    <p>Temos uma ótima notícia pra você 😄</p>
    <p style="text-align: justify;">Seu pedido de empréstimo na Ohne foi aprovado. Agora só falta uma etapa: a <strong>assinatura do contrato</strong>.</p>
    <p style="text-align: justify;">Em breve você receberá um email da <strong>D4Sign</strong>, nossa parceira em assinatura digital, com o passo a passo de como assinar, e pronto!</p>
    <p style="text-align: justify;">O contrato deve ser assinado em até 2 dias, caso contrário, entendemos que você desistiu do empréstimo e o cancelaremos.</p>
    <p style="text-align: justify;">Na Ohne, o processo é todo digital e online. Você vai assinar o contrato no conforto de sua casa. <strong>Sem</strong> a necessidade de registrar firma, autenticar ou nos enviar documentos pelo correio 😉</p>
    <p>Abaixo estão as informações principais do seu empréstimo:</p>
    <p>&nbsp;</p>
    <ul style="list-style-type: none;">
        <li>Nome completo: {{$fullName}}</li>
        <li>CPF: {{$cpf}}</li>
        <li>Data de Nascimento: {{$birthDate}}</li>
        <li>Valor do empréstimo: {{$loanAmount}}</li>
        <li>Quantidade de Parcelas: {{$numInstallments}}</li>
        <li>Valor das parcelas: {{$valueInstallments}}</li>
        <li>Data da primeira parcela: {{$firstDueDate}}</li>
        <li>Banco: {{$bank}}</li>
        <li>Agência: {{$agency}}</li>
        <li>Conta: {{$account}}</li>
    </ul>
    <p>&nbsp;</p>
    <p>Caso não esteja de acordo com alguma informação, entre em contato pelo <a style="color: #00c57d;" href="{{$contactLink}}">fale conosco</a>.</p>
    <p>Obrigado por fazer parte da família Ohne!</p>
    <p>Conte sempre conosco! :)</p>
@endsection