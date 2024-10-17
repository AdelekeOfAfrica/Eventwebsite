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

        .navbar-nav .nav-item {
    padding: 0; /* Remove unnecessary padding */
}

.navbar-nav .nav-link {
    padding: 10px 15px; /* Adjust padding for menu items */
    color: black !important; /* Default link color */
    transition: all 0.3s ease; /* Smooth transition */
    line-height: 1.2; /* Adjust line height to make it more compact */
}

.navbar-nav .nav-link:hover {
    background-color: pink; /* Button color on hover */
    color: white !important; /* Text color on hover */
    border-radius: 5px; /* Rounded corners */
}

.navbar {
    padding: 10px 15px; /* Adjust overall navbar padding to reduce height */
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional shadow */
}

.navbar-brand img {
    height: 30px; /* Adjust logo size to make the navbar more compact */
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
    <title>Navigation Bar</title>
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
