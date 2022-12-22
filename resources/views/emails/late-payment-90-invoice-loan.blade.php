@extends('emails.model')

@section('content')
    <p style="font-size: x-large; color: #00C57D;"><b>Olá {{$name}},</b></p>
    <p style="text-align: justify;">Tudo bem?</p>
    <p style="text-align: justify;">Tentamos de diversas formas auxiliá-lo(a) a vencer este desafio para pagamento, mas sem sucesso =(</p>
    <p style="text-align: justify;">Comunicamos que estamos transferindo o seu caso para um escritório especializado em cobranças extra judiciais.</p>
    <p style="text-align: justify;">A partir de agora, qualquer acordo para pagamento só poderá ser realizado diretamente com eles.</p>
    <p style="text-align: justify;">Sabemos que é uma fase delicada e torcemos para que você a supere o mais rápido possível. </p>
    <p style="text-align: justify;">A Ohne vai continuar por aqui. E se pudermos ajudá-lo(a) em outro momento o faremos, mais uma vez, com prazer! ;)</p>
@endsection
