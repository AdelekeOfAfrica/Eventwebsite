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

            <div class="modal fade modalban" id="bannerModal" tabindex="-1" role="dialog" aria-labelledby="bannerModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="bannerModalLabel">Banner Details</h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="bannerForm" enctype="multipart/form-data">
                                <input type="hidden" id="bannerId" name="bannerId">

                                <div class="form-group">
                                    <label for="eventImage">Image</label>
                                    <div id="eventImageContainer" class="mb-3">
                                        <img id="eventImage" src="" alt="Banner Image" class="img-fluid border rounded shadow-sm" />
                                    </div>
                                    <input type="file" class="form-control-file" id="imageUpload" name="imageUpload" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label for="eventName">Name</label>
                                    <input type="text" class="form-control" id="eventName" name="eventName" required>
                                </div>
                                <div class="form-group">
                                    <label for="eventDescription">Description</label>
                                    <textarea class="form-control" id="eventDescription" name="eventDescription" required></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success" id="editBanner">Update Banner</button>
                        </div>
                    </div>
                </div>
            </div>



            {{-- end of modal  --}}
        </div>


            </div>
        </section>
    </div>
@include('Backend.sidebar')
</body>


@include('Backend.backend_includes.js')
</html>