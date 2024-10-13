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
                            <h5 class="card-title">Not Active</h5>
                            <h2 class="card-text">{{$notActive}}</h2>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-12 card-summary">
                    <a href="{{ route('banners') }}" class="card text-center border-light shadow-sm hover-card" style="background-color: #007bff; color: white;">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <i class="fas fa-calendar-check fa-2x mb-3" style="color: white;"></i>
                            <h5 class="card-title">Active</h5>
                            <h2 class="card-text">{{$active}}</h2>
                        </div>
                    </a>
                </div>
                <!-- Add more cards as needed -->
            </div>

            <!-- End of Card -->

            <table id="bannerTable" class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>statusLabel</th>
                        <th>name</th>
                        <th>description</th>
                        <th> Action </th>
                      
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>


            </div>
        </section>
    </div>
@include('Backend.sidebar')
</body>


@include('Backend.backend_includes.js')
</html>