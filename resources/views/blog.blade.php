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
  <section id="gallery" class="section-padding" style="background-color: white;">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <!-- Blog Header -->
        <div class="blog-header text-center mt-3">
          <h1 class="display-4">A Day in the Life of an Event</h1>
          <p class="lead">by <strong>John Doe</strong> on October 17, 2024</p>
        </div>

        <!-- Post Content -->
        <div class="post-content">
          <img src="assets/img/sample.png" alt="Event Image" class="img-fluid">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          
          <h3>Event Highlights</h3>
          <p>Phasellus convallis, augue ut facilisis volutpat, massa nisi pharetra libero, sit amet sodales felis eros vel magna. Aliquam erat volutpat. Sed laoreet orci non diam fermentum, ac aliquet magna tempor. Suspendisse tincidunt libero vitae nibh pulvinar, et condimentum libero vehicula. Cras ac risus ex.</p>

          <h3>Gallery</h3>
          <div class="row">
            <div class="col-md-4 mb-4">
              <img class="img-fluid" src="assets/img/sample.png" alt="Gallery Image">
            </div>
            <div class="col-md-4 mb-4">
              <img class="img-fluid" src="assets/img/sample.png" alt="Gallery Image">
            </div>
            <div class="col-md-4 mb-4">
              <img class="img-fluid" src="assets/img/sample.png" alt="Gallery Image">
            </div>
            <div class="col-md-4 mb-4">
              <img class="img-fluid" src="assets/img/sample.png" alt="Gallery Image">
            </div>
            <div class="col-md-4 mb-4">
              <img class="img-fluid" src="assets/img/sample.png" alt="Gallery Image">
            </div>
            <div class="col-md-4 mb-4">
              <img class="img-fluid" src="assets/img/sample.png" alt="Gallery Image">
            </div>
          </div>
        </div>

        <!-- Comment Section -->
        <div class="comment-section">
          <h4>Comments</h4>

          <!-- Existing Comments -->
          <div class="comment-box border p-3 rounded">
            <strong>Jane Smith</strong> <span class="text-muted">on October 17, 2024 at 10:00 AM</span>
            <p>This event was amazing! Thanks for sharing the highlights. Looking forward to the next one!</p>
          </div>

          <div class="comment-box border p-3 rounded">
            <strong>Michael Brown</strong> <span class="text-muted">on October 16, 2024 at 5:45 PM</span>
            <p>The gallery looks fantastic! I really wish I could have been there.</p>
          </div>

          <!-- Add Comment Form -->
          <div class="comment-form mt-4">
            <h5>Leave a Comment</h5>
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" required>
              </div>
              <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea class="form-control" id="comment" rows="3" required></textarea>
              </div>
              <div class="col-xs-12 text-center" >
              <a href="#" class="btn  browse-all-btn" style="background-color:#E91E63; color:white;">Drop A Comment</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
