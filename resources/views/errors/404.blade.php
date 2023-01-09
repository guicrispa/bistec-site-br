@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="/css/styleErro404.css">
@stop

@section('corpo')
    <!-- CORPO -->
    <article id="first_section">
        <!-- banner -->
        <section class="bistec-error404">
            <h1>Ops...</h1>
            <p>Parece que a página que você está procurando foi movida ou nunca existiu, certifique-se que digitou o endereço corretamente ou seguiu um link válido.</p>
            <strong><a class="menu_principal_link" href="/">Clique aqui para voltar ao Menu Principal</a></strong>
        </section>
    </article>
@stop
@section('scriptheader')
    <script>
        function headerDone() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky");
            let imageLogo = document.querySelector('.logoImg')
            imageLogo.removeAttribute('src');
            imageLogo.setAttribute('src',`https://ik.imagekit.io/bistecbr/logo-bistec.png`);
        }
        headerDone();
    </script>
@stop