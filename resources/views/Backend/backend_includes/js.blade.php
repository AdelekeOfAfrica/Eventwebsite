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
</html>
