@extends('emails.model')
@section('content')
    <p style="font-size: x-large; color: #00C57D;"><b>Olá {{$name}},</b></p>
    <p>Tudo bem?</p>
    <p>Você alterou sua senha.</p>
    <p>Acesse o sistema com a sua nova senha!</p>
@endsection