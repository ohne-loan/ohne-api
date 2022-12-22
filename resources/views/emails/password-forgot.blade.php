@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00C57D;"><b>Olá {{$name}},</b></p>
    <p>Tudo bem?</p>
    <p>Notamos que você solicitou a recuperação de sua senha. Clique no link abaixo para redefini-la:</p>
    <a style="color: #00C57D;" href="{{ $urlApp }}">Redefinir Senha</a>
    <p>Caso não teha solicitado esta ação, por favor, ignore este e-mail.</p>
@endsection