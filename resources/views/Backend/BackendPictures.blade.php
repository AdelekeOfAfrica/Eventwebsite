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
        <div class="d-flex justify-content-end mb-2">
            <button class="btn btn-primary" id="createBannerBtn"  data-toggle="modal" data-target="#createBannerModal">Create New Entry</button>
        </div>
            <table id="bannerTable" class="table bannerTable table-bordered table-striped table-hover mt-6">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
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
        </div>
    </section>
</div>
@include('Backend.sidebar')
<script>
    $(document).ready(function() {
        $('#eventsTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('BackendPictures') }}",
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
                            <button class="btn btn-primary view-button" data-id="${row.id}" data-toggle="modal" data-target="#eventModal">View</button>

                        `;
                    }
                }
            ] 
        });

        $('#eventsTable').on('click', '.view-button', function() {
        const eventId = $(this).data('id');
    
            $.ajax({
                url: `/events/${eventId}`, 
                type: 'GET',
                success: function(event) {
                
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
</body>
@include('Backend.backend_includes.js')
</html>