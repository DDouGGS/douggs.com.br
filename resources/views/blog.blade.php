<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>DougGS TI - &amp; Blog</title>

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
    <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/bgs10.jpg);"></div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/bgs9.jpg);"></div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/bgs14.jpg);"></div>
        </div>

        <!-- Hero Post Slide -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>1</p>
                                </div>
                                <div class="post-title">
                                    <a href="{{ url('/developments/des0002') }}">Como usar o ReflectionParameter do PHP</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>2</p>
                                </div>
                                <div class="post-title">
                                    <a href="{{ url('/developments/des0002') }}">Como usar o ReflectionParameter do PHP</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>3</p>
                                </div>
                                <div class="post-title">
                                    <a href="{{ url('/developments/des0002') }}">Como usar o ReflectionParameter do PHP</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>4</p>
                                </div>
                                <div class="post-title">
                                    <a href="{{ url('/developments/des0002') }}">Como usar o ReflectionParameter do PHP</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-50">

                        <!-- Catagory Area Não perca -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Não perca</li>

                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">Todos</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Desenvolvimentos</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-3" role="tab" aria-controls="world-tab-3" aria-selected="false">Estratégias</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab3" data-toggle="tab" href="#world-tab-4" role="tab" aria-controls="world-tab-4" aria-selected="false">Infraestruturas</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab4" data-toggle="tab" href="#world-tab-5" role="tab" aria-controls="world-tab-5" aria-selected="false">DevOps</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mais</a>
                                    <div class="dropdown-menu">
                                        <a class="nav-link" id="tab6" data-toggle="tab" href="{{ url('/consultancies') }}" role="tab" aria-controls="world-tab-6" aria-selected="false">Consultorias</a>
                                        <a class="nav-link" id="tab7" data-toggle="tab" href="{{ url('/developments') }}" role="tab" aria-controls="world-tab-7" aria-selected="false">Extras</a>
                                    </div>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="world-tab-3" role="tabpanel" aria-labelledby="tab3">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="world-tab-4" role="tabpanel" aria-labelledby="tab4">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="world-tab-5" role="tabpanel" aria-labelledby="tab5">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="world-tab-6" role="tabpanel" aria-labelledby="tab6">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="world-tab-7" role="tabpanel" aria-labelledby="tab7">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- EndCatagory Area Não perca -->

                        <!-- Catagory Area O que está bombando -->
                        <div class="world-catagory-area mt-50">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="title">Está bombando</li>

                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">Todos</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Desenvolvimentos</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Estratégias</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab3" data-toggle="tab" href="#world-tab-3" role="tab" aria-controls="world-tab-3" aria-selected="false">Infraestruturas</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab4" data-toggle="tab" href="#world-tab-4" role="tab" aria-controls="world-tab-4" aria-selected="false">DevOps</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mais</a>
                                    <div class="dropdown-menu">
                                        <a class="nav-link" id="tab6" data-toggle="tab" href="#world-tab-6" role="tab" aria-controls="world-tab-6" aria-selected="false">Consultorias</a>
                                        <a class="nav-link" id="tab7" data-toggle="tab" href="#world-tab-7" role="tab" aria-controls="world-tab-7" aria-selected="false">Extras</a>
                                    </div>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent2">

                                <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                                    <div class="row">

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                    </a>
                                                    <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                    </a>
                                                    <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="world-catagory-slider2 owl-carousel wow fadeInUpBig" data-wow-delay="0.4s">
                                                <!-- ========= Single Catagory Slide ========= -->
                                                <div class="single-cata-slide">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- ========= Single Catagory Slide ========= -->
                                                <div class="single-cata-slide">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a href="{{ url('/developments/des0002') }}" class="headline">
                                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="world-tab-11" role="tabpanel" aria-labelledby="tab11">
                                    <div class="row">

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b2.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b3.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b14.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b15.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b16.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b17.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="world-tab-12" role="tabpanel" aria-labelledby="tab12">
                                    <div class="row">

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b2.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b3.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b2.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b3.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="world-tab-13" role="tabpanel" aria-labelledby="tab13">
                                    <div class="row">

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b14.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b15.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b16.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b17.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b14.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b15.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b16.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b17.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="world-tab-14" role="tabpanel" aria-labelledby="tab14">
                                    <div class="row">

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b2.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b3.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b14.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b15.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b16.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b17.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="world-tab-15" role="tabpanel" aria-labelledby="tab15">
                                    <div class="row">

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b2.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b3.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b14.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b15.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b16.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b17.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="world-tab-16" role="tabpanel" aria-labelledby="tab16">
                                    <div class="row">

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b2.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b3.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b14.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b15.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b16.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b17.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="world-tab-17" role="tabpanel" aria-labelledby="tab17">
                                    <div class="row">

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b2.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b3.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b14.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b15.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b16.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b17.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="world-tab-18" role="tabpanel" aria-labelledby="tab18">
                                    <div class="row">

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b2.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b3.jpg') }}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b14.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b15.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b16.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('img/blog-img/b17.jpg') }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Catagory Area o que está bomando-->

                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Sobre</h5>
                            <div class="widget-content">
                                <p>The mango is perfect in that it is always yellow and if it’s not, I don’t want to hear about it. The mango’s only flaw, and it’s a minor one, is the effort it sometimes takes to undress the mango, carve it up in a way that makes sense, and find its way to the mouth.</p>
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Notícias</h5>
                            <div class="widget-content">

                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="{{ url('/developments/des0002') }}" class="headline">
                                            <h5 class="mb-0">Como usar o ReflectionParameter do PHP</h5>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Fique Ligado</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="https://www.facebook.com/ti.douggs"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/douglas.gsouza/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/channel/UCNeHQB_iUNs4wiXHeeDx5bw"><i class="fa fa-google"></i></a>
                                    <a href="https://www.linkedin.com/company/dougg-ti"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Escolha Do Dia</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post todays-pick">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content px-0 pb-0">
                                        <a href="#" class="headline">
                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                            <!-- Post Content -->
                            <div class="post-content d-flex align-items-center justify-content-between">
                                <!-- Catagory -->
                                <div class="post-tag"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                <!-- Headline -->
                                <a href="{{ url('/developments/des0002') }}" class="headline">
                                    <h5>Como usar o ReflectionParameter do PHP</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.4s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                            <!-- Post Content -->
                            <div class="post-content d-flex align-items-center justify-content-between">
                                <!-- Catagory -->
                                <div class="post-tag"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                <!-- Headline -->
                                <a href="{{ url('/developments/des0002') }}" class="headline">
                                    <h5>Como usar o ReflectionParameter do PHP</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.6s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                            <!-- Post Content -->
                            <div class="post-content d-flex align-items-center justify-content-between">
                                <!-- Catagory -->
                                <div class="post-tag"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                <!-- Headline -->
                                <a href="{{ url('/developments/des0002') }}" class="headline">
                                    <h5>Como usar o ReflectionParameter do PHP</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="title">
                            <h5>ÚLtimos Artigos</h5>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>Como usar o ReflectionParameter do PHP</h5>
                                </a>
                                <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="title">
                            <h5>Os mais populares</h5>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0002.png') }}" alt="">
                                <!-- Catagory -->
                                <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="{{ url('/developments/des0002') }}" class="headline">
                                    <h5>Como usar o ReflectionParameter do PHP</h5>
                                </a>
                                <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="{{ url('/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Load More btn -->
            <!-- <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="#" class="btn world-btn">Load More</a>
                    </div>
                </div>
            </div> -->
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