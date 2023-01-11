@extends('layouts.template')
@section('style')
    <link rel="stylesheet" href="/css/stylePortfolio.css">
@stop

@section('corpo')
<!-- CORPO -->
    <article id="first_section">
        <!-- banner -->
        <section class="bistec_pag_portfolio">
        <h1>Portfólio de Produtos</h1>
            <a href="/portfolio/automacao">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-automacao-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="/portfolio/cloud">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-cloud-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="/portfolio/edu">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-edu-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="/portfolio/ged">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-ged-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="/portfolio/green">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-green-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="/portfolio/lgpd">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-lgpd-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="/portfolio/msp">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-msp-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="/portfolio/outsourcing">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-outsourcing-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="/portfolio/pay">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-pay-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="/portfolio/renting">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-renting-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="/portfolio/sign">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-sign-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="/portfolio/soft">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-soft-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="/portfolio/voip">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-voip-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="/portfolio/wifi">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-wifi-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="/portfolio/xml">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-xml-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>           
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

@section('script')
    <script src="/js/menu.js" defer async></script>
@stop