@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>Olá {{$name}}, tudo bem?</strong></p>
    <p>Hoje é o dia do vencimento da parcela <strong>{{$numeroParcela}}</strong> do seu empréstimo.</p>
    <p>A essa altura você deve ter recebido o boleto que enviamos por aqui mesmo.</p>
    <p style="text-align: justify;">O objetivo desse email é apenas para lembrá-lo(a). Mas se você esqueceu, basta clicar no botão abaixo, onde seu boleto estará disponível =D</p>
    <p style="text-align: center;"><a style="color: #00c57d;" href="{{$linkBoleto}}">Visualizar Boleto</a></p>
    <p>Caso já tenha efetuado o pagamento, desconsidere essa mensagem.</p>
    <p>&nbsp;</p>
    <p>Obrigado por fazer parte da família Ohne, e conte sempre conosco!</p>
    <p>Qualquer dúvida, estamos aqui!</p>
@endsection
