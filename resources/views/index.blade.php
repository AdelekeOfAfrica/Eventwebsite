<!DOCTYPE html>
@extends('template_includes.layout')
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Event By Tomi</title>


  </head>
  <body>
@section('content')


    <!-- Coundown Section Start -->
    <section class="countdown-timer section-padding">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="heading-count">
              <h2 class="wow fadeInDown" data-wow-delay="0.2s">Event Will Start In</h2>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row time-countdown justify-content-center wow fadeInUp" data-wow-delay="0.2s">
              <div id="clock" class="time-count"></div>
            </div>
            <a href="pricing.html" class="btn btn-common wow fadeInUp" data-wow-delay="0.3s">Add to My Calender</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Coundown Section End -->

     <!-- Services Section Start -->
    <section id="services" class="services section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Why You Choose Us?</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
        </div>
        <div class="row services-wrapper">
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lni-heart"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Get Inspired</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon">
                <i class="lni-gallery"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Meet New Faces</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-envelope"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Fresh Tech Insights</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon">
                <i class="lni-cup"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Networking Session</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
              </div>
            </div>
          </div>
           <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="1s">
              <div class="icon">
                <i class="lni-user"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Global Event</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
              </div>
            </div>
          </div>
           <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lni-bubble"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Free Swags</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->


    <!-- About Section Start -->
    <!-- <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">About This Events</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="about-item">
              <img class="img-fluid" src="assets/img/about/img1.jpg" alt="">
              <div class="about-text">
                <h3><a href="#">Wanna Know Our Mission?</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                <a class="btn btn-common btn-rm" href="#">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="about-item">
              <img class="img-fluid" src="assets/img/about/img2.jpg" alt="">
              <div class="about-text">
                <h3><a href="#">What you will learn?</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                <a class="btn btn-common btn-rm" href="#">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="about-item">
              <img class="img-fluid" src="assets/img/about/img3.jpg" alt="">
              <div class="about-text">
                <h3><a href="#">What are the benifits?</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                <a class="btn btn-common btn-rm" href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- About Section End -->

    <!-- Counter Area Start-->
    <section class="counter-section section-padding">
      <div class="container">
        <div class="row">
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon"><i class="lni-briefcase"></i></div>
              <p>Corporate Events</p>

            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon"><i class="lni-heart"></i></div>
              <p>Weddings</p>

            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon"><i class="lni-microphone"></i></div>
              <p>Social Events</p>

            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon"><i class="lni-users"></i></div>
              <p>Trade Shows & Expos</p>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Area End-->

      <!-- Full-Screen Video Area Start -->
<section id="video" class="section-padding mt-3" style="padding: 0;">
  <div class="container-fluid" style="padding: 0;">
    <div class="row">
      <div class="col-12">
        <div class="section-title-header text-center">
          <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Highlights</h1>
          <p class="wow fadeInDown" data-wow-delay="0.2s">Watch the highlights from our past events</p>
        </div>
      </div>
    </div>

    <!-- Bootstrap Video Carousel -->
    <div id="videoCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <!-- First Video -->
        <div class="carousel-item active">
          <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/UC0I_XKbWjo?si=QnM2bWL1_BsC940D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
        <!-- Second Video -->
        <div class="carousel-item">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dUmnQawbhaY?si=3lERTFHJ276ShkjS" allowfullscreen></iframe>
          </div>
        </div>
        <!-- Third Video -->
        <div class="carousel-item">
          <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/tZERgJmcKXI?si=GJmFNnEOLRQRIpVV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <!-- Carousel Controls -->
      <a class="carousel-control-prev" href="#videoCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#videoCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
