<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pictures</title>
    @include('navbar')
  </head>
  <body>
    <!-- Gallery Section Start -->
    <section id="gallery" class="section-padding mx-auto">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Event Gallery</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">EvenTomy.Co</p>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach($pictures as $picture)
            <div class="col-md-6 col-sm-6 col-lg-4">
              <div class="gallery-box">
                <div class="img-thumb">
                  <img class="img-fluid" src="{{ asset($picture->image_path) }}" alt="Gallery Image">
                </div>
                <div class="overlay-box text-center">
                  <a class="lightbox" href="{{ asset($picture->image_path) }}">
                    <i class="lni-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="row justify-content-center mt-4">
          <div class="col-12 d-flex justify-content-center">
            {{ $pictures->links('pagination') }}
          </div>
        </div>
      </div>
    </section>
    <!-- Gallery Section End -->  
  </body>
</html>
