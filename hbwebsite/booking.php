<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tidal Lodge - BOOK NOW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    
    <?php require('links.php');?>
    <style>
        .pop:hover {
            border-top-color: var(--teal)!important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
</head>
<!--header-->
<body class="bg-light">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid px-lg-4 mt-4">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Tidal Lodge<br><span class="h-font fw-bold fs-5">Weligama</span></a>        
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active me-2" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item me-2"><a class="nav-link" href="rooms.php">Rooms</a></li>
                    <li class="nav-item me-2"><a class="nav-link" href="facilities.php">Facilities</a></li>
                    <li class="nav-item me-2"><a class="nav-link" href="contact.php">Contact us</a></li>
                    <li class="nav-item me-2"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item me-2"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item me-2"><a class="nav-link" href="booking.php">Book Now</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!--header-->

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">BOOK NOW</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-4">Welcome to Tidal Lodge - Weligama, where comfort meets convenience. Whether for business or leisure, we offer an exceptional stay.</p>
    </div>  

    <!-- Booking Form -->
    <div class="container my-4">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstName" class="form-label mb-2">First Name</label>
                    <input type="text" id="firstName" name="fName" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label mb-2">Last Name</label>
                    <input type="text" id="lastName" name="lName" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="emailAddress" class="form-label mb-2 mt-3">Email Address</label>
                    <input type="email" id="emailAddress" name="email" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="contactNumber" class="form-label mb-2 mt-3">Contact Number</label>
                    <input type="number" id="contactNumber" name="contactNo" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label mb-2 mt-3">Address</label>
                    <input type="text" id="address" name="address" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="id" class="form-label mb-2 mt-3">Scan Copy of ID (NIC/ Driving License/ Passport)</label>
                    <input type="file" id="id" name="scanCopy" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="checkin" class="form-label mb-2 mt-3">Check-in Date</label>
                    <input type="date" id="checkin" name="checkIn" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="checkout" class="form-label mb-2 mt-3">Check-out Date</label>
                    <input type="date" id="checkout" name="checkOut" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="adults" class="form-label mb-2">Adults</label>
                    <input type="number" id="adults" name="adults" class="form-control" min="1" required>
                </div>
                <div class="col-md-6">
                    <label for="children" class="form-label mb-2">Children</label>
                    <input type="number" id="children" name="children" class="form-control" min="0">
                </div>
                <div class="col-12">
                    <label for="room-type" class="form-label mb-2 mt-3">Room Type</label>
                    <select id="room-type" name="roomType" class="form-control" required>
                        <option value="">Select Room Type</option>
                        <option value="Guest Room">Guest Room</option>
                        <option value="Guest Room - Ocean View">Guest Room - Ocean View</option>
                        <option value="Guest Room - Garden View">Guest Room - Garden View</option>
                        <option value="Guest Room - Superior Ocean View">Guest Room - Superior Ocean View</option>
                        <option value="Suite - Garden View">Suite - Garden View</option>
                        <option value="Suite - Superior Ocean View">Suite - Superior Ocean View</option>
                        <option value="Presidential Suite">Presidential Suite</option>
                    </select>
                </div>
            </div>
            <p class="text-center mt-4 text-muted font-weight-bold">Once you confirm your booking, our team will contact you shortly to finalize details and assist with special requests.</p>
            <div class="text-center">
                <button type="submit" name="send" class="btn btn-sm w-10 text-white" style="background-color: #4ee6bc;">Confirm Booking</button>
            </div>
        </form>
    </div>

    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'hbwebsite');

    if (isset($_POST['send'])) {
        $fName = $_POST["fName"];
        $lName = $_POST["lName"];
        $email = $_POST["email"];
        $contactNo = $_POST["contactNo"];
        $address = $_POST["address"];
        $checkIn = $_POST["checkIn"];
        $checkOut = $_POST["checkOut"];
        $adults = $_POST["adults"];
        $children = $_POST["children"];
        $roomType = $_POST["roomType"];
        
       
        $scanCopy = addslashes(file_get_contents($_FILES["scanCopy"]["tmp_name"]));

        $sql = "INSERT INTO `book` (`fName`, `lName`, `email`, `contactNo`, `address`, `scanCopy`, `checkIn`, `checkOut`, `adults`, `children`, `roomType`) 
                VALUES ('$fName', '$lName', '$email', '$contactNo', '$address', '$scanCopy', '$checkIn', '$checkOut', '$adults', '$children', '$roomType')";

        if (mysqli_query($connection, $sql)) {
            echo "<script>alert('Booking successful!');</script>";
        } else {
            echo "<script>alert('Server Down! Try again later');</script>";
        }

        mysqli_close($connection);
    }
    ?>

    
</body>
</html>
