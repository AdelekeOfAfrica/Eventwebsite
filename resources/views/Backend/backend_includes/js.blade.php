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


