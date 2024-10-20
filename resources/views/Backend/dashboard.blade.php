<!DOCTYPE html>
<html lang="en">
<head>
 
@include('Backend.backend_includes.style')
    
</head>
<body>
  
@include('Backend.header')
@include('Backend.sidebar')
   

    <!-- Body Section -->
    <div id="content" class="content">
        <section class="section-padding" style="margin-top: 80px;"> <!-- Adjust margin here -->
            <div class="container mt-4"> <!-- Adjusted mt-8 to mt-4 -->
    
               

                <div class="row">
                    <div class="col-md-4 card-summary-dashboard">
                        <a href="/users" class="card text-center border-light shadow-sm hover-card" style="background-color: #007bff; color: white;">
                            <div class="card-body">
                                <i class="fas fa-blog fa-2x mb-3" style="color: white;"></i>
                                <h5 class="card-title">Blog Posts</h5>
                                <h2 class="card-text">10</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 card-summary-dashboard">
                        <a href="{{route('banners')}}" class="card text-center border-light shadow-sm hover-card" style="background-color: #007bff; color: white;">
                            <div class="card-body">
                                <i class="fas fa-calendar-check fa-2x mb-3" style="color: white;"></i>
                                <h5 class="card-title">Banners</h5>
                                <h2 class="card-text">5</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 card-summary-dashboard">
                        <a href="/users" class="card text-center border-light shadow-sm hover-card" style="background-color: #007bff; color: white;">
                            <div class="card-body">
                                <i class="fas fa-image fa-2x mb-3" style="color: white;"></i>
                                <h5 class="card-title">Pictures</h5>
                                <h2 class="card-text">20</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 card-summary-dashboard">
                        <a href="/users" class="card text-center border-light shadow-sm hover-card" style="background-color: #007bff; color: white;">
                            <div class="card-body">
                                <i class="fas fa-users fa-2x mb-3" style="color: white;"></i>
                                <h5 class="card-title">Users</h5>
                                <h2 class="card-text">100</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 card-summary-dashboard">
                        <a href="/users" class="card text-center border-light shadow-sm hover-card" style="background-color: #007bff; color: white;">
                            <div class="card-body">
                                <i class="fas fa-user-tie fa-2x mb-3" style="color: white;"></i>
                                <h5 class="card-title">Staff Profiles</h5>
                                <h2 class="card-text">8</h2>
                            </div>
                        </a>
                    </div>
                </div>
                
    
            {{-- end of cards --}}

            <h2>Event List</h2>
            <table id="eventsTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Event Type</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Capacity</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
               
                {{-- end of table  --}}

                <!-- Event Details Modal -->
                <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="eventModalLabel">Event Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <p><strong>id:</strong> <span id="eventId"></span></p>
                                <p><strong>Name:</strong> <span id="eventName"></span></p>
                                <p><strong>Event Type:</strong> <span id="eventDescription"></span></p>
                                <p><strong>Date:</strong> <span id="eventDate"></span></p>
                                <p><strong>Location:</strong> <span id="eventLocation"></span></p>
                                <p><strong>Capacity:</strong> <span id="eventCapacity"></span></p>
                                <p><strong>Price:</strong> <span id="eventPrice"></span></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end of modal  --}}
            </div>
        </section>
    </div>
    @include('Backend.backend_includes.js')

<!-- End of event table -->
</body>
</html>