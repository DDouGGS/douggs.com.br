<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>DougGS TI - &amp; Desenvolvimentos</title>

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
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url({{asset('img/blog-img/blog_douggs_img_page_des002.png')}});"></div>
    <!-- ********** Hero Area End ********** -->

    <div class="regular-page-wrap section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="page-content">
                        <h1><strong>Como usar o ReflectionParameter do PHP</strong></h1>
                        <p>Para obter uma instância do ReflectionParameter, primeiro você precisa criar um objeto ReflectionFunction ou um ReflectionMethod e, em seguida, chamar a função getParameters() da nova classe e, que retorna uma matriz de ReflectionParameter. Esse array permite identificar e tomar desições quanto aos parâmetros da função ou método alvo. Até vir a executar essa função/metodo com os tipos dos parâmetros corretos. Ou, gerar arquivos de classes que chamem corretamente a função/metodo.</p>
                        <code>function exampleFunction(int $a, string $b = 'default', &amp;$c) { }</br>
                        $reflectFunction = new ReflectionFunction('exampleFunction');</br> 
                        $parameters = $reflectFunction-&gt;getParameters();</br>
                        foreach ($parameters as $param) {</br>
                        printf("Parameter: %s\n", $param-&gt;getName());</br>
                        printf("Position: %d\n", $param-&gt;getPosition());</br>
                        // Check if parameter has a type</br>
                        if ($param-&gt;hasType()) {</br>
                            $type = $param-&gt;getType();</br>
                            printf("Type: %s\n", $type-&gt;getName());</br>
                            printf("Allows NULL: %s\n", var_export($param-&gt;allowsNull(), 1));</br>
                        }</br>
                        printf("Is optional?: %s\n", $param-&gt;isOptional() ? 'yes' : 'no');</br>
                        printf("Passed by reference: %s\n", var_export($param-&gt;isPassedByReference(), 1));</br>
                        // Get default value if available</br>
                        if ($param-&gt;isDefaultValueAvailable()) {</br>
                            printf("Default value: %s\n", var_export($param-&gt;getDefaultValue(), 1));</br>
                        }</br>
                        echo "\n";</br>
                        }</code>
                        <p>É, preciso entender que toda function criada fora de uma classe é considerada um função, e deve utilizar a classe ReflectionFunction. Por outro lado, toda function criada dentro de uma classe é  considerada um metodo e, nesse caso, deve ser utilizada o objeto ReflectionMethod.
                        <p><strong>Métodos-chave de ReflectionParameter</strong></p>
                        <p>A classe ReflectionParameter recupera informações sobre os parâmetros de uma função ou método.</p>
                        <p><strong>Métodos</strong></p>
                        <p>getName(): Obtém o nome do parâmetro (sem o $sinal).</br>
                        getType(): Retorna um objeto ReflectionType(ou ReflectionNamedType/ ReflectionUnionTypea partir do PHP 8.0), que pode ser consultado para obter informações de tipo.</br>
                        isOptional(): Verifica se o parâmetro é opcional.</br>
                        isDefaultValueAvailable(): Verifica se existe um valor padrão disponível.</br>
                        getDefaultValue(): Obtém o valor padrão do parâmetro (gera uma exceção se não for opcional).</br>
                        isPassedByReference(): Verifica se o parâmetro é passado por referência.</br>
                        getAttributes(): Retorna uma matriz de ReflectionAttributeinstâncias associadas ao parâmetro.</br>
                        isPromoted(): Verifica se o parâmetro é uma propriedade promovida (PHP 8.0+).</p>
                        <p>Para inspecionar os parâmetros de uma função, primeiro crie uma instância das classes ReflectionFunction ou ReflectionMethod e, em seguida, use seus método ReflectionFunctionAbstract::getParameters() para recuperar uma array de parâmetros.</p>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                        </div>
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