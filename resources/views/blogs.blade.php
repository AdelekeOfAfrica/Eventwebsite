<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blogs</title>
        @include('navbar')
    </head>
    <body>
    <section id="blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Latest News & Articles</h1>
                        <p class="wow fadeInDown" data-wow-delay="0.2s">EvenTomy.co</p>
                    </div>
                </div>

                @foreach($posts as $post)
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="blog-item">
                        <div class="blog-image">
                            <a href="{{ route('blog', ['id' => $post->id]) }}">
                                <img class="img-fluid" src="{{ asset($post->image_path) }}" alt="{{ $post->title }}">
                            </a>
                        </div>
                        <div class="descr">
                            <div class="tag">{{ $post->category ?? 'General' }}</div> <!-- Category or default -->
                            <h3 class="title">
                                <a href="{{ route('blog', ['id' => $post->id]) }}">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <p>{{ Str::limit($post->content, 100, '...') }}</p>
                            <div class="meta-tags">
                                <span class="date">{{ $post->created_at->format('M d, Y') }}</span>
                                <span class="comments">| by {{ $post->author ?? 'Admin' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="row justify-content-center mt-4">
          <div class="col-12 d-flex justify-content-center">
            {{ $posts->links('pagination') }}
          </div>
        </div>
            </div>
        </div>
    </section>
</body>

</html>