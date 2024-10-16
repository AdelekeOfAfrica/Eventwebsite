   <!-- Header Area wrapper Starts -->
   <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="assets/img/sample.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item active">
                <a class="nav-link" href="#header-wrap">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">
                  Login
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">
                  Speakers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">
                  Gallery
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#faq">
                  Faq
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sponsors">
                  Sponsors
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing">
                  pricing
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#google-map-area">
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a class="page-scrool" href="#header-wrap">Home</a>
          </li>
          <li>
            <a class="page-scrool" href="#about">About</a>
          </li>
          <li>
             <a class="page-scroll" href="#schedules">schedules</a>
          </li>
          <li>
            <a class="page-scroll" href="#team">Speakers</a>
          </li>
          <li>
            <a class="page-scroll" href="#gallery">Gallery</a>
          </li>
          <li>
            <a class="page-scroll" href="#faq">Faq</a>
          </li>
          <li>
            <a class="page-scroll" href="#sponsors">Sponsors</a>
          </li>
          <li>
            <a class="page-scroll" href="#pricing">pricing</a>
          </li>
          <li>
            <a class="page-scroll" href="#google-map-area">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->

      <!-- Main Carousel Section Start -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
        <li data-target="#main-slide" data-slide-to="1"></li>
        <li data-target="#main-slide" data-slide-to="2"></li>
    </ol>
    <!-- <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/slider/1.png" alt="First slide">
            <div class="overlay"></div>
            <div class="carousel-caption d-md-block">
                <p class="fadeInUp wow" data-wow-delay=".6s">Global Grand Event on Digital Design</p>
                <h1 class="wow fadeInDown heading" data-wow-delay=".4s">Design Thinking Conference</h1>
                <a href="#" class="fadeInLeft wow btn btn-common btn-lg" data-wow-delay=".6s">Get Ticket</a>
                <a href="#" class="fadeInRight wow btn btn-border btn-lg" data-wow-delay=".6s">Explore More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slider/2.png" alt="Second slide">
            <div class="overlay"></div>
            <!-- <div class="carousel-caption d-md-block">
                <p class="fadeInUp wow" data-wow-delay=".6s">Global Grand Event on Digital Design</p>
                <h1 class="wow bounceIn heading" data-wow-delay=".7s">22 Amazing Speakers</h1>
                <a href="#" class="fadeInUp wow btn btn-border btn-lg" data-wow-delay=".8s">Learn More</a>
            </div> -->
        <!-- </div> -->
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slider/4.png" alt="Third slide">
            <div class="overlay"></div>
            <!-- <div class="carousel-caption d-md-block">
                <p class="fadeInUp wow" data-wow-delay=".6s">Global Grand Event on Digital Design</p>
                <h1 class="wow fadeInUp heading" data-wow-delay=".6s">Book Your Seat Now!</h1>
                <a href="#" class="fadeInUp wow btn btn-common btn-lg" data-wow-delay=".8s">Explore</a>
            </div> -->
        </div>
   <!-- </div> -->

   <div class="carousel-inner">
   @foreach($banners as $key => $banner)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <img class="d-block w-100" src="{{ asset($banner->image_path) }}" alt="Slide {{ $key + 1 }}">
            <div class="overlay"></div>
            <div class="carousel-caption d-md-block">
                <p class="fadeInUp wow" data-wow-delay=".6s">{{ $banner->description }}</p>
                <h1 class="wow fadeInDown heading" data-wow-delay=".4s">{{ $banner->title }}</h1>
                <a href="" class="fadeInLeft wow btn btn-common btn-lg" data-wow-delay=".6s"></a>
                <a href="" class="fadeInRight wow btn btn-border btn-lg" data-wow-delay=".6s"></a>
            </div>
        </div>
    @endforeach

</div>

    <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
        <span class="sr-only">Next</span>
    </a>
</div>
    <style>

    .carousel-item {
        position: relative; /* Ensures overlay is positioned relative to the carousel item */
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity (0.5) as needed */
        z-index: 1; /* Ensures the overlay is above the image but below the text */
    }
    </style>
      <!-- Main Carousel Section End -->

    </header>
    <!-- Header Area wrapper End -->
