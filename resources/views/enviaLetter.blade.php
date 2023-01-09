@extends('layouts.template')
@section('style')
<link rel="stylesheet" href="/css/styleEmail.css">
@stop

@section('corpo')

<article id="first_section">
    <section class="email-enviado">
        <h1>Email Processado teste</h1>
        <p>Enviaremos newsletters para o endereço cadastrado.</p>
        <p>Caso não tenha recebido, pode ter ocorrido algum problema no envio, tente enviar novamente ou entre em contato por outro canal</p>
        <ion-icon name="checkmark-circle-outline"></ion-icon>
    </section>
    
</article>


@stop
