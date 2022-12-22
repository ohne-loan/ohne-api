@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>Olá {{$name}}, como vai?</strong></p>
    <p style="text-align: justify;">Infelizmente, não identificamos o pagamento da parcela do seu empréstimo, que venceu no dia <strong>{{ $boletoDate }}</strong>.</p>
    <p style="text-align: justify;">O objetivo deste email é apenas lembrá-lo(a) de verificar sua caixa de <em>spam</em>, caso não tenha recebido.</p>
    <p style="text-align: justify;">Mas caso tenha esquecido, basta clicar no botão abaixo, onde seu boleto estará disponível.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: center;"><a style="color: #00c57d;" href="{{$linkBoleto}}">Visualizar Boleto</a></p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Se o pagamento já foi efetuado, desconsidere essa mensagem.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Ah, e mais uma coisa... mantendo o pagamento das parcelas em dia, você evita aqueles juros chatos ;)</p>
    <p style="text-align: justify;">Obrigado por fazer parte da família Ohne!</p>
    <p style="text-align: justify;">Estamos à sua disposição sempre que precisar.</p>
@endsection
