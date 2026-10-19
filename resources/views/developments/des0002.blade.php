<!DOCTYPE html>
<html lang="pt-BR">

<!-- ***** Head Area Start ***** -->
@include('partials.head', ['title' => 'DougGS TI - Desenvolvimentos'])
<!-- ***** Head Area End ***** -->

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    @include('partials.header', ['category' => 'developments'])
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    @include('partials.hero',['img' => '/img/blog-img/blog_douggs_img_page_des002.png'])
    <!-- ********** Hero Area End ********** -->

    <!-- Regular Page -->
    @include('partials.regular_page',[
    'title' => 'Como usar o ReflectionParameter do PHP',
    'text' => '<p>Para obter uma instância do ReflectionParameter, primeiro você precisa criar um objeto ReflectionFunction ou um ReflectionMethod e, em seguida, chamar a função getParameters() da nova classe e, que retorna uma matriz de ReflectionParameter. Esse array permite identificar e tomar desições quanto aos parâmetros da função ou método alvo. Até vir a executar essa função/metodo com os tipos dos parâmetros corretos. Ou, gerar arquivos de classes que chamem corretamente a função/metodo.</p>
    <p>É, preciso entender que toda function criada fora de uma classe é considerada um função, e deve utilizar a classe ReflectionFunction. Por outro lado, toda function criada dentro de uma classe é considerada um metodo e, nesse caso, deve ser utilizada o objeto ReflectionMethod.
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
    <p>Para inspecionar os parâmetros de uma função, primeiro crie uma instância das classes ReflectionFunction ou ReflectionMethod e, em seguida, use seus método ReflectionFunctionAbstract::getParameters() para recuperar uma array de parâmetros.</p>',
    'author' => 'Douglas G. De Souza',
    'date' => 'Mar 21, 2026 at 21:35 pm'
    ])
    <!-- Regular Page -->

    <!-- ***** Footer Area Start ***** -->
    @include('partials.footer')
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    @include('partials.js')
    <!-- jQuery (Necessary for All JavaScript Plugins) -->

</body>

</html>