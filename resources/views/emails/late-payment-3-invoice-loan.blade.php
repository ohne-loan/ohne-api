@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>Olá {{$name}}, como vai?</strong></p>
    <p style="text-align: justify;">Vimos que a parcela do seu empréstimo realizado conosco venceu no dia <strong>{{ $boletoDate }}</strong>, mas ainda não identificamos o pagamento.</p>
    <p style="text-align: justify;">{{$name}}, para te ajudar, seu boleto está disponível no link abaixo.</p>
    <p style="text-align: justify;">Lembrando que a fatura pode ser paga em qualquer banco, mesmo após o vencimento.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: center;"><a style="color: #00c57d;" href="{{ $linkBoleto }}">Visualizar Boleto</a></p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Caso já tenha efetuado o pagamento, desconsidere esta mensagem.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Qualquer dificuldade que esteja tendo para quitar o valor, entre em contato para resolvermos da melhor forma possível =D</p>
    <p style="text-align: justify;">E mais uma vez, obrigado por fazer parte da família Ohne!</p>
@endsection
