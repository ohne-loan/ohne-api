@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>Olá {{$name}}, como vai?</strong></p>
    <p style="text-align: justify;">Infelizmente não temos boas notícias...</p>
    <p style="text-align: justify;">A parcela do seu empréstimo venceu no dia<strong> {{$boletoDate}}</strong>. Tentamos alguns contatos por email, porém, sem sucesso.</p>
    <p style="text-align: justify;">Se o pagamento não for realizado nos <strong>próximos dias</strong>, seu nome e cpf poderão ser incluídos nos órgãos de proteção ao crédito. O Boa Vista SCPC e o Serasa são empresas que trabalham com esses serviços, por exemplo.</p>
    <p style="text-align: justify;">Ter seu nome incluído nesses órgãos pode dificultar sua vida financeira, tais como compras, parcelamentos e financiamentos.</p>
    <p style="text-align: justify;">Por isso, tente aproveitar este tempo que ainda resta para regularizar a sua situação. <a style="color: #00c57d;" href="{{$linkBoleto}}">Clique aqui</a> para acessar o boleto.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Se estiver com dificuldade para realizar o pagamento <a href="https://ohne.com.br/fale-conosco/" style="color: #00c57d; text-decoration: underline;">fale com a gente</a> que iremos te ajudar!</p>
    <p style="text-align: justify;">Evite juros desnecessários mantendo o pagamento das parcelas em dia <span>😉</span></p>
    <p style="text-align: justify;">Obrigado por fazer parte da família Ohne!</p>
    <p style="text-align: justify;">Estamos à sua disposição sempre que precisar.</p>
@endsection
