<!DOCTYPE html>

<html lang="pt-BR">

<!-- ***** Head Area Start ***** -->
@include('partials.head', ['title' => 'DougGS TI - Cadastro'])
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
    @include('partials.header', ['category' => 'registration'])
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area">

        <!-- Hero Slides Area -->
        @include('partials.hero_slides_caroussel', [
        'imgA' => '/img/blog-img/bgs10.jpg',
        'imgB' => '/img/blog-img/bgs9.jpg',
        'imgC' => '/img/blog-img/bgs14.jpg'
        ])
        <!-- Hero Slides Area -->

    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Registration Content Area Start ============= -->
                <div class="col-12 col-lg-6">
                    <div class="post-content-area mb-50">

                        <!-- Registration Form -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Torne-se um usuário.</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="registration-tab-1" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <form action="{{ url('/registration') }}" method="POST" class="registration-form">
                                                @csrf

                                                <div class="form-group mb-3">
                                                    <label for="name">Nome</label>
                                                    <input type="text" name="name" id="name" class="form-control" placeholder="Digite seu nome completo" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="document">Documento</label>
                                                    <input type="text" name="document" id="document" class="form-control" placeholder="Digite seu CPF ou CNPJ" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="email">E-mail</label>
                                                    <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="password">Senha</label>
                                                    <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha" required>
                                                </div>

                                                <div class="form-group mb-3 text-right">
                                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                                </div>

                                                <div class="form-group mt-4 text-center">
                                                    <p>Já tem uma conta? <a href="{{ url('/enter') }}">Faça login aqui</a></p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Registration Form -->

                    </div>
                </div>
                <!-- ============= Registration Content Area End ============= -->
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