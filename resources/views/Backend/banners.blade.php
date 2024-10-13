<!DOCTYPE html>
<html lang="en">
<head>
@include('Backend.backend_includes.style')
    
</head>
<body>
  
@include('Backend.header')

    <div id="content" class="content">
        <section class="section-padding" style="margin-top:80px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 card-summary">
                    <a href="/users" class="card text-center border-light shadow-sm hover-card" style="background-color: #007bff; color: white;">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <i class="fas fa-blog fa-2x mb-3" style="color: white;"></i>
                            <h5 class="card-title">Blog Posts</h5>
                            <h2 class="card-text">10</h2>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-12 card-summary">
                    <a href="{{ route('banners') }}" class="card text-center border-light shadow-sm hover-card" style="background-color: #007bff; color: white;">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <i class="fas fa-calendar-check fa-2x mb-3" style="color: white;"></i>
                            <h5 class="card-title">Banners</h5>
                            <h2 class="card-text">5</h2>
                        </div>
                    </a>
                </div>
                <!-- Add more cards as needed -->
            </div>
        </div>


            </div>
        </section>
    </div>
@include('Backend.sidebar')
</body>


@include('Backend.backend_includes.js')
</html>