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
    @include('partials.header', ['category' => 'contact'])
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url('/img/blog-img/blog_douggs_img_category_contacts.png');"></div>
    <!-- ********** Hero Area End ********** -->
    @if(@isset($send) && $send)
        <section class="contact-area">
            <div class="alert alert-success" role="alert" style="display: flex; justify-content: center; align-items: center;">
                Seu e-mail foi enviado com sucesso.
            </div>
        </section>
    @endif
    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact-form">
                        <h5>Mande-nos uma mensagem por aqui. Que, iremos responder o quanto antes.</h5>
                        <!-- Contact Form -->
                        <form action="#" method="post">
                            @csrf <!-- {{ csrf_field() }} -->
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
                            <input type="hidden" id="key" value="47ac10fe8d5c94f8313da424cb8d3c4e">
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
    @include('partials.footer')
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    @include('partials.js')

    <!-- Google Maps: If you want to google map, just uncomment below codes -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script type="text/javascript" src="{{asset('js/map-active.js')}}"></script>

    <!-- jQuery (Necessary for All JavaScript Plugins) -->

</body>

</html>