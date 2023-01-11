@extends('layouts.template')
@section('style')
<link rel="stylesheet" href="/css/styleEmail.css">
@stop

@section('corpo')

<article id="first_section">
    <section class="email-enviado">
        <h1>Formulário Processado</h1>
        <p>Enviamos uma cópia para o endereço cadastrado.</p>
        <p>Caso não tenha recebido, pode ter ocorrido algum problema no envio ou no cadastro. Tente enviar novamente ou entre em contato por outro canal</p>
        <ion-icon name="checkmark-circle-outline"></ion-icon>
    </section>
    
</article>


@stop
@section('scriptheader')
    <script>
        function headerDone() {
            var header = document.querySelector("header");
            if(window.matchMedia("(min-width: 621px").matches){
            	header.classList.toggle("sticky");
            	let imageLogo = document.querySelector('.logoImg')
            	imageLogo.removeAttribute('src');
            	imageLogo.setAttribute('src',`https://ik.imagekit.io/bistecbr/logo-bistec.png`);
		    }
        }
        headerDone();
    </script>
@stop