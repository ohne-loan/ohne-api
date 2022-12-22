@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>Olá {{$name}}, tudo bem?</strong></p>
    <p style="text-align: justify;">A parcela do seu empréstimo realizado conosco venceu no dia <strong>{{ $boletoDate }}</strong> e ainda não identificamos o pagamento.</p>
    <p style="text-align: justify;">Enviamos o boleto para o seu email, e esta mensagem é apenas para lembrá-lo(a) de verificar sua caixa de <em>spam</em>, caso não tenha recebido.</p>
    <p style="text-align: justify;">Mas para te ajudar, seu boleto atualizado está disponível no link abaixo.</p>
    <p style="text-align: justify;">Lembrando que a fatura pode ser paga em qualquer banco, mesmo após o vencimento.</p>
    <p style="text-align: center;">&nbsp;</p>
    <p style="text-align: center;"><a style="color: #00c57d;" href="{{ $linkBoleto }}">Visualizar Boleto</a></p>
    <p style="text-align: center;">&nbsp;</p>
    <p style="text-align: justify;">Caso já tenha efetuado o pagamento, desconsidere essa mensagem.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Qualquer dificuldade que esteja tendo para quitar o valor, entre em contato e juntos resolveremos da melhor maneira possível =D</p>
    <p style="text-align: justify;">Obrigado por fazer parte da família Ohne, e conte sempre conosco!</p>
    <p style="text-align: justify;">Qualquer dúvida, estamos aqui!</p>
@endsection
