@extends('emails.model')
@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>{{$name}}, bem vindo à Ohne!!!</strong></p>
    <p>Pronto, seu empréstimo já está liberado! =D</p>
    <p>Você receberá o dinheiro em até 2 dias úteis, na conta que nos passou.</p>
    <p>Informamos também que a data das suas parcelas ficaram para o dia <strong><span style="color: #00c57d;">{{$installmentDueDateDay}}&nbsp;</span></strong>de cada mês.</p>
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
    <p>{{$name}}, caso tenha esquecido de fazer o download do contrato, é só <a style="color: #00c57d;" href="{{$contractLink}}">clicar aqui</a>.</p>
    <p>Estamos aqui para realizar seus sonhos e muito felizes em ter você como nosso cliente!</p>
    <p>Conte sempre conosco! :)</p>
@endsection