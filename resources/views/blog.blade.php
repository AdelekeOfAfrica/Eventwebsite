<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .blog-header {
      margin-bottom: 30px;
    }

    .post-content img {
      width: 100%;
      height: auto;
      margin-bottom: 20px;
    }

    .comment-section {
      margin-top: 40px;
    }

    .comment-box {
      margin-bottom: 20px;
    }

    .comment-form textarea {
      resize: none;
    }

  
  </style>
  @include('navbar')
  
</head>
<body>
  <section id="pricing" class="section-padding" style="background-color: white;">
    <div class="row justify-content-center" style="background-color: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
      <div class="col-lg-8">
        
        <!-- Blog Header -->
        <div class="blog-header text-center mt-3">
          <h1 class="display-4">{{ $post->title }}</h1>
          <p class="lead">by <strong>{{ $post->createdBy->name }}</strong> on {{ $post->created_at->format('F d, Y') }}</p>
        </div>

        <!-- Post Content -->
        <div class="post-content">
          
          <!-- Main Image -->
          @if($post->image_path)
          <div class="gallery-box">
            <div class="img-thumb">
              <img src="{{ asset($post->image_path) }}" alt="Event Image" class="img-fluid">
            </div>
            <div class="overlay-box text-center">
              <a class="lightbox" href="{{ asset($post->image_path) }}">
                <i class="lni-plus" style="color:#FF1493;"></i>
              </a>
            </div>
          </div>
          @endif

          <p>{!! $post->content !!}</p>

          <!-- Additional Content or Highlights -->
          <h3>Event Highlights</h3>
          <p>{{ $post->highlights }}</p> <!-- Assuming highlights are part of the post content -->

          <!-- Gallery Section -->
          @if($post->gallery_images && is_array($post->gallery_images))
          <h3>Gallery</h3>
          <div class="row">
            @foreach($post->gallery_images as $image)
            <div class="col-md-6 col-sm-6 col-lg-4">
              <div class="gallery-box">
                <div class="img-thumb">
                  <img class="img-fluid" src="{{ asset($image) }}" alt="">
                </div>
                <div class="overlay-box text-center">
                  <a class="lightbox" href="{{ asset($image) }}">
                    <i class="lni-plus" style="color:#FF1493;"></i>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          @endif
        </div>

        <!-- Comment Section -->
        <div class="comment-section">
          <h4>Comments</h4>

          <!-- Display Comments -->
       

          <!-- Add Comment Form -->
          <div class="comment-form mt-4">
            <h5>Leave a Comment</h5>
            <form method="POST" action="{{ route('post.comment', $post->id) }}">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea class="form-control" id="comment" name="content" rows="3" required></textarea>
              </div>
              <div class="col-xs-12 text-center">
                <button type="submit" class="btn browse-all-btn" style="background-color:#E91E63; color:white;">Drop A Comment</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>


</html>