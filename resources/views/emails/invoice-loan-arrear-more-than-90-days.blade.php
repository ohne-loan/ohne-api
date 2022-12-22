@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>Olá {{$name}}, tudo bem?</strong></p>

    <p>{{$textQuantityInstallmentsArrear}}</p>

    <p>Vamos bater um papo para resolvermos isso juntos?</p>

    <p>Você pode utilizar o canal que preferir: 
    <a style="color: #00c57d;" href="mailto:contato@ohne.com.br?subject=Quero falar sobre minhas parcelas em atraso">email</a>
    ou 
    <a style="color: #00c57d;" href="https://api.whatsapp.com/send?phone=5579981340148&text=Ol%C3%A1,%20quero%20falar%20sobre%20minhas%20parcelas%20em%20atraso" target="_blank">WhatsApp</a>. 
    É só clicar em um dos dois <span>😉</span></p>

    <p>{{$name}}, estamos aqui para te ajudar. Sempre!</p>

    <img src="https://media.giphy.com/media/5tdqLtVqpLrFiwY9PU/giphy.gif" alt="como posso te ajudar?" />

    <p>Um grande abraço!</p>
    <p>Ohne</p>
@endsection
