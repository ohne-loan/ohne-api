@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>Olá {{$name}}, tudo bem?</strong></p>

    <p>Você pode acessar o seu boleto para pagamento no dia {{$dueDate}} <a style="color: #00c57d;" href="{{ $invoiceLink }}">clicando aqui</a>.</p>

    <p>{{$installmentsText}}<p>

    <p><strong>Valor:</strong> {{$paymentValue}} <br>
    <strong>Vencimento:</strong> {{$dueDate}} <br>
    <strong>Código de barras:</strong> {{$barcode}}</p>

    <p>Um grande abraço!</p>
    <p>Ohne</p>
@endsection
