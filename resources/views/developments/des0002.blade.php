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
    @include('partials.header')
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
    @include('partials.footer')
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    @include('partials.js')
    <!-- jQuery (Necessary for All JavaScript Plugins) -->

</body>

</html>