@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00C57D;"><b>Olá {{$name}},</b></p>
    <p>Tudo bem?</p>
    <p>Obrigado por confiar na Ohne para alcançar os seus objetivos.</p>
    <p>Aqui está o código para prosseguir com seu empréstimo:</p>
    <p align="center" style="color: #00C57D; font-size: large;">{{$token}}</p>
@endsection