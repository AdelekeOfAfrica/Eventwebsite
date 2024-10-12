<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event By Tomi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap CSS and other styles -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <style>
        body {
            background-color: #000000; /* Solid black background */
            color: white; /* Default text color for readability */
            font-family: 'Arial', sans-serif;
            height: 100vh; /* Full viewport height */
            margin: 0; /* Remove default margin */
            display: flex; /* Center content */
            justify-content: center; /* Center content horizontally */
            align-items: center; /* Center content vertically */
        }
        .card {
            border-radius: 15px;
            overflow: hidden;
            background-color: white; /* White background for card */
        }
        .card-header {
            background: linear-gradient(135deg, #f472b6, #ec4899);
            color: white;
        }
        .welcome-message {
            color: #ec4899; /* Pink color for the welcome message */
        }
    </style>
</head>
<body>

<div class="card shadow-lg" style="width: 400px;">
    <div class="d-flex justify-content-center mt-3 mb-4">
        <img src="assets/img/sample.png" alt="Company Logo" class="img-fluid" style="max-height: 60px;">
    </div>

    <div class="text-center">
    <h5 class="text-black">Welcome Back!</h5>
    <p class="mb-0 text-black">Please log in to continue</p>
    </div>
    <div class="card-body">
        <form method ="post" action="{{ route('postLogin') }}" >
        @csrf
        @method('Post')
            <div class="mb-3">
                <label for="email" class="form-label text-black">Email</label>
                <input type="text" name="email" class="form-control border border-gray-300 rounded-lg focus:ring focus:ring-pink-200" id="username" placeholder="Enter your username" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-black">Password</label>
                <input type="password" name="password" class="form-control border border-gray-300 rounded-lg focus:ring focus:ring-pink-200" id="password" placeholder="Enter your password" required>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-common wow fadeInUp w-100">Login</button>
            </div>
        </form>
        <!-- <div class="text-center mt-3">
            <a href="#" class="text-decoration-none text-pink-600">Forgot Password?</a>
        </div> -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery and other scripts -->
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

</body>
</html>
