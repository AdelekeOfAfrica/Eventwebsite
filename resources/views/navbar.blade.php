<!DOCTYPE html>
<html lang="en">
<head>
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

 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    #header-wrap {
        background: #f8f9fa;
    }

    .navbar {
        padding: 5px 15px; /* Compact padding */
        background-color: #fff; /* Background color */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional shadow */
    }

    .navbar-nav .nav-item {
        padding: 0; /* Remove unnecessary padding */
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        color: black; /* Set text color to black by default */
        padding: 5px 15px; /* Compact padding */
        margin-top: 5px; /* Reduce margin */
        margin-bottom: 5px;
        line-height: 30px; /* Reduce line height */
        text-transform: uppercase; /* Keep uppercase text */
        background: transparent; /* Transparent background */
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        position: relative;
    }

    .navbar-expand-lg .navbar-nav li > a:before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        margin-left: -10px;
        width: 15px;
        height: 2px;
        background: #E91E63;
        -webkit-transform: scale3d(0, 1, 1);
        -moz-transform: scale3d(0, 1, 1);
        transform: scale3d(0, 1, 1);
        -webkit-transition: -webkit-transform 0.1s;
        -moz-transition: -webkit-transform 0.1s;
        transition: transform 0.1s;
    }

    .navbar-expand-lg .navbar-nav .active a:before {
        -webkit-transform: scale3d(1, 1, 1);
        -moz-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        -moz-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        -webkit-transition-duration: 0.3s;
        -moz-transition-duration: 0.3s;
        transition-duration: 0.3s;
    }

    /* Hover and focus states */
    .navbar-expand-lg .navbar-nav li a:hover,
    .navbar-expand-lg .navbar-nav li .active > a,
    .navbar-expand-lg .navbar-nav li a:focus {
        color: #E91E63; /* Hover color */
        outline: none;
    }

    .navbar-expand-lg .navbar-nav .nav-link:focus,
    .navbar-expand-lg .navbar-nav .nav-link:hover {
        color: #E91E63 !important; /* Ensure hover/focus color */
    }

    /* Active link color */
    .navbar li.active a.nav-link {
        color: #E91E63 !important;
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



    <title>EvenTomy</title>
</head>
<body>
<header id="header-wrap">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button class="toggle-icon" id="toggle-button" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="index.html" class="navbar-brand"><img src="assets/img/sample.png" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav ml-auto d-none d-lg-flex"> <!-- Desktop Menu -->
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
            <li><a class="nav-link" href="#header-wrap">Home</a></li>
            <li><a class="nav-link" href="#about">About</a></li>
            <li><a class="nav-link" href="#schedules">Schedules</a></li>
            <li><a class="nav-link" href="#team">Speakers</a></li>
            <li><a class="nav-link" href="#gallery">Gallery</a></li>
            <li><a class="nav-link" href="#faq">Faq</a></li>
            <li><a class="nav-link" href="#sponsors">Sponsors</a></li>
            <li><a class="nav-link" href="#pricing">Pricing</a></li>
            <li><a class="nav-link" href="#google-map-area">Contact</a></li>
        </ul>
        <!-- Mobile Menu End -->
    </nav>
</header>

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
    // Toggle mobile menu visibility
    document.getElementById('toggle-button').addEventListener('click', function() {
        var mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('active'); // Toggle 'active' class
    });
</script>
</body>
</html>
