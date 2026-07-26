<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>DougGS TI - &amp; Estratégias</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    @include('partials.header')
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url({{asset('img/blog-img/blog_douggs_img_category_str0003.png')}});"></div>
    <!-- ********** Hero Area End ********** -->

    <div class="regular-page-wrap section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="page-content">
                        <h1>Sistema de Linguagem - Minha primeira lib mobile para Flutter & Dart</h1>
                        <p>Quando precisamos realizar um desenvolvimento, seja ele embarcado, mobile ou outro tipo. Somos confrontado com as linguagens de diferentes países. Já, que precisamos pensar em como as pessoas vão entender o que deve ser feito no sistema e conseguir obter algum benefícios com ele.</p>
                        <p>Nisso, começamos a dar valor à possibilidade de podermos alterar a linguagem a qualquer momento.</p>
                        <p>E, ainda, devemos acrescentar à importância de um sistema de linguagem. o fato que boa parte do desenvolvimento se utiliza de constantes de textos. Pois, se olharmos bem para o desenvolvimento mobile, por exemplo, veremos que a porcentagem de constantes de textos, muitas vezes, ultrapassa os 50% de todo desenvolvimento, com facilidade. Tornando, o uso de um sistema de linguagem ainda mais importante para a guarda dessas informações de forma organizada e eficaz no desenvolvimento em si</p>
                        <p>É, nesse cenário, que aconteceu a iniciativa de criar uma biblioteca Dart, como um sistema de linguagem no Flutter, que facilita a formação da linguagem no mobile, ao mesmo tempo que contribui com o seu desenvolvimento. Assim, no dia 27 de abril de 2026, publiquei a primeira versão da System Language - Dart, no repositório pub.dev.</p>
                        <p>O projeto, ainda deve crescer afim de conseguir acomodar uma quantidade indefinida de dicionários, inclusive de linguas cuja a mudança da fonte também é relevância, como é o caso do japonês, do coreano e do russo.</p>
                        <p>Mas, ele está a caminho e já iniciou sua jornada.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    @include('partials.footer')
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    @include('partials.js')
    <!-- jQuery (Necessary for All JavaScript Plugins) -->

</body>

</html>