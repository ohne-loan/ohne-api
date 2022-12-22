@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>Olá {{$name}}, tudo bem?</strong></p>
    <p>Infelizmente seu cadastro não foi aprovado no nosso sistema. :(</p>
    <p style="text-align: justify;">Para realizar outro pedido, verifique seus documentos, e tente novamente <strong>após 90 dias</strong>. Mas antes disso, clique no botão abaixo para ver nossas sugestões e nos deixe ajudar a realizar seus sonhos.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: center;">&nbsp;<span style="text-decoration: underline;"><a href="https://www.ohne.com.br/duvidas/" style="color: #00c57d; text-decoration: underline;">Dúvidas Frequentes</a></span></p>
    <p>&nbsp;</p>
    <p>Obrigado pela confiança e até a próxima.</p>
    <p>Estamos à sua disposição sempre que precisar.</p>
@endsection
