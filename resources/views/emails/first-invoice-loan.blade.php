@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>Olá {{$name}}, tudo bem?</strong></p>
    <p>Já faz um mês que estamos ajudando você a realizar seus sonhos. E para a nós, é motivo de muita alegria tê-lo(a) como nosso(a) cliente. :)</p>
    <p>{{$name}}, para te ajudar, seu boleto já está disponível no link abaixo. Lembrando que a fatura pode ser paga em qualquer banco.</p>
    <p>&nbsp;</p>
    <p style="text-align: center;"><a style="color: #00c57d;" href="{{ $linkBoleto }}">Visualizar Boleto</a></p>
    <p>&nbsp;</p>
    <p>Obrigado por fazer parte da família Ohne!</p>
    <p>Estamos à sua disposição sempre que precisar.</p>
@endsection
