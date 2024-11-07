<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tidal Lodge - CONTACT US</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require('links.php');?>
    
    <style>
        .pop:hover{
            border-top-color:var(--teal)!important;
            transform:scale(1.03);
            transition:all 0.3s;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-light">
<!--header-->

<?php require('header.php');?>
    </nav>
<!--header-->


 <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-4">We're here to assist you with any questions or bookings. Reach out to Tidal Lodge for inquiries about room availability, special offers, or event planning.<br> Our friendly team is ready to help you make your stay unforgettable. <br>Contact us by phone, email, or fill out the form below, and we'll get back to you promptly. <br>We look forward to welcoming you!</p>
</div>  
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb- px-4">
            <div class="bg-white rounded shadow p-4">
            <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d176192.05063451425!2d80.44284997906409!3d5.959410250227563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae115377cc3eaf9%3A0x2463154f2d989243!2sWeligama!5e0!3m2!1sen!2slk!4v1722861867885!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <h5>Address</h5>
            <a href="https://maps.app.goo.gl/pC7JxEncgNtVUbAJ7" target="_blank" class="d-inline-block text-decoration-none text-dark">  
            <i class="bi bi-geo-alt"></i> Tidal Lodge, Matara Road, Weligama.</a>  
            <h5 class="mt-4">Call Us</h5>
                    <a href="tel: +94412254753" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill me-2"></i>+94412254753</a>
                    <br>
                    <a href="tel: +94412254753" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill me-2"></i>+94412254754</a>
                    <br>
                    <a href="tel: +94412254753" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone me-2"></i>+94711011055</a>
            <h5 class="mt-4">Email</h5>
            <a href="mailto:hoteltidal@gmail.com" class="d-inline-block text-decoration-none text-dark mb-2">  
            <i class="bi bi-envelope-fill"></i> hoteltidal@gmail.com</a>  
            <h5 class="mt-4">Follow Us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                    <i class="bi bi-twitter me-1"></i>
                    </a>
                    
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                       
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    
                    <a href="#" class="d-inline-block text-dark fs-5">
                        
                        <i class="bi bi-instagram me-1"></i>
                    </a>
        </div>
        <br>
        </div>
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
                <form id="contactForm" method="POST">
                    <h5>Send a message</h5>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Name</label>
                        <input name="name" required type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">E-mail</label>
                        <input name="email" required type="email" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Telephone Number</label>
                        <input name="telephoneNo" required type="number" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Message</label>
                        <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                    </div>
                    <button type="submit"name="send" class="btn text-white custom-bg mt-3">SEND</button>
                </form>
            </div>
        </div>

    </div>
</div> 
<!--Footer-->
<?php require('footer.php');?>
<!--Footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   

<?php
$connection = mysqli_connect('localhost', 'root', '', 'hbwebsite');

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $telephoneNo = $_POST["telephoneNo"];
    $message = $_POST["message"];

  
    if (empty($name) || empty($email) || empty($telephoneNo) || empty($message)) {
        echo "<script>alert('Please fill in all fields.');</script>";
    } else {
        
        $stmt = $connection->prepare("INSERT INTO contact (name, email, telephoneNo, message) VALUES (?, ?, ?, ?)");

        if ($stmt) {
            
            $stmt->bind_param("ssss", $name, $email, $telephoneNo, $message);

          
            if ($stmt->execute()) {
                echo "<script>alert('Message sent successfully!');</script>";
            } else {
                echo "<script>alert('Error: Could not save data.');</script>";
            }

           
            $stmt->close();
        } else {
            echo "<script>alert('Prepare failed: " . $connection->error . "');</script>";
        }
    }

   
    mysqli_close($connection);
}
?>



</body>
</html>
