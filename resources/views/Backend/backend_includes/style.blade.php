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
            margin-left: 0;
            transition: margin-left 0.3s ease;
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
        .card-summary {
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
    </style>