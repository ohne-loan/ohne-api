@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00C57D;"><b>Olá {{$name}},</b></p>
    <p>Tudo bem?</p>
    <p>Hoje é o dia do vencimento da sua parcela referente ao empréstimo conosco.</p>
    <p>A essa altura você deve ter recebido o boleto que enviamos para o seu email. O objetivo desse email é apenas para lembrá-la
        que <u><b>ontem</b></u> lhe enviamos o boleto para pagamento da sua parcela e como identificamos que o mesmo não foi aberto, enviamos
        essa mensagem apenas para pedir que verifique se o mesmo não foi parar em sua caixa de spam.</p>
    <p>Conte sempre conosco!</p>
    <p>Obrigado por fazer parte da família Ohne!</p>
    <p>Estamos à sua disposição sempre que precisar.</p>
@endsection
