@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00C57D;"><b>Olá {{$name}},</b></p>
    <p style="text-align: justify;">Você deve ter recebido algumas das nossas mensagens sobre o vencimento de parcela.</p>
    <p style="text-align: justify;">Gostaríamos de saber o que fazer para ajudá-lo(a) a superar essa maré de dificuldade?</p>
    <p style="text-align: justify;">Nos procure e tentaremos apresentar uma alternativa que caiba em seu bolso. ;)</p>
    <p style="text-align: justify;">Você pode acessar o seu boleto pelo link abaixo.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: center;"><a style="color: #00c57d;" href="{{ $linkBoleto }}">Visualizar Boleto</a></p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Caso o mesmo tenha sido realizado, pedimos que desconsidere esse aviso.</p>
    <p style="text-align: justify;">Evite juros desnecessários, mantendo o pagamento das parcelas em dia.</p>
    <p style="text-align: justify;">Estamos à sua disposição sempre que precisar.</p>
@endsection
