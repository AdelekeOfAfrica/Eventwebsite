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
    <section  class="countdown-timer section-padding">
    <div class="container" style="background-color: white; padding: 60px 0;">
        <div class="text-center mb-5">
            <h1 class="wow fadeInUp" data-wow-delay="0.2s" style="font-size: 2.5em; font-weight: bold;">Testimonials</h1>
            <p class="wow fadeInDown" data-wow-delay="0.2s" style="font-size: 1.2em; color: #888;">Eventomy.co</p>
        </div>

        <div id="testimonial-slide" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner text-center">
                <!-- First Testimonial -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center align-items-center">
                        <a class="carousel-control-prev" href="#testimonial-slide" role="button" data-slide="prev" style="background-color: pink; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <div class="testimonial-content text-center" style="background-color: #f9f9f9; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); padding: 30px; width: 80%; max-width: 600px;">
                            <p style="font-size: 1.2em; font-style: italic; color: #555;">"This service was fantastic! It made my life so much easier."</p>
                            <h5 style="font-weight: bold; color: #333; margin-top: 15px;">John Doe</h5>
                            <i class="lni-user" style="font-size: 80px; color: pink; margin-top: 15px;"></i>

                        </div>
                        <a class="carousel-control-next" href="#testimonial-slide" role="button" data-slide="next" style="background-color: pink; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; margin-left: 10px;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <!-- Second Testimonial -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center">
                        <a class="carousel-control-prev" href="#testimonial-slide" role="button" data-slide="prev" style="background-color: pink; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <div class="testimonial-content text-center" style="background-color: #f9f9f9; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); padding: 30px; width: 80%; max-width: 600px;">
                            <p style="font-size: 1.2em; font-style: italic; color: #555;">"Highly recommend to everyone looking for quality service!"</p>
                            <h5 style="font-weight: bold; color: #333; margin-top: 15px;">Jane Smith</h5>
                            <i class="lni-user" style="font-size: 80px; color: pink; margin-top: 15px;"></i>

                        </div>
                        <a class="carousel-control-next" href="#testimonial-slide" role="button" data-slide="next" style="background-color: pink; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; margin-left: 10px;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <!-- Third Testimonial -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center">
                        <a class="carousel-control-prev" href="#testimonial-slide" role="button" data-slide="prev" style="background-color: pink; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <div class="testimonial-content text-center" style="background-color: #f9f9f9; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); padding: 30px; width: 80%; max-width: 600px;">
                            <p style="font-size: 1.2em; font-style: italic; color: #555;">"Amazing experience with incredible customer support."</p>
                            <h5 style="font-weight: bold; color: #333; margin-top: 15px;">Alice Brown</h5>
                            <i class="lni-user" style="font-size: 80px; color: pink; margin-top: 15px;"></i>

                        </div>
                        <a class="carousel-control-next" href="#testimonial-slide" role="button" data-slide="next" style="background-color: pink; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; margin-left: 10px;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="row justify-content-center mt-3">
                    <div class="col-xs-12 text-center">
                        <a href="/give-testimony" class="btn btn-common" >Give Testimony</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </section>
    <!-- Coundown Section End -->

 

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
    <!-- Counter Area End -->

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
            <a href="/pictures" class="btn btn-common">Browse All</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallary Section End -->

  

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
