<!DOCTYPE html>
<html lang="pt-BR">

<!-- ***** Head Area Start ***** -->
@include('partials.head', ['title' => 'DougGS TI - Aptidões'])
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
    @include('partials.header', ['category' => 'skills'])
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    @include('partials.hero',['img' => '/img/blog-img/blog_douggs_img_category_skills.png'])
    <!-- ********** Hero Area End ********** -->

    @include('partials.regular_page',[
    'title' => 'Em Breve',
    'text' => '<p>Estamos preparando uma ótima matéria e em breve estará disponível aqui.</p>
    <p>Se quiser, pode entrar em contato pelo email <a href="mailto:mail@douggs.com.br">mail@douggs.com.br</a></p>
    <p>Atenciosamente,</p>
    <p>DougGS</p>',
    'author' => 'Douglas G. De Souza',
    'date' => ''
    ])

    <!-- ***** Footer Area Start ***** -->
    @include('partials.footer')
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    @include('partials.js')
    <!-- jQuery (Necessary for All JavaScript Plugins) -->

</body>

</html>