<!DOCTYPE html>
<html lang="en">
<head>
@include('Backend.backend_includes.style')
    
</head>
<body>
   
@include('Backend.header')
@include('Backend.sidebar')
<div id="content" class="content">
    <section class="section-padding" style="margin-top:80px;">
        <div class="container-fluid">
        <div class="d-flex justify-content-end mb-2">
            <button class="btn btn-primary" id="createBannerBtn"  data-toggle="modal" data-target="#createBannerModal">Create New Entry</button>
        </div>
            <table id="pictureTable" class="table bannerTable table-bordered table-striped table-hover mt-6">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Image</th>
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
                            <h5 class="modal-title" id="bannerModalLabel">Picture Details</h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form  method="post" action="{{route('updateBackendPictures')}}" id="bannerForm" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') 
                            <input type="hidden" id="bannerId" name="bannerId">
                            <div class="form-group">
                                <label for="Image">Image</label>
                                <div id="eventImageContainer" class="mb-3">
                                    <img id="eventImage" src="" alt="Banner Image" class="img-fluid border rounded shadow-sm" />
                                </div>
                                <input type="file" class="form-control-file" id="imageUpload" name="imageUpload" accept="image/*" required>
                            </div>
                                <div class="form-group">
                                    <label for="PictureName">Name</label>
                                    <input type="text" class="form-control" id="eventName" name="bannerTitle" required>
                                </div>
                                
                               

                                <div class ="form-group text-center">
                                    <button type="submit" class="btn btn-lg btn-block btn-success" id="editBanner">Update Picture</button>
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
        </div>
    </section>
</div>


</body>
@include('Backend.backend_includes.js')
</html>