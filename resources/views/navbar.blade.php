<!DOCTYPE html>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        #header-wrap {
            background: #f8f9fa;
        }
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img {
            height: 30px; /* Adjust logo size */
        }
        .nav-link {
            color: black !important; /* Default color */
            padding: 10px 15px; /* Padding for links */
            transition: all 0.3s ease; /* Smooth transition */
        }
        .nav-link:hover {
            background-color: #007bff; /* Button color on hover */
            color: white !important; /* Text color on hover */
            border-radius: 5px; /* Rounded corners */
        }
        .mobile-menu {
            display: none; /* Hide mobile menu by default */
            position: absolute; /* Position it absolutely */
            width: 100%; /* Full width */
            background-color: #fff; /* Background color */
            z-index: 1000; /* Above other elements */
            border: 1px solid #ddd; /* Optional border */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional shadow */
            transition: max-height 0.3s ease; /* Smooth transition */
            overflow: hidden; /* Hide overflow */
        }

        .mobile-menu.active {
            display: block; /* Show mobile menu when active */
        }

        @media (max-width: 768px) {
            .navbar-collapse {
                display: none !important; /* Hide default navbar collapse */
            }
        }

        .toggle-icon {
            cursor: pointer; /* Pointer cursor for toggle */
            padding: 10px; /* Padding for the toggle */
            background: transparent; /* Transparent background */
            border: none; /* No border */
        }

        .toggle-icon:focus {
            outline: none; /* Remove focus outline */
        }
    </style>
<html lang="en">
  <header id="header-wrap">
      <nav class="navbar navbar-expand-lg fixed-top">
          <div class="container">
              <div class="navbar-header">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <a href="index.html" class="navbar-brand"><img src="assets/img/sample.png" alt="Logo"></a>
              </div>
              <div class="collapse navbar-collapse" id="main-navbar">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                          <a class="nav-link" href="#header-wrap">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#about">About</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/login">Login</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#team">Speakers</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#gallery">Gallery</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#faq">Faq</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#sponsors">Sponsors</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#pricing">Pricing</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#google-map-area">Contact</a>
                      </li>
                  </ul>
              </div>
          </div>

          <!-- Mobile Menu Start -->
          <ul class="mobile-menu list-unstyled" id="mobile-menu">
              <li><a href="#header-wrap">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#schedules">Schedules</a></li>
              <li><a href="#team">Speakers</a></li>
              <li><a href="#gallery">Gallery</a></li>
              <li><a href="#faq">Faq</a></li>
              <li><a href="#sponsors">Sponsors</a></li>
              <li><a href="#pricing">Pricing</a></li>
              <li><a href="#google-map-area">Contact</a></li>
          </ul>
          <!-- Mobile Menu End -->

      </nav>
  </header>
    <body>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
   
    document.getElementById('toggle-button').addEventListener('click', function() {
        var mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('active'); // Toggle 'active' class
    });
</script>
    </body>
</html>