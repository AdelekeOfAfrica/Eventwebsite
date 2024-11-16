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
        @if (session('success'))
            <div class="alert alert-success mt-3 alert-dismissible fade show position-relative" role="alert">
                <button type="button" class="close btn btn-success position-absolute top-0 end-0" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('success') }}
            </div>
        @endif
        <script>
            document.querySelectorAll('.alert').forEach(function(alert) {
                setTimeout(function() {
                    alert.style.display = 'none';
                }, 10000); 
            });

            document.querySelectorAll('.close').forEach(function(closeButton) {
                closeButton.addEventListener('click', function() {
                    this.closest('.alert').style.display = 'none';
                });
            });
        </script>
          <h1 class="display-4">{{ $post->title }}</h1>
          <p class="lead">by <strong>{{ $post->createdBy->name }}</strong> on {{ $post->created_at->format('F d, Y') }}</p>
        </div>

        <!-- Post Content -->
        <div class="post-content">
          
          <!-- Main Image -->
          @if($post->image_path)
          <div class="gallery-box">
          <div class="img-thumb">
            <!-- Lightbox link for enlarging the main image -->
            <a href="{{ asset($post->image_path) }}" data-lightbox="main-image" data-title="Event Image">
                <img src="{{ asset($post->image_path) }}" alt="Event Image" class="img-fluid">
            </a>
          </div>

         
          </div>
          @endif

          <p>{!! $post->content !!}</p>

          <!-- Additional Content or Highlights -->
          <h3>Event Highlights</h3>
          <p>{{ $post->highlights }}</p> <!-- Assuming highlights are part of the post content -->

          <!-- Gallery Section -->
          @if(!empty($post->other_images))
    @php
        // Decode the JSON only once before the loop
        $otherImages = json_decode($post->other_images, true);
    @endphp

    @if(is_array($otherImages) && count($otherImages) > 0)
        @foreach($otherImages as $otherImage)
        <a href="{{ asset($otherImage) }}" data-lightbox="gallery" data-title="Additional Image">
            <img src="{{ asset($otherImage) }}" alt="Additional Image" class="img-fluid border rounded shadow-sm mr-2 mb-2" style="max-width: 100px; height: auto;">
        </a>
        @endforeach
    @endif
@endif

        </div>

        <!-- Comment Section -->
        <div class="comment-section">
          <h4>Comments</h4>

          <!-- Display Comments -->
          @foreach($comments as $comment)
            <div class="comment-box border p-4 rounded shadow-sm mb-3">
                <div class="d-flex align-items-center">
                  <!-- Profile Picture -->
                  <div class="avatar">
                    <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim($comment->email))) }}?d=mp&s=50" alt="{{ $comment->Name }}" class="rounded-circle">
                  </div>
                  
                  <!-- Comment Header -->
                  <div class="ml-3">
                    <strong class="comment-author">{{ $comment->Name }}</strong>
                    <span class="text-muted small">on {{ $comment->created_at->format('F d, Y') }} at {{ $comment->created_at->format('h:i A') }}</span>
                  </div>
                </div>
                
                <!-- Comment Text -->
                <p class="comment-text mt-2">{{ $comment->Comment }}</p>
              </div>
          @endforeach
          <div class="row justify-content-center mt-4">
            <div class="col-12 d-flex justify-content-center">
              {{ $comments->links('pagination') }}
            </div>
          </div>

          <!-- Add Comment Form -->
          <div class="comment-form mt-4">
            <h5>Leave a Comment</h5>
            <form method="POST" action="{{ route('post.comment', $post->id) }}">
              @csrf
              @method('POST')
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

<style>
  /* Overall styling for the comment section */
.comment-box {
  background-color: #f9f9f9; /* Light background */
  border: 1px solid #e0e0e0; /* Light border */
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Slight shadow for depth */
  margin-bottom: 20px;
  transition: all 0.3s ease;
}

.comment-box:hover {
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15); /* Highlight on hover */
}

/* Avatar image styling */
.avatar img {
  width: 50px;
  height: 50px;
  object-fit: cover; /* Ensures the image fits well within the circle */
  border-radius: 50%; /* Circular shape */
  border: 2px solid #ddd; /* Light border around the avatar */
}

/* Flex container for avatar and comment info */
.d-flex {
  display: flex;
  align-items: center;
}

/* Styling for the comment author's name */
.comment-author {
  font-weight: 600;
  font-size: 1.1rem;
  color: #333;
}

/* Timestamp styling */
.text-muted {
  color: #6c757d; /* Muted color for timestamp */
}

/* Spacing for the comment text */
.comment-text {
  margin-top: 15px;
  font-size: 1rem;
  line-height: 1.5;
  color: #444;
}

/* Small size for the date and time */
.small {
  font-size: 0.9rem;
}

/* Responsiveness */
@media (max-width: 768px) {
  .comment-box {
    padding: 15px; /* Slightly reduced padding on smaller screens */
  }

  .avatar img {
    width: 40px;
    height: 40px;
  }

  .comment-author {
    font-size: 1rem;
  }

  .comment-text {
    font-size: 0.95rem;
  }
}

</style>
</html>