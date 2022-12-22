@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00c57d;"><strong>Olá {{$name}}, tudo bem?</strong></p>
    
    <p>Obrigado por escolher a Ohne nesta hora tão importante.</p>
    
    <p>Como prezamos sempre por atender nossos clientes da melhor maneira possível, estamos mandando este email para informar que o motivo da recusa do seu empréstimo é devido às muitas solicitações que recebemos nos últimos dias. Isto mostra que estamos conseguindo mudar a maneira de fazer as pessoas alcançarem seus sonhos.</p>
    
    <p>Infelizmente, neste momento, não conseguimos atender toda nossa demanda. Mas não se preocupe, seu nome ficará em nossa lista de espera e assim que possível entraremos em contato.</p>

    <p>Conte sempre com a Ohne!</p>
@endsection