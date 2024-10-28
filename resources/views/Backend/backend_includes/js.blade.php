{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Toggle sidebar
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content');

        toggleSidebar.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            content.classList.toggle('active');
        });
    </script>

    <script>
    $(document).ready(function() {
        $('#eventsTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('events.fetch') }}",
                type: 'GET'
            },
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'event_type' },
                { data: 'event_date' },
                { data: 'location' },
                { data: 'capacity' },
                { data: 'price' },
                {
                    data: null,
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                            <button class="btn btn-primary view-button-event" data-id="${row.id}" data-toggle="modal" data-target="#eventModal">View</button>

                        `;
                    }
                }
            ] 
        });

        $('#eventsTable').on('click', '.view-button-event', function() {
        const eventId = $(this).data('id');

    
            $.ajax({
                url: "{{ route('eventDetail', ['eventId' => ':eventId']) }}".replace(':eventId', eventId), 
                type: 'GET',
                success: function(event) {
                    $('#eventId').text(event.id);
                    $('#eventName').text(event.name);
                    $('#eventDescription').text(event.event_type);
                    $('#eventDate').text(event.event_date);
                    $('#eventLocation').text(event.location);
                    $('#eventCapacity').text(event.capacity);
                    $('#eventPrice').text(event.price);
                },
                error: function() {
                    alert('Error fetching event details.');
                }
            });
        });

    });
    </script>
<!-- End of event table -->


<script>

function toggleStatus(id, status) {
    $.ajax({
        url: `/banners/${id}/status`, // Use the route you defined
        type: 'PUT',
        data: {
            status: status,
            _token: '{{ csrf_token() }}' // Include CSRF token for security
        },
        success: function(response) {
            // Refresh the DataTable to reflect the changes
            $('#bannerTable').DataTable().ajax.reload();
            alert(response.message);
        },
        error: function(xhr) {
            alert('Error: ' + xhr.responseJSON.error);
        }
    });
}

$(document).ready(function() {
    
    $('#bannerTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('banners.fetch') }}",
            type: 'GET'
        },
        columns: [
            { data: 'id' },
            {
                data: 'image_path',
                render: function(data, type, row) {
                    // Display the image with the correct path
                    return `<img src="${data}" alt="Banner Image" class="img-fluid" style="max-width: 100px;" />`;
                },},
            { data: 'statusLabel' },
            { data: 'name' },
            { data: 'description' },
            {
                data: null,
                orderable: false,
                searchable: false,
                render: function(data, type, row) {
                    const statusButton = row.status 
    ? `<div style="margin: 0; padding: 0; display: inline-block;">
          <button class="btn btn-danger text-white" onclick="toggleStatus(${row.id}, 0)">
            Deactivate
          </button>
       </div>`
    : `<div style="margin: 0; padding: 0; display: inline-block;">
          <button class="btn btn-success text-white" onclick="toggleStatus(${row.id}, 1)">
            Activate
          </button>
       </div>`;

    return `
        ${statusButton}
        <button class="btn btn-primary view-button" data-id="${row.id}" data-toggle="modal" data-target="#bannerModal">
            View
        </button>
    `;
}

            }
        ],
        createdRow: function(row, data) {
            if (data.status === 0) {
                $(row).addClass('table-danger'); // Red background for inactive banners
            }
        }
    });

    $(document).on('click', '.view-button', function() {
        const bannerId = $(this).data('id');

        // Fetch the banner details
        $.ajax({
            url: `/banners/${bannerId}`, // Your route to get the banner details
            type: 'GET',
            success: function(data) {
                // Populate the form fields in the modal
                $('#bannerId').val(data.id);
                $('#eventName').val(data.title);
                $('#eventDescription').val(data.description);
                $('#eventImage').attr('src', data.image_path); // Display the image in the modal
                
                // Show the modal
                $('#bannerModal').modal('show');
            },
            error: function(xhr) {
                alert('Error fetching banner details: ' + xhr.responseJSON.error);
            }
        });
    });
});
</script>

<!-- displaying images immediately -->
<script>
document.getElementById('BannerUpload').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            document.getElementById('createBannerImage').src = e.target.result;
        }
        
        reader.readAsDataURL(file);
    }
});
</script>

<!-- Pictures table section -->
<script>
    $(document).ready(function() {
    
    $('#pictureTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('fetchBackendPictures') }}",
            type: 'GET'
        },
        columns: [
            { data: 'id' },
            { data: 'name' },
            {
                data: 'image_path',
                render: function(data, type, row) {
                    // Display the image with the correct path
                    return `<img src="${data}" alt="Banner Image" class="img-fluid" style="max-width: 100px;" />`;
                },},
           
            {
                data: null,
                orderable: false,
                searchable: false,
                render: function(data, type, row) {
                   
    return `
      
        <button class="btn btn-primary view-button-picture" data-id="${row.id}" data-toggle="modal" data-target="#bannerModal">
            View
        </button>
    `;
}

            }
        ],
    
    });

    $(document).on('click', '.view-button-picture', function() {
        const pictureId = $(this).data('id');

        // Fetch the banner details
        $.ajax({
            url: `/backend-pictures/getBackendPicture/${pictureId}`, // Your route to get the banner details
            type: 'GET',
            success: function(data) {
                // Populate the form fields in the modal
                $('#bannerId').val(data.id);
                $('#eventName').val(data.name);
               
                $('#eventImage').attr('src', data.image_path); // Display the image in the modal
                
                // Show the modal
                $('#bannerModal').modal('show');
            },
            error: function(xhr) {
                alert('Error fetching banner details: ' + xhr.responseJSON.error);
            }
        });
    });
});
</script>
<!-- Modal for Image Upload -->
<div class="modal fade modalban" id="createEventPictureModal" tabindex="-1" role="dialog" aria-labelledby="EventPictureModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="eventPictureModalLabel">Create Event Picture</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for uploading the image -->
                <form method="post" action="{{route('updateBackendPictures')}}" id="eventPictureForm" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" id="eventName" name="eventTitle" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-lg btn-block btn-success" id="updateEventPicture">Update Event Picture</button>
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

<!-- JavaScript for Image Preview and Debugging -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
      

        const imageInput = document.getElementById('ImageUploadEvent');
        if (!imageInput) {
           
            return; 
        }

        imageInput.addEventListener('change', function(event) {
            console.log('Change event triggered'); 

            const file = event.target.files[0]; 
            if (file) {
                console.log('File selected:', file);

                const reader = new FileReader();

                reader.onload = function(e) {
                    console.log('FileReader onload triggered.'); 
                    console.log('Resulting Data URL:', e.target.result); 

                    const imgPreview = document.getElementById('singleEventPictureImage');
                    if (!imgPreview) {
                        console.error('Image preview element not found.');
                        return;
                    }

                    
                    imgPreview.src = e.target.result;
                  
                };

                reader.onerror = function(e) {
                   // Debug log for any errors while reading the file
                };

                reader.readAsDataURL(file); // Read the file as a data URL (base64)
                
            } else {
                console.warn('No file selected.'); // Debug warning if no file is selected
            }
        });
    });
</script>

<!-- script to get sponsors details  -->
<script>
    $(document).ready(function() {
    
    $('#sponsorTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('getAllSponsors') }}",
            type: 'GET'
        },
        columns: [
            { data: 'id' },
            { data: 'name' },
            {
                data: 'image_path',
                render: function(data, type, row) {
                    // Display the image with the correct path
                    return `<img src="${data}" alt="Banner Image" class="img-fluid" style="max-width: 100px;" />`;
                },},
           
            {
                data: null,
                orderable: false,
                searchable: false,
                render: function(data, type, row) {
                   
    return `
      
        <button class="btn btn-primary view-button-sponsor" data-id="${row.id}" data-toggle="modal" data-target="#bannerModal">
            View
        </button>
    `;
}

            }
        ],
    
    });

    $(document).on('click', '.view-button-sponsor', function() {
        const sponsorId = $(this).data('id');

        // Fetch the banner details
        $.ajax({
            url: `/backend/sponsor/${sponsorId}`, // Your route to get the banner details
            type: 'GET',
            success: function(data) {
                // Populate the form fields in the modal
                $('#bannerId').val(data.id);
                $('#eventName').val(data.name);
               
                $('#eventImage').attr('src', data.image_path); // Display the image in the modal
                
                // Show the modal
                $('#bannerModal').modal('show');
            },
            error: function(xhr) {
                alert('Error fetching banner details: ' + xhr.responseJSON.error);
            }
        });
    });
});
</script>

<!-- script to fetch all the tables  -->
<!-- script to get sponsors details  -->
<!-- <script>
    $(document).ready(function() {
    
    $('#CommentTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('Testimonials') }}",
            type: 'GET'
        },
        columns: [
            { data: 'id' },
            { data: 'name' },
            {data: 'comment' },
           
            {
                data: null,
                orderable: false,
                searchable: false,
                render: function(data, type, row) {
                   
    return `
      
        <button class="btn btn-danger delete-button-testimonial" data-id="${row.id}">
            Delete
        </button>
    `;
}

            }
        ],
    
    });

    $(document).on('click', '.delete-button-testimonial', function() {
        const testimonialId = $(this).data('id');
  

        // Fetch the banner details
        $.ajax({
            url: `/backend/delete-testimonials/${testimonialId}`, // Your route to get the banner details
            type: 'Delete',
            success: function(data) {
                // Populate the form fields in the modal
              
            },
            error: function(xhr) {
                alert('Error fetching banner details: ' + xhr.responseJSON.error);
            }
        });
    });
});
</script> -->

<script>
    $(document).ready(function() {
        $('#CommentTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('Testimonials') }}",
                type: 'GET'
            },
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'comment' },
                {
                    data: null,
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                            <button class="btn btn-danger delete-button-testimonial" data-id="${row.id}">
                                Delete
                            </button>
                        `;
                    }
                }
            ]
        });

        // Show confirmation modal on delete button click
        $(document).on('click', '.delete-button-testimonial', function() {
            const testimonialId = $(this).data('id');
            $('#deleteConfirmModal').data('id', testimonialId).modal('show');
        });

        // Handle delete confirmation button click
        $('#confirmDeleteButton').on('click', function() {
            const testimonialId = $('#deleteConfirmModal').data('id');
            $.ajax({
                url: `/backend/delete-testimonials/${testimonialId}`,
                type: 'DELETE',
                success: function(data) {
                    $('#deleteConfirmModal').modal('hide');
                    $('#CommentTable').DataTable().ajax.reload();
                    alert('Testimonial deleted successfully.');
                },
                error: function(xhr) {
                    $('#deleteConfirmModal').modal('hide');
                    alert('Error deleting testimonial: ' + xhr.responseJSON.error);
                }
            });
        });
    });
</script>




