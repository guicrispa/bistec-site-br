@extends('layouts.template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')
<!-- CORPO -->
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img id="bannerAutomacao" src="https://ik.imagekit.io/bistecbr/produtos/bistec-automacao-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
    <div class="produto-texto">
            <h1>Bistec Automação</h1>
            <p>
                Softwares (sistemas para todos os segmentos, como restaurantes, materiais de construção, vestuário, calçados, dentre outros). 

            </p>
            <p>
                Hardwares (Equipamentos como computadores, impressoras térmicas, balanças, leitores de código de barras, etiquetas eletrônicas, relógio de ponto, terminais de auto-atendimento e muito mais)
            </p>

            <p>
                Serviços – (Suporte realizado por consultores técnicos capacitados 
            </p>
            <p>
                Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945">Converse com um de nossos atendentes sobre a solução BISTEC Automação</a>
            </p>
        </div>
    </article>
@stop
@section('scriptheader')
    <script>
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY >= 0)
            if(window.scrollY >= 0){
                let imageLogo = document.querySelector('.logoImg')
                imageLogo.removeAttribute('src');
                imageLogo.setAttribute('src',`https://ik.imagekit.io/bistecbr/logo-bistec.png`);
            } 
        })
    </script>
@stop

@section('script')
    <script src="/js/menu.js" defer async></script>
@stop