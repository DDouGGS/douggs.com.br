<!-- Parâmetros: title, text, author, date -->
<div class="regular-page-wrap section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="page-content">
                    <h1><strong>{{ $title }}</strong></h1>
                    <div style="text-align: justify">
                        {!! $text !!}
                    </div>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <p><a href="#" class="post-author">{{ $author }}</a> on <a href="#" class="post-date">{{ $date }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>