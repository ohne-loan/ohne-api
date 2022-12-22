@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>Olá {{$name}}, como está?</strong></p>
    <p style="text-align: justify;">Estamos aqui para entender quais são as suas dificuldades com o pagamento da parcela do seu empréstimo que venceu no dia <strong>{{$boletoDate}}</strong>.</p>
    <p style="text-align: justify;">Caso esteja passando por dificuldade financeira, nos procure para que possamos te dar uma opção de refinanciamento da sua dívida.</p>
    <p style="text-align: justify;">Tão logo você efetue o pagamento, seu nome será retirado da lista de devedores dentro de 72h.</p>
    <p style="text-align: justify;">Você pode acessar o seu boleto pelo link abaixo.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: center;"><a style="color: #00c57d;" href="{{ $linkBoleto }}">Visualizar Boleto</a></p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Caso o pagamento tenha sido realizado, pedimos que desconsidere esse aviso.</p>
    <p style="text-align: justify;">Estamos torcendo para que você supere logo essa fase e possa partir para um próximo nível.</p>
    <p style="text-align: justify;">Às vezes nossa vida parece um jogo de videogame, não é mesmo? ;)</p>
    <p style="text-align: justify;">Conte sempre com a Ohne, {{$name}}!</p>
@endsection
