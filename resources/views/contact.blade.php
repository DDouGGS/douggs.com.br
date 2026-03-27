<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>DougGS TI - &amp; Contato</title>

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
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/core-img/logo.png') }}" alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('/strategies') }}">Estratégias</a>
                                        <a class="dropdown-item" href="{{ url('/belows') }}">Infraestruturas</a>
                                        <a class="dropdown-item" href="{{ url('/devops') }}">DevOps</a>
                                        <a class="dropdown-item" href="{{ url('/consultancies') }}">Consultorias</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/contact') }}">Contatos</a>
                                </li>
                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg4.jpg);"></div>
    <!-- ********** Hero Area End ********** -->

    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact-form">
                        <h5>Mande-nos uma mensagem por aqui. Que, iremos responder.</h5>
                        <!-- Contact Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Nome</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>E-mail</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Mensagem</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn world-btn">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact-form">
                        <!-- Contact Form -->
                         <fieldset>
                            <legend>Outros Contatos</legend>
                            <p>Endereço: <span>Rua Júlio Buono, 2400 - Bloco D - apto. 11</span> - CEP:<span> 02201-002</span> - <span>São Paulo - SP</span></p>
                            <p>Fone:<span> (11) 97580.3656</span></p>
                            <p>Email:<span> mail@douggs.com.br</span></p>
                         </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps: If you want to google map, just uncomment below codes -->
    <div class="map-area">
        <div id="googleMap" class="googleMap"></div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="#"><img src="{{asset('img/core-img/logo.png')}}" alt=""></a>
                        <div class="copywrite-text mt-30">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> 
<p>Proudly distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Video</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5>Subscribe</h5>
                        <form action="#" method="post">
                            <input type="email" name="email" id="email" placeholder="Enter your mail">
                            <button type="button"><i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script type="text/javascript" src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
    <!-- Active js -->
    <script type="text/javascript" src="{{asset('js/active.js')}}"></script>

    <!-- Google Maps: If you want to google map, just uncomment below codes -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script type="text/javascript" src="{{asset('js/map-active.js')}}"></script>

</body>

</html>