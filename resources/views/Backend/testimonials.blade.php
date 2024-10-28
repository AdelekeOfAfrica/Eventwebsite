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
            <button class="btn btn-primary" id="createBannerBtn"  data-toggle="modal" data-target="#createEventPictureModal">Create New Entry</button>
        </div>
            <table id="CommentTable" class="table bannerTable table-bordered table-striped table-hover mt-6">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Comment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table rows will go here -->
                </tbody>
            </table>


            <!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmModalLabel">Confirm Delete</h5>
                <button type="button" class="close text-black" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this testimonial?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>


            {{-- end of view modal  --}}

            <div class="modal fade modalban" id="createEventPictureModal" tabindex="-1" role="dialog" aria-labelledby="EventPictureModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="eventPictureModalLabel">Create Sponsor Logo</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for uploading the image -->
                <form method="post" action="{{route('createSponsor')}}" id="eventPictureForm" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="hidden" id="eventId" name="eventId">
                    
                    <!-- File Input for Image Upload -->
                    <div class="form-group">
                        <label for="Image">Image</label>
                        <div id="eventImageContainer" class="mb-3">
                            <!-- Image preview element -->
                            <img id="singleEventPictureImage" src="" alt="Event Image" class="img-fluid border rounded shadow-sm" />
                        </div>
                        <!-- Input for selecting the image -->
                        <input type="file" class="form-control-file" id="ImageUploadEvent" name="imageUpload" accept="image/*" required>
                    </div>

                    <!-- Input for Event Name -->
                    <div class="form-group">
                        <label for="eventName">Event Name</label>
                        <input type="text" class="form-control" id="eventName" name="pictureName" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-lg btn-block btn-success" id="updateEventPicture">Create Sponsor Logo</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer text-center">
                <!-- Close Button -->
                <div class="form-group text-center">
                    <button type="button" class="btn btn-lg btn-block btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>





            {{-- end of createmodal  --}}
        </div>
    </section>
</div>


</body>
@include('Backend.backend_includes.js')
</html>