<!-- Full-Screen Video Area End -->

    <!-- Team Section Start -->
    <section id="team" class="section-padding text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Team</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">eventomy.co</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/10.png" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">EvenTomy</a></h3>
                <p>EvenTomy</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/10.png" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">EvenTomy</a></h3>
                <p>EvenTomy</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/10.png" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">EvenTomy</a></h3>
                <p>EvenTomy</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.8s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/10.png" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">EvenTomy</a></h3>
                <p>EvenTomy</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="1s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/10.png" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">EvenTomy</a></h3>
                <p>EvenTomy</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="1.2s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/10.png" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">EvenTomy</a></h3>
                <p>EvenTomy</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
        </div>
        <a href="speakers.html" class="btn btn-common mt-30 wow fadeInUp" data-wow-delay="1.9s">Click to see all staffs</a>
      </div>
    </section>
    <!-- Team Section End -->

    <!-- Gallary Section Start -->
    <section id="gallery" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">our event gallery</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/gallery/1.png" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/gallery/1.png">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/gallery/2.png" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/gallery/2.png">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/gallery/3.png" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/gallery/3.png">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/gallery/4.png" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/gallery/4.png">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/gallery/5.png" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/gallery/5.png">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/gallery/6.png" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/gallery/6.png">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-3">
          <div class="col-xs-12">
            <a href="#" class="btn btn-common">Browse All</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallary Section End -->

    <!-- Ask Question Section Start -->
    <section id="faq" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Ask Question?</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
            <div class="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <div class="header-title" data-toggle="collapse" data-target="#questionOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="lni-pencil"></i> How to make a new event?
                  </div>
                </div>
                <div id="questionOne" class="collapse" aria-labelledby="headingOne" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                    <div class="header-title" data-toggle="collapse" data-target="#questionTwo" aria-expanded="false" aria-controls="questionTwo">
                      <i class="lni-pencil"></i>  Which payment methods do you accept?
                    </div>
                </div>
                <div id="questionTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <div class="header-title" data-toggle="collapse" data-target="#questionThree" aria-expanded="false" aria-controls="questionThree">
                    <i class="lni-pencil"></i>  Which document can i bring to meeting?
                  </div>
                </div>
                <div id="questionThree" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <div class="header-title" data-toggle="collapse" data-target="#questionFour" aria-expanded="false" aria-controls="questionFour">
                   <i class="lni-pencil"></i> Who can join at the live event venue?
                  </div>
                </div>
                <div id="questionFour" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
            <div class="accordion">
              <div class="card">
                <div class="card-header" id="headingOne2">
                  <div class="header-title" data-toggle="collapse" data-target="#questionOne2" aria-expanded="true" aria-controls="collapseOne">
                    <i class="lni-pencil"></i> How to make a new event?
                  </div>
                </div>
                <div id="questionOne2" class="collapse" aria-labelledby="headingOne" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo2">
                    <div class="header-title" data-toggle="collapse" data-target="#questionTwo2" aria-expanded="false" aria-controls="questionTwo">
                      <i class="lni-pencil"></i>  Which payment methods do you accept?
                    </div>
                </div>
                <div id="questionTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <div class="header-title" data-toggle="collapse" data-target="#questionFive" aria-expanded="false" aria-controls="questionFive">
                    <i class="lni-pencil"></i>How to set price?
                  </div>
                </div>
                <div id="questionFive" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <div class="header-title" data-toggle="collapse" data-target="#questionSix" aria-expanded="false" aria-controls="questionSix">
                    <i class="lni-pencil"></i>  What our price list?
                  </div>
                </div>
                <div id="questionSix" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Ask Question Section End -->

    <!-- Sponsors Section Start -->
    <section id="sponsors" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Sponsores</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
        </div>
        <div class="row mb-30 text-center wow fadeInDown" data-wow-delay="0.3s">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="spnsors-logo">
              <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-01.png" alt=""></a>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="spnsors-logo">
              <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-02.png" alt=""></a>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="spnsors-logo">
              <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-03.png" alt=""></a>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="spnsors-logo">
              <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-04.png" alt=""></a>
            </div>
          </div>
          <div class="col-12 text-center">
            <a href="#" class="btn btn-common">become a sponsor</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Sponsors Section End -->







    <!-- Ticket Pricing Area Start -->
    <section id="pricing" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Pricing</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
            <div class="price-block-wrapper wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lni-write"></i>
              </div>
              <div class="colmun-title">
                <h5>Basic Pass</h5>
              </div>
              <div class="price">
                <h2>$29</h2>
                <p>452 Tickets Available</p>
              </div>
              <div class="pricing-list">
                <ul>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Lunch on all days</span></li>
                  <li><i class="lni-close"></i><span class="text">Access to all areas</span></li>
                  <li><i class="lni-close"></i><span class="text">Certificate</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Workshop</span></li>
                </ul>
              </div>
              <a href="#" class="btn btn-common">Buy Ticket</a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
            <div class="price-block-wrapper wow fadeInUp" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lni-layers"></i>
              </div>
              <div class="colmun-title">
                <h5>Standard Pass</h5>
              </div>
              <div class="price">
                <h2>$40</h2>
                <p>452 Tickets Available</p>
              </div>
              <div class="pricing-list">
                <ul>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Lunch on all days</span></li>
                  <li><i class="lni-close"></i><span class="text">Access to all areas</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Certificate</span></li>
                  <li><i class="lni-close"></i><span class="text">Workshop</span></li>
                </ul>
              </div>
              <a href="#" class="btn btn-common">Buy Ticket</a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
            <div class="price-block-wrapper wow fadeInRight" data-wow-delay="0.4s">
              <div class="icon">
                <i class="lni-leaf"></i>
              </div>
              <div class="colmun-title">
                <h5>Premium Pass</h5>
              </div>
              <div class="price">
                <h2>$68</h2>
                <p>452 Tickets Available</p>
              </div>
              <div class="pricing-list">
                <ul>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                  <li><i class="lni-close"></i><span class="text">Lunch on all days</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Access to all areas</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Certificate</span></li>
                  <li><i class="lni-close"></i><span class="text">Workshop</span></li>
                </ul>
              </div>
              <a href="#" class="btn btn-common">Buy Ticket</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Ticket Pricing Area End -->

    <!-- Event Slides Section Start -->
    <section id="event-slides" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">CEO Speech</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
            <div class="video">
              <img class="img-fluid" src="assets/img/about/about.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
            <p class="intro-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
            </p>
            <h2 class="intro-title">Check List</h2>
            <ul class="list-specification">
              <li><i class="lni-check-mark-circle"></i> Lorem Ipsum is simply dummy</li>
              <li><i class="lni-check-mark-circle"></i> Ipsum passages, and more recently</li>
              <li><i class="lni-check-mark-circle"></i> PageMaker including versions</li>
              <li><i class="lni-check-mark-circle"></i> Lorem Ipsum is simply dummy</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Event Slides Section End -->

    <!-- Blog Section Start -->
    <section id="blog" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Latest News & Articles</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
              <div class="blog-image">
                <a href="#">
                  <img class="img-fluid" src="assets/img/blog/img-1.jpg" alt="">
                </a>
              </div>
              <div class="descr">
                <div class="tag">Design</div>
                <h3 class="title">
                  <a href="single-blog.html">
                    The 9 Design Trends You Need to Know
                  </a>
                </h3>
                <div class="meta-tags">
                  <span class="date">Jan 20, 2018</span>
                  <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
              <div class="blog-image">
                <a href="#">
                  <img class="img-fluid" src="assets/img/blog/img-2.jpg" alt="">
                </a>
              </div>
              <div class="descr">
                <div class="tag">Design</div>
                <h3 class="title">
                  <a href="single-blog.html">
                    The 9 Design Trends You Need to Know
                  </a>
                </h3>
                <div class="meta-tags">
                  <span class="date">Jan 20, 2018 </span>
                  <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
              <div class="blog-image">
                <a href="#">
                  <img class="img-fluid" src="assets/img/blog/img-3.jpg" alt="">
                </a>
              </div>
              <div class="descr">
                <div class="tag">Design</div>
                <h3 class="title">
                  <a href="single-blog.html">
                    The 9 Design Trends You Need to Know
                  </a>
                </h3>
                <div class="meta-tags">
                  <span class="date">Jan 20, 2018</span>
                  <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <a href="#" class="btn btn-common">Read More News</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog Section End -->

    <!-- Subscribe Area Start -->
    <div id="subscribe" class="section-padding">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10 col-lg-7">
            <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">
              <h2 class="subscribe-title">Sign Up For Our Newsletter</h2>
              <form class="text-center form-inline">
                <input class="mb-20 form-control" name="email" placeholder="Enter Your Email Here">
                <button type="submit" class="btn btn-common sub-btn" data-style="zoom-in" data-spinner-size="30" name="submit" id="submit">
                <span class="ladda-label"><i class="lni-check-box"></i> Submit</span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subscribe Area End -->

    <!-- Map Section Start -->
    <section id="google-map-area">
      <div class="container-fluid">
        <div class="row">
        </div>
      </div>
    </section>
    <!-- Map Section End -->


    <!-- Footer Section Start -->
    <footer class="footer-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
            <h3><img src="assets/img/sample.png" alt=""></h3>
            <p>
              Aorem ipsum dolor sit amet elit sed lum tempor incididunt ut labore el dolore alg minim veniam quis nostrud ncididunt.
            </p>
          </div>
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
            <h3>QUICK LINKS</h3>
            <ul>
              <li><a href="#">About Conference</a></li>
              <li><a href="#">Our Speakers</a></li>
              <li><a href="#">Event Shedule</a></li>
              <li><a href="#">Latest News</a></li>
              <li><a href="#">Event Photo Gallery</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
            <h3>RECENT POSTS</h3>
            <ul class="image-list">
              <li>
                <figure class="overlay">
                  <img class="img-fluid" src="assets/img/art/a1.jpg" alt="">
                </figure>
                <div class="post-content">
                  <h6 class="post-title"> <a href="blog-single.html">Lorem ipsm dolor sumit.</a> </h6>
                  <div class="meta"><span class="date">October 12, 2018</span></div>
                </div>
              </li>
              <li>
                <figure class="overlay">
                  <img class="img-fluid" src="assets/img/art/a2.jpg" alt="">
                </figure>
                <div class="post-content">
                  <h6 class="post-title"><a href="blog-single.html">Lorem ipsm dolor sumit.</a></h6>
                  <div class="meta"><span class="date">October 12, 2018</span></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
            <h3>SUBSCRIBE US</h3>
            <div class="widget">
              <div class="newsletter-wrapper">
                <form method="post" id="subscribe-form" name="subscribe-form" class="validate">
                  <div class="form-group is-empty">
                    <input type="email" value="" name="Email" class="form-control" id="EMAIL" placeholder="Your email" required="">
                    <button type="submit" name="subscribe" id="subscribes" class="btn btn-common sub-btn"><i class="lni-pointer"></i></button>
                    <div class="clearfix"></div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h5 class="widget-title">FOLLOW US ON</h5>
              <ul class="footer-social">
                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a></li>
                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="site-info">
              <p>© Designed and Developed by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
      <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
      </div>
    </div>

  </body>

  @endsection
  </html>
