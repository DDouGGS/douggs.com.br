<!DOCTYPE html>
<html lang="pt-BR">

<!-- ***** Head Area Start ***** -->
@include('partials.head', ['title' => 'DougGS TI - Estratégias'])
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
    @include('partials.header',['category' => 'strategies'])
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    @include('partials.hero',['img' => '/img/blog-img/blog_douggs_img_category_strategies.png'])
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
                                <li class="title">Estratégias</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">

                                    <!-- Single Blog Post -->
                                    @include('partials.single_blog_post_4',[
                                    'title' => 'Sistema de Linguagem - Minha primeira lib mobile para Flutter & Dart',
                                    'shortText' => 'Além de facilitar o desenvolvimento um sistema de linguagem pode simplificar o trato com vários tipos de textos dentro no desenvolvimento',
                                    'img' => asset('img/blog-img/blog_douggs_img_thumbs_list_str0003.png'),
                                    'author' => 'Douglas G. De Souza',
                                    'datePost' => 'Maio 14, 2026 at 20:15 pm',
                                    'href' => url('/blogs/strategies/str0003')
                                    ])

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
                                @include('partials.single_blog_post_2',[
                                'href' => url('/blogs/strategies/str0003'),
                                'title' => 'Sistema de Linguagem - Minha primeira lib mobile para Flutter & Dart',
                                'img' => asset('img/blog-img/blog_douggs_img_thumbs_list_str0003.png')
                                ])

                            </div>
                        </div>

                        <!-- Widget Area -->
                        @include('partials.sidebar_widget_area')
                        <!-- Widget Area -->

                        <!-- Widget Area -->
                        @include('partials.single_blog_post_today', [
                        'img' => asset('img/blog-img/blog_douggs_img_carrossel_str0003.png'),
                        'href' => url('/blogs/strategies/str0003'),
                        'title' => 'Sistema de Linguagem - Minha primeira lib mobile para Flutter & Dart'
                        ])
                        <!-- Widget Area -->

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