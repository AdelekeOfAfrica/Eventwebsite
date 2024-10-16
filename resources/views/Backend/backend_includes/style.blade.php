<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <title>Event Tommy</title>
    <style>
        .navbar {
            background-color: #007bff; /* Bright blue background color for navbar */
        }
    
        .nav-link {
            color: #fff; /* Text color */
            margin-right: 20px; /* Spacing between links */
        }
    
        .nav-link:hover {
            color: #ffcc00; /* Yellow hover color */
        }
    
        /* Sidebar styles */
        #sidebar {
            position: fixed;
            top: 0;
            left: -250px; /* Initially hidden */
            width: 250px;
            height: 100%;
            background-color: #0056b3; /* Darker blue background */
            transition: left 0.3s ease;
            z-index: 1000;
        }
    
        #sidebar.active {
            left: 0; /* Show sidebar */
        }
    
        #sidebar .nav-link {
            color: #fff; /* Sidebar text color */
        }
    
        #sidebar .nav-link:hover {
            background-color: #007bff; /* Lighter blue on hover */
        }
    
        /* Content margin */
        .content {
            width: 80%; /* Adjust this value as needed to control the width */
            max-width: 100%;
            margin: 0 auto;
            transition: margin-left 0.3s ease;
             /* Centers the div horizontally */
             background-color: white;
             padding:20px;
        }
    
        .content.active {
            margin-left: 250px; /* Space for the sidebar */
        }
    
        /* Center table */
        .table-container {
            margin: 30px auto;
            max-width: 800px; /* Maximum width for the table */
            transition: margin-left 0.3s ease;
        }
    
        /* Card styles */
        .card-summary-dashboard {
            margin: 20px 0; /* Spacing between cards */
        }
    
        /* Card background and text color */
        .card {
            background-color: #007bff; /* Blue background for cards */
            color: white; /* White text for cards */
        }
    
        /* Mobile Styles */
        @media (max-width: 768px) {
            #sidebar {
                width: 200px; /* Adjust sidebar width for mobile */
            }
    
            .content.active {
                margin-left: 0; /* Full width on mobile when sidebar is active */
            }
    
            .table-container {
                width: 100%; /* Full width for table on mobile */
                padding: 0 15px; /* Add padding on sides */
            }
        }

        .card-summary {
            flex: 1; /* This allows cards to take up equal space */
            margin: 10px; /* Optional: Space between cards */
        }

        .modalban .modal-content {
    border-radius: 0.5rem;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.modalban .modal-header {
    border-bottom: none; /* Remove bottom border */
}

.modalban .modal-body {
    padding: 2rem; /* Increase padding for a more spacious look */
}

.modalban .form-control, .modalban .form-control-file {
    border-radius: 0.25rem; /* Rounded edges for inputs */
}

.modalban .btn-primary, .modalban .btn-success {
    border-radius: 0.25rem; /* Rounded edges for buttons */
    transition: background-color 0.3s, color 0.3s; /* Smooth transition for hover effects */
}

.modalban .btn-primary:hover, .modalban .btn-success:hover {
    background-color: #0056b3; /* Darker blue on hover for primary button */
    color: #fff; /* Keep text color white on hover */
}


/* Apply specific styles only to tables with the bannerTable class */
.bannerTable {
    border: 1px solid #dee2e6;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.bannerTable th {
    background-color: #343a40; /* Dark header background */
    color: #ffffff; /* White text for the headers */
    padding: 12px;
    text-align: center;
}

.bannerTable td {
    padding: 12px;
    text-align: center;
    vertical-align: middle;
}

.bannerTable tbody tr:hover {
    background-color: #f1f1f1; /* Hover effect on rows */
}

.bannerTable .btn {
    border-radius: 5px;
    padding: 6px 12px;
}

@media (max-width: 767px) {
    /* Stack table headers for smaller devices */
    .bannerTable {
        border: none;
        width: 100%;
    }

    .bannerTable th, .bannerTable td {
        display: block;
        width: 100%;
        text-align: left;
    }

    .bannerTable th {
        display: none; /* Hide the headers for mobile */
    }

    .bannerTable td {
        position: relative;
        padding-left: 50%;
        padding-right: 10px;
        margin-bottom: 12px;
        border-bottom: 1px solid #dee2e6;
    }

    .bannerTable td:before {
        content: attr(data-label); /* Use the data-label attribute for responsiveness */
        position: absolute;
        left: 15px;
        top: 12px;
        font-weight: bold;
        color: #343a40;
    }
}


    </style>