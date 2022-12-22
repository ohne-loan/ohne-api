@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00C57D;"><b>Olá {{$name}},</b></p>
    <p style="text-align: justify;">Tudo bem?</p>
    <p style="text-align: justify;">Caso você esteja recebendo esse aviso, informamos que à qualquer momento o seu contrato poderá ser encaminhado para uma assessoria de cobrança.</p>
    <p style="text-align: justify;">Se deseja realizar o pagamento, você pode acessar o seu boleto pelo link abaixo.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: center;"><a style="color: #00c57d;" href="{{ $linkBoleto }}">Visualizar Boleto</a></p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Caso o mesmo tenha sido realizado, pedimos que desconsidere esse aviso.</p>
    <p style="text-align: justify;">Evite juros desnecessários, mantendo o pagamento das parcelas em dia.</p>
@endsection
