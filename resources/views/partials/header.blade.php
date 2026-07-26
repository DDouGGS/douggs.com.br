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
                                        @if(isset($category) && $category != 'skills')
                                        <a class="dropdown-item" href="{{ url('/blogs/skills') }}">Aptidões</a>
                                        @endif
                                        @if(isset($category) && $category != 'developments')
                                        <a class="dropdown-item" href="{{ url('/blogs/developments') }}">Desenvolvimentos</a>
                                        @endif
                                        @if(isset($category) && $category != 'devops')
                                        <a class="dropdown-item" href="{{ url('/blogs/devops') }}">DevOps</a>
                                        @endif
                                        @if(isset($category) && $category != 'strategies')
                                        <a class="dropdown-item" href="{{ url('/blogs/strategies') }}">Estratégias</a>
                                        @endif
                                        @if(isset($category) && $category != 'belows')
                                        <a class="dropdown-item" href="{{ url('/blogs/belows') }}">Infraetruturas</a>
                                        @endif
                                        @if(isset($category) && $category != 'consultancies')
                                        <a class="dropdown-item" href="{{ url('/blogs/consultancies') }}">Consultorias</a>
                                        @endif
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