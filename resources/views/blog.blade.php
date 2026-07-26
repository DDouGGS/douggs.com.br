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
    @include('partials.header', ['category' => 'blog'])
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
                                    <a href="{{ url('/blogs/developments/des0002') }}">Como usar o ReflectionParameter do PHP</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>2</p>
                                </div>
                                <div class="post-title">
                                    <a href="{{ url('/blogs/developments/des0003') }}">Implementando eventos com o padrão Observers</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>3</p>
                                </div>
                                <div class="post-title">
                                    <a href="{{ url('/blogs/strategies/str0003') }}">Sistema de Linguagem - Minha primeira lib mobile para Flutter & Dart</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>4</p>
                                </div>
                                <div class="post-title">
                                    <a href="{{ url('/blogs/developments/des0003') }}">Implementando eventos com o padrão Observers</a>
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
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12 col-md-12">
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
                                                        <a href="{{ url('/blogs/developments/des0002') }}" class="headline">
                                                            <h5>Como usar o ReflectionParameter do PHP</h5>
                                                        </a>
                                                        <p>As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/blogs/developments/des0002') }}" class="post-author">Douglas G. Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_des0003.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/developments') }}">Desenvolvimentos</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/blogs/developments/des0003') }}" class="headline">
                                                            <h5>Implementando eventos com o padrão Observers</h5>
                                                        </a>
                                                        <p>O padrão Observers, do PHP, pode tornar-se um aliado principalmente quando falamos de Eventos, mas seu uso é mais do que isso ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/blogs/developments/des0003') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mai 15, 2026 at 19:15 pm</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_str0003.png') }}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{ url('/strategies') }}">Estratégias</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{ url('/blogs/strategies/str0003') }}" class="headline">
                                                            <h5>Sistema de Linguagem - Minha primeira lib mobile para Flutter & Dart</h5>
                                                        </a>
                                                        <p>Além de facilitar o desenvolvimento um sistema de linguagem pode simplificar o trato com vários tipos de textos dentro no desenvolvimento ...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="{{ url('/blogs/strategies/str0003') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Maio 14, 2026 at 20:15 pm</a></p>
                                                        </div>
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
                            </ul>

                            <div class="tab-content" id="myTabContent2">

                                <div class="tab-pane fade show active" id="world-tab-10">

                                    <div class="row">

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
                                                                    <a href="{{ url('/blogs/developments/des0002') }}" class="headline">
                                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/blogs/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des003.png') }}" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a href="{{ url('/blogs/developments/des0003') }}" class="headline">
                                                                        <h5>Implementando eventos com o padrão Observers</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/blogs/developments/des0003') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mai 15, 2026 at 19:15 pm</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_str0003.png') }}" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a href="{{ url('/blogs/strategies/str0003') }}" class="headline">
                                                                        <h5>Sistema de Linguagem - Minha primeira lib mobile para Flutter & Dart</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/blogs/strategies/str0003') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Maio 14, 2026 at 20:15 pm</a></p>
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
                                                                    <a href="{{ url('/blogs/developments/des0002') }}" class="headline">
                                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/blogs/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
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
                                                                    <a href="{{ url('/blogs/developments/des0002') }}" class="headline">
                                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/blogs/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des003.png') }}" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a href="{{ url('/blogs/developments/des0003') }}" class="headline">
                                                                        <h5>Implementando eventos com o padrão Observers</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/blogs/developments/des0003') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mai 15, 2026 at 19:15 pm</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_str0003.png') }}" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a href="{{ url('/blogs/strategies/str0003') }}" class="headline">
                                                                        <h5>Sistema de Linguagem - Minha primeira lib mobile para Flutter & Dart</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/blogs/strategies/str0003') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Maio 14, 2026 at 20:15 pm</a></p>
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
                                                                    <a href="{{ url('/blogs/developments/des0002') }}" class="headline">
                                                                        <h5>Como usar o ReflectionParameter do PHP</h5>
                                                                    </a>
                                                                    <!-- Post Meta -->
                                                                    <div class="post-meta">
                                                                        <p><a href="{{ url('/blogs/developments/des0002') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mar 21, 2026 at 21:35 pm</a></p>
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
                                        <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_str0003.png') }}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="{{ url('/blogs/strategies/str0003') }}" class="headline">
                                            <h5 class="mb-0">Sistema de Linguagem - Minha primeira lib mobile para Flutter & Dart</h5>
                                        </a>
                                    </div>
                                </div>

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

                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des003.png') }}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="{{ url('/blogs/developments/des0003') }}" class="headline">
                                            <h5 class="mb-0">Implementando eventos com o padrão Observers</h5>
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
                                        <img src="{{ asset('img/blog-img/blog_douggs_img_carrossel_str0003.png') }}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content px-0 pb-0">
                                        <a href="{{ url('/blogs/strategies/str0003') }}" class="headline">
                                            <h5>Sistema de Linguagem - Minha primeira lib mobile para Flutter & Dart</h5>
                                        </a>
                                    </div>
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
                            <h5>Últimos Artigos</h5>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_str0003.png') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="{{ url('/blogs/strategies/str0003') }}" class="headline">
                                    <h5>Sistema de Linguagem - Minha primeira lib mobile para Flutter & Dart</h5>
                                </a>
                                <p>Além de facilitar o desenvolvimento um sistema de linguagem pode simplificar o trato com vários tipos de textos dentro no desenvolvimento ...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="{{ url('/blogs/strategies/str0003') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Maio 14, 2026 at 20:15 pm</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('img/blog-img/blog_douggs_img_thumbs_list_des003.png') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="{{ url('/blogs/developments/des0003') }}" class="headline">
                                    <h5>Implementando eventos com o padrão Observers</h5>
                                </a>
                                <p>O padrão Observers, do PHP, pode tornar-se um aliado principalmente quando falamos de Eventos, mas seu uso é mais do que isso ...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="{{ url('/blogs/developments/des0003') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mai 15, 2026 at 19:15 pm</a></p>
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
    @include('partials.footer')
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    @include('partials.js')
    <!-- jQuery (Necessary for All JavaScript Plugins) -->

</body>

</html>