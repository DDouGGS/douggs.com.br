<!DOCTYPE html>
<html lang="pt-BR">

<!-- ***** Head Area Start ***** -->
@include('partials.head', ['title' => 'DougGS TI - Consuiltorias'])
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
    @include('partials.header',['category' => 'consultancies'])
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    @include('partials.hero',['img' => '/img/blog-img/blog_douggs_img_category_consultancies.png'])
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
                                <li class="title">Consultorias</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">

                                    <!-- Single Blog Post -->
                                    @include('partials.single_blog_post_4',[
                                    'title' => 'Como usar o ReflectionParameter do PHP',
                                    'shortText' => 'As classes Refletion... do PHP capacitam na geração automática de função a partir do conhecimento dos seus parâmetros',
                                    'img' => asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png'),
                                    'author' => 'Douglas G. De Souza',
                                    'datePost' => 'Mar 21, 2026 at 21:35 pm',
                                    'href' => url('/blogs/developments/des0002')
                                    ])

                                    <!-- Single Blog Post -->
                                    @include('partials.single_blog_post_4',[
                                    'title' => 'Implementando eventos com o padrão Observers',
                                    'shortText' => 'O padrão Observers, do PHP, pode tornar-se um aliado principalmente quando falamos de Eventos, mas seu uso é mais do que isso',
                                    'img' => asset('img/blog-img/blog_douggs_img_thumbs_list_des003.png'),
                                    'author' => 'Douglas G. De Souza',
                                    'datePost' => 'Mar 21, 2026 at 21:35 pm',
                                    'href' => url('/blogs/developments/des0003')
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
                        @include('partials.it_is_here', ['description' => 'Para cada situação no desenvolvimento, existe sempre a melhor consultoria, ou seja, orientação, a ser entendida, ouvida e seguida e afim de alcançar o bom exito. Esse, é o lugar onde ficam essas informações.'])
                        <!-- It's here -->

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Em Alta</h5>
                            <div class="widget-content">

                                <!-- Single Blog Post -->
                                @include('partials.single_blog_post_2',[
                                'href' => url('/blogs/developments/des0002'),
                                'title' => 'Como usar o ReflectionParameter do PHP',
                                'img' => asset('img/blog-img/blog_douggs_img_thumbs_list_des002.png'),
                                ])

                            </div>
                        </div>

                        <!-- Widget Area -->
                        @include('partials.sidebar_widget_area')
                        <!-- Widget Area -->

                        <!-- Widget Area -->
                        @include('partials.single_blog_post_today', [
                        'img' => asset('img/blog-img/blog_douggs_img_carrossel_des0003.png'),
                        'href' => url('/blogs/developments/des0003'),
                        'title' => 'Implementando eventos com o padrão Observers'
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