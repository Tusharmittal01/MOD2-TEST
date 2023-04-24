<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./login.php">User Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./register.php">Register</a>
                </li>
            </ul>
        </div>
    </nav><br>
    <!-- Floating Instruction -->
    <span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM </marquee></span>
    <div class="row">
        <!-- Main Container -->
        <div class="col-md-4" id="side_bar">
            <h5>Library Timing</h5>
            <ul>
                <li>Opening Timing: 8:00 AM</li>
                <li>Closing Timing: 8:00 PM</li>
                <li>(Sunday off)</li>
            </ul>
        </div>
        <div class="col-md-8" id="main_content">
            <center><h3>User Registration Form</h3></center>
            <form action="/Login/register" method="POST">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Email ID: </label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Password: </label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Mobile Number: </label>
                    <input type="text" name="mobile" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Address:</label>
                    <textarea rows="3" cols="40" class="form-control" name="address"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</body>
</html>