@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>Olá {{$name}}, tudo bem?</strong></p>
    <p>Obrigado por iniciar o processo de solicitação de empréstimo.</p>
    <p>Infelizmente não podemos dar continuidade ao processo. Verifique seus documentos e tente novamente <strong>após 90 dias</strong>.</p>
    <p>Mas antes disso, clique no botão abaixo para ver nossas sugestões e nos deixe ajudar a realizar seus sonhos.</p>
    <br>
    <p style="text-align: center;">&nbsp;<span style="text-decoration: underline;"><a href="https://www.ohne.com.br/duvidas/" style="color: #00c57d; text-decoration: underline;">Dúvidas Frequentes</a></span></p>
    <br>
    <p>Obrigado pela confiança e até a próxima.</p>
    <p>Estamos à sua disposição sempre que precisar!</p>
@endsection
