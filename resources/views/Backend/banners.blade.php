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

            <!-- <table id="bannerTable" class="table table-bordered mt-3">
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
            </table> -->

            <div class="d-flex justify-content-end mb-2">
                <button class="btn btn-primary" id="createBannerBtn"  data-toggle="modal" data-target="#createBannerModal">Create New Entry</button>
            </div>
            <table id="bannerTable" class="table bannerTable table-bordered table-striped table-hover mt-6">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table rows will go here -->
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
                            <form  method="post" action="{{route('banner.edit')}}" id="bannerForm" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') 
                            <input type="hidden" id="bannerId" name="bannerId">
                            <div class="form-group">
                                <label for="eventImage">Image</label>
                                <div id="eventImageContainer" class="mb-3">
                                    <img id="eventImage" src="" alt="Banner Image" class="img-fluid border rounded shadow-sm" />
                                </div>
                                <input type="file" class="form-control-file" id="imageUpload" name="imageUpload" accept="image/*" required>
                            </div>
                                <div class="form-group">
                                    <label for="eventName">Name</label>
                                    <input type="text" class="form-control" id="eventName" name="bannerTitle" required>
                                </div>
                                <div class="form-group">
                                    <label for="eventDescription">Description</label>
                                    <textarea class="form-control" id="eventDescription" name="bannerDescription" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="activeStatus">Active Status</label>
                                    <select class="form-control" id="activeStatus" name="activeStatus" required>
                                        <option value="" disabled selected>Select Status</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>

                                <div class ="form-group text-center">
                                    <button type="submit" class="btn btn-lg btn-block btn-success" id="editBanner">Update Banner</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer text-center">
                            <div class="form-group text-center">
                                <button type="button" class="btn btn-lg btn-block btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            {{-- end of view modal  --}}

            
            <div class="modal fade modalban" id="createBannerModal" tabindex="-1" role="dialog" aria-labelledby="bannerModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="bannerModalLabel">Create Banner</h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form  method="post" action="{{route('banner.create')}}" id="bannerForm" enctype="multipart/form-data">
                            @csrf
                            @method('Post') 

                            <div class="form-group">
                                <label for="eventImage">Image</label>
                                <div id="eventImageContainer" class="mb-3">
                                    <img id="createBannerImage" src="" alt="Banner Image" class="img-fluid border rounded shadow-sm" />
                                </div>
                                <input type="file" class="form-control-file" id="BannerUpload" name="imageUpload" accept="image/*" required>
                            </div>
                                <div class="form-group">
                                    <label for="eventName">Name</label>
                                    <input type="text" class="form-control" id="eventName" name="bannerTitle" required>
                                </div>
                                <div class="form-group">
                                    <label for="eventDescription">Description</label>
                                    <textarea class="form-control" id="eventDescription" name="bannerDescription" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="activeStatus">Active Status</label>
                                    <select class="form-control" id="activeStatus" name="activeStatus" required>
                                        <option value="" disabled selected>Select Status</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>

                                <div class ="form-group text-center">
                                    <button type="submit" class="btn btn-lg btn-block btn-success" id="editBanner">create Banner</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer text-center">
                            <div class="form-group text-center">
                                <button type="button" class="btn btn-lg btn-block btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            {{-- end of createmodal  --}}
        </div>


        </div>
        </section>
    </div>
@include('Backend.sidebar')
</body>


@include('Backend.backend_includes.js')
</html>