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
            <button class="btn btn-primary" id="createBannerBtn"  data-toggle="modal" data-target="#createBlogPostModal">Create New Entry</button>
        </div>
            <table id="BlogTable" class="table bannerTable table-bordered table-striped table-hover mt-6">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table rows will go here -->
                </tbody>
            </table>


            <div class="modal fade modalban" id="createBlogPostModal" tabindex="-1" role="dialog" aria-labelledby="EventPictureModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="eventPictureModalLabel">Create A New Blog Post</h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Form for uploading the image -->
                            <form method="post" action="{{ route('createBlogPost') }}" id="bannerForm" enctype="multipart/form-data" onsubmit="formatContent()">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" id="blogId" name="blogId" >

                                    <!-- Main Image Upload with Preview -->
                                    <div class="form-group text-center">
                                        <div class="mb-3">
                                            <img id="eventImage"  alt="Main Image" class="img-fluid border rounded shadow-sm" style="max-width: 100%; height: auto;">
                                        </div>
                                        <input type="file" class="form-control-file" id="imageUpload" name="imageUpload" accept="image/*">
                                    </div>

                                    <!-- Additional Images -->
                                    <div class="form-group">
                                        <label for="otherImages">Additional Images</label>
                                        <div class="mb-3">

                                        </div>
                                        <input type="file" class="form-control-file" id="otherImages" name="other_images[]" accept="image/*" multiple>
                                        <small class="form-text text-muted">Upload additional images for the blog post.</small>
                                    </div>

                                    <!-- Title Field -->
                                    <div class="form-group">
                                        <label for="eventName">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter blog title"  required>
                                    </div>

                                    <!-- Content Field -->
                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea class="form-control quill-editor-default" id="content" name="content" rows="5" placeholder="Enter blog content" required></textarea>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Create Blog Post</button>
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
<script>
    // Preview for the main image
    document.getElementById('imageUpload').addEventListener('change', function(event) {
        const imagePreview = document.getElementById('eventImage');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    // Preview for additional images
    document.getElementById('otherImages').addEventListener('change', function(event) {
        const previewContainer = document.querySelector('#otherImages').previousElementSibling;
        previewContainer.innerHTML = ''; // Clear previous previews

        Array.from(event.target.files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid border rounded shadow-sm m-1';
                img.style.maxWidth = '100px';
                img.style.height = 'auto';
                previewContainer.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    });
</script>
</html>