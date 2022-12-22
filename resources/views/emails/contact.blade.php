@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00C57D;"><b>Contato recebido pelo formulário do site</b></p>
    <p><b>Nome:</b> {{$data['name']}}</p>
    <p><b>Email:</b> {{$data['email']}}</p>
    <p><b>Telefone:</b> {{$data['phone']}}</p>
    <p><b>Assunto:</b> {{$data['subject']}}</p>
    <p><b>Conteúdo:</b> {{$data['message']}}</p>
@endsection