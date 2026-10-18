<!DOCTYPE html>

<html lang="pt-BR">

<!-- ***** Head Area Start ***** -->
@include('partials.head', ['title' => 'DougGS TI - Login'])
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
    @include('partials.header', ['category' => 'enter'])
    <!-- ***** Header Area End ***** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Login Content Area Start ============= -->
                <div class="col-12 col-lg-5">
                    <div class="post-content-area mb-50">

                        <!-- Login Form -->
                        <div class="world-catagory-area">

                            <fieldset>
                                <legend>Login</legend>

                                <div class="tab-content" id="myTabContent">

                                    <div class="tab-pane fade show active" id="login-tab-1" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <form action="{{ url('/login') }}" method="POST" class="login-form">
                                                    @csrf

                                                    <div class="form-group mb-3">
                                                        <label for="email">E-mail</label>
                                                        <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail" required>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="password">Senha</label>
                                                        <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha" required>
                                                    </div>

                                                    <div class="form-group mb-3 text-right">
                                                        <button type="submit" class="btn btn-primary">Entrar</button>
                                                    </div>

                                                    <div class="form-group mt-4 text-center">
                                                        <p>Não tem uma conta? <a href="{{ url('/cadastro') }}">Cadastre-se aqui</a></p>
                                                    </div>

                                                    <div class="form-group mt-3 text-center">
                                                        <p>Esqueceu a senha? <a href="{{ url('/recuperar-senha') }}">Recupere aqui</a></p>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </fieldset>

                        </div>
                        <!-- End Login Form -->

                    </div>
                </div>
                <!-- ============= Login Content Area End ============= -->
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