@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>Olá {{$name}}, tudo bem?</strong></p>
    <p>Está tendo dificuldade para quitar a parcela do seu empréstimo? Entre em contato conosco e juntos resolveremos da melhor maneira possível ;)</p>
    <p>O seu boleto venceu no dia <strong>{{$boletoDate}}</strong> e ainda não identificamos o pagamento. Caso tenha realizado, desconsidere este aviso.</p>
    <p>Você pode acessar o boleto pelo link abaixo.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: center;"><a style="color: #00c57d;" href="{{$linkBoleto}}">Ver Boleto</a></p>
    <p style="text-align: justify;">&nbsp;</p>
    <p>Evite juros desnecessários mantendo o pagamento das parcelas em dia.</p>
    <p style="text-align: justify;">Qualquer dificuldade que esteja tendo para quitar o valor, fale com a gente. Vamos te ajudar! =D</p>
    <p>Obrigado por fazer parte da família Ohne!</p>
    <p>Estamos à sua disposição sempre que precisar.</p>
@endsection
