@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00c57d; text-align: justify;"><strong>Olá {{$name}}, tudo bem?</strong></p>
    <p style="text-align: justify;">Você deve ter recebido nossas mensagens anteriores, sobre o vencimento da parcela. Caso esteja recebendo este aviso, seu nome já se encontra incluso nos órgãos de proteção ao crédito.</p>
    <p style="text-align: justify;">Porém, tão logo efetue o pagamento seu cpf é retirado da lista de devedores. O prazo para que isso aconteça é de 72h.</p>
    <p style="text-align: justify;">Você pode acessar o seu boleto pelo link abaixo.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: center;"><a style="color: #00c57d;" href="{{ $linkBoleto }}">Visualizar Boleto</a></p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Qualquer dificuldade que esteja tendo para quitar o valor, <a href="https://ohne.com.br/fale-conosco/" style="color: #00c57d; text-decoration: underline;">clique aqui</a> e fale com a gente que iremos te ajudar!</p>
    <p style="text-align: justify;">Se a parcela já foi quitada, pedimos então que desconsidere esse aviso.</p>
    <p style="text-align: justify;">Evite juros desnecessários, mantendo o pagamento das parcelas em dia.</p>
    <p style="text-align: justify;">Obrigado por fazer parte da família Ohne!</p>
    <p style="text-align: justify;">Estamos à sua disposição sempre que precisar.</p>
@endsection
