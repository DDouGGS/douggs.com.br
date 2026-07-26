<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
     @include('partials.title', ['title' => 'Estratégias'])
    <!-- Title  -->

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
    @include('partials.header',['category' => 'strategies'])
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url('/img/blog-img/blog_douggs_img_category_strategies.png');"></div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Desenvolvimentos</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area">

                        <!-- It's here -->
                        @include('partials.it_is_here', ['description' => 'A sessão, visa responder o \'Como\' um desenvolvimento que está sendo realizado ou que está pronto, deve ser utilizado de forma que seja objetivo e rentável.'])
                        <!-- It's here -->

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Em Alta</h5>
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
                                        <a href="#" class="headline">
                                            <h5>Sistema de Linguagem - Minha primeira lib mobile para Flutter & Dart</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Load More btn -->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="#" class="btn world-btn">Load More</a>
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