<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>DougGS TI - &amp; Página</title>

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
                                        <a class="dropdown-item" href="{{ url('/developments') }}">Desenvolvimentos</a>
                                        <a class="dropdown-item" href="{{ url('/strategies') }}">Estratégias</a>
                                        <a class="dropdown-item" href="{{ url('/belows') }}">Infraetruturas</a>
                                        <a class="dropdown-item" href="{{ url('/devops') }}">DevOps</a>
                                        <a class="dropdown-item" href="{{ url('/consultancies') }}">Consultorias</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/contact') }}">Contato</a>
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

    <div class="regular-page-wrap section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="page-content">
                        <h1>Integração e configurando o NodeJS numa aplicação Laravel</h1>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus eget purus id felis dignissim convallis. Suspendisse et augue dui. Morbi gravida sed justo vel venenatis. Ut tempor pretium maximus. Donec libero diam, faucibus vitae lectus nec, accumsan gravida dui. Nam interdum mi eget lacus aliquet, sit amet ultricies magna pharetra. In ut odio a ligula egestas pretium et quis sapien. Etiam faucibus magna eu porta vulputate. Aliquam euismod rhoncus malesuada. Nunc rutrum hendrerit semper.</h6>
                        <h6>Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</h6>
                        <h6>Donec orci dolor, pretium in luctus id, consequat vitae nibh. Quisque hendrerit, lorem sit amet mollis malesuada, urna orci volutpat ex, sed scelerisque nunc velit et massa. Sed maximus id erat vel feugiat. Phasellus bibendum nisi non urna bibendum elementum. Aenean tincidunt nibh vitae ex facilisis ultrices. Integer ornare efficitur ultrices. Integer neque lectus, venenatis at pulvinar quis, aliquet id neque. Mauris ultrices consequat velit, sed dignissim elit posuere in. Cras vitae dictum dui.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="{{ url('/') }}"><img src="{{ asset('img/core-img/logo.png') }}" alt=""></a>
                        <div class="copywrite-text mt-30">
                            <p>Direitos reservados &copy;<script>document.write(new Date().getFullYear());</script> e desenvolvido por <a href="https://douggs.com.br" target="_blank">DougGS</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Estratégias</a></li>
                            <li><a href="#">Desenvolvimentos</a></li>
                            <li><a href="#">Infraestruturas</a></li>
                            <li><a href="#">DevOps</a></li>
                            <li><a href="#">Consultorias</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5>Inscrever-se</h5>
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

</body>

</html>