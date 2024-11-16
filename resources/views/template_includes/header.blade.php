   <!-- Header Area wrapper Starts -->
   <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="assets/img/sample.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item active">
                <a class="nav-link" href="/">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#eventHighlight">
                   Highlight
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">
                Gallery
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonial">
                  Testimonials
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sponsors">
                  Sponsors
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#blog">
                  Blogs
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/login">
                  Login
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a class="page-scrool" href="/">Home</a>
          </li>
          <li>
            <a class="page-scrool" href="#about">About</a>
          </li>
          <li>
             <a class="page-scroll" href="#schedules">schedules</a>
          </li>
          <li>
            <a class="page-scroll" href="#team">Speakers</a>
          </li>
          <li>
            <a class="page-scroll" href="#gallery">Gallery</a>
          </li>
          <li>
            <a class="page-scroll" href="#faq">Faq</a>
          </li>
          <li>
            <a class="page-scroll" href="#sponsors">Sponsors</a>
          </li>
          <li>
            <a class="page-scroll" href="#pricing">pricing</a>
          </li>
          <li>
            <a class="page-scroll" href="#google-map-area">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->

      <!-- Main Carousel Section Start -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
    
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slider/4.png" alt="Third slide">
            <div class="overlay"></div>
            
        </div>
   <!-- </div> -->

   <div class="carousel-inner">
   @foreach($banners as $key => $banner)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <img class="d-block w-100" src="{{ asset($banner->image_path) }}" alt="Slide {{ $key + 1 }}">
            <div class="overlay"></div>
            <div class="carousel-caption d-md-block">
                <p class="fadeInUp wow" data-wow-delay=".6s">{{ $banner->description }}</p>
                <h1 class="wow fadeInDown heading" data-wow-delay=".4s">{{ $banner->title }}</h1>
                <a href="#" class="fadeInLeft wow btn btn-common btn-lg" data-wow-delay=".6s" data-toggle="modal" data-target="#eventModal">Book us for an event</a>
               
            </div>
        </div>
    @endforeach

  <!-- modal for book an event  -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- Modal header -->
      <div class="modal-header btn-common">
        <h5 class="modal-title " id="eventModalLabel" style="color:white;">Book an Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <!-- Modal body (Form for event booking) -->
      <div class="modal-body">
      <div id="errorMessages" class="alert alert-danger" style="display: none;"></div>
        <form id="eventBookingForm">
          <div class="form-group">
            <label for="eventName">Name</label>
            <input type="text" class="form-control" id="eventName" placeholder="Enter your name" required>
          </div>

          <div class="form-group">
            <label for="phoneNumber">phone Number</label>
            <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your phone number " required>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
          </div>

          <div class="form-group">
            <label for="eventType">Event Type</label>
            <select class="form-control" id="eventType" required>
              <option value="" disabled selected>Select event type</option>
              <option value="Wedding">Wedding</option>
              <option value="Corporate Event">Corporate Event</option>
              <option value="Birthday Party">Birthday Party</option>
              <option value="Concert">Concert</option>
              <option value="Conference">Conference</option>
              <option value="Exhibition">Exhibition</option>
            </select>
          </div>

          <div class="form-group">
            <label for="eventDate">Date</label>
            <input type="date" class="form-control" id="eventDate" required>
          </div>

          <div class="form-group">
            <label for="eventLocation">Location</label>
            <input type="text" class="form-control" id="eventLocation" placeholder="Enter event location" required>
          </div>

          <div class="form-group">
            <label for="eventCapacity">Capacity</label>
            <input type="number" class="form-control" id="eventCapacity" placeholder="Enter expected capacity" required>
          </div>

          <div class="form-group">
            <label for="eventPrice">Expected Budget</label>
            <input type="number" class="form-control" id="eventPrice" placeholder="Enter event price" required>
          </div>
          
          <!-- Submit button inside the form -->
          <button type="submit" class="btn btn-common btn-lg btn-block">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end of modal -->
<script>
  new WOW().init(); // Initialize WOW.js
</script>
</div>

    <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
        <span class="sr-only">Next</span>
    </a>
</div>
    <style>

    .carousel-item {
        position: relative; /* Ensures overlay is positioned relative to the carousel item */
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity (0.5) as needed */
        z-index: 1; /* Ensures the overlay is above the image but below the text */
    }

    #successModal .modal-content {
    border-radius: 10px;
    padding: 20px;
    background-color: #f9f9f9;
}

#successModal h4 {
    font-weight: bold;
    color: #28a745;
}

#successModal img {
    border-radius: 50%;
    border: 2px solid #28a745;
}

    </style>
      <!-- Main Carousel Section End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Modal structure remains the same, including the form fields -->
@include('template_includes.js')


<script>
$(document).ready(function() {
    // Capture form submission
    $('#eventBookingForm').on('submit', function(e) {
        e.preventDefault();

        // Clear previous error messages
        $('#errorMessages').html('').hide();

        // Gather form data
        const formData = {
            name: $('#eventName').val(),
            phone_number: $('#phoneNumber').val(),
            email: $('#email').val(),
            event_type: $('#eventType').val(),
            date: $('#eventDate').val(),
            location: $('#eventLocation').val(),
            capacity: $('#eventCapacity').val(),
            price: $('#eventPrice').val(),
            _token: '{{ csrf_token() }}' // CSRF token for security
        };

        // Send data via AJAX
        $.ajax({
            url: '{{ route("events.create") }}', // Laravel route for form submission
            type: 'POST',
            data: formData,
            success: function(response) {
                if(response.success) {
                    // Show success message and reset the form
                    alert('Event booked successfully, we will get back to you via phone call or email!');
                    $('#eventModal').modal('hide');
                    $('#eventBookingForm')[0].reset(); // Reset form fields
                }
            },
            error: function(xhr, status, error) {
                // Handle validation errors (status 422)
                if(xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    let errorMessages = '<ul>';
                    $.each(errors, function(key, value) {
                        errorMessages += '<li>' + value[0] + '</li>'; // Get the first error for each field
                    });
                    errorMessages += '</ul>';

                    // Display error messages in the modal
                    $('#errorMessages').html(errorMessages).show();
                }
            }
        });
    });
});
</script>
