<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style type="text/css">
        #side_bar{
            background-color: whitesmoke;
            padding: 50px;
            width: 300px;
            height: 450px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-1g navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Right Navigation Bar Part -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Library Management System (LMS)</a>
            </div>
            <!-- Left Navigation Bar Part -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Drop Down -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item">View Profile</a>
                    <a class="dropdown-item">Edit Profile</a>
                    <a class="dropdown-item">Change Password</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="">Logout</a></li>
            </ul>
        </div>
    </nav><br>
    <!-- Floating Instruction -->
    <span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM </marquee></span>
    
</body>
</html>