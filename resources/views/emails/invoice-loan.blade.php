@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00C57D;"><b>Olá {{$name}},</b></p>
    <p>Tudo bem?</p>
    <p>Estamos por aqui para enviar o boleto de pagamento do seu empréstimo. Para facilitar, essa é uma ficha de compensação que pode ser paga em qualquer banco até a data do vencimento. ;)</p>
    <p style="text-align: center;"><a style="color: #00c57d;" href="{{$linkBoleto}}">Visualizar Boleto</a></p>
    <p>Mais uma vez obrigado por ter nos escolhido para fazer parte dos seus sonhos.</p>
    <p>Conte sempre com a gente, {{$name}}.</p>
    <p>Estamos à sua disposição sempre que precisar.</p>
@endsection
