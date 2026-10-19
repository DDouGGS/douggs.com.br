<!-- Parâmetros: title, shortText, img, author, datePost, hrefPostContent -->
<div class="single-blog-post post-style-5 d-flex align-items-center">
    <!-- Post Thumbnail -->
    <div class="post-thumbnail">
        <img src="{{ $img }}" alt="">
    </div>
    <!-- Post Content -->
    <div class="post-content">
        <a href="{{ $href }}" class="headline">
            <h5>{{ $title }}</h5>
        </a>
        <p>{{ $shortText }} ...</p>
        <!-- Post Meta -->
        <div class="post-meta">
            <p><a href="{{ $href }}" class="post-author">{{ $author }}</a> on <a href="#" class="post-date">{{ $datePost }}</a></p>
        </div>
    </div>
</div>