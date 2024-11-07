<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tidal Lodge - HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="icon" type="image/x-icon" href="fav.JPEG">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <style>
  

  </style>
</head>
<body class="bg-light">

<!-- Header -->
<?php require('header.php');?>

<!-- Main Content -->
<div class="container-fluid px-lg-4 mt-4">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/7.PNG" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/8.PNG" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/9.PNG" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/10.PNG" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/11.PNG" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/6.PNG" class="w-100 d-block">
      </div>
    </div>
  </div>
</div>
<!-- Our Rooms -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
<div class="container">
    <div class="row">
        <!-- Room 1 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="room-card card border-0 shadow">
                <img src="images/rooms/1.WEBP" class="img-fluid rounded-top" style="height: 200px; object-fit: cover;">
                <div class="card-body" style="min-height: 200px;">
                    <h5 class="card-title">Guest Room</h5>
                    <p class="card-text">Features: 1 King Bed | Marble Bathroom | Outdoor Area</p>
                    <p class="card-text">Facilities: High-Speed Wi-Fi | Electrical Outlet | Coffee/Tea Maker | Mini Fridge</p>
                    <p class="card-text">Adults: 2 | Children: 1</p>
                    <h6 class="mb-3">$225 per night</h6>
                    <a href="booking.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Room 6 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="room-card card border-0 shadow">
                <img src="images/rooms/11.png" class="img-fluid rounded-top" style="height: 200px; object-fit: cover;">
                <div class="card-body" style="min-height: 200px;">
                    <h5 class="card-title">Suite - Superior Ocean View</h5>
                    <p class="card-text">Features: 2 Queen Beds | Separate Bathtub and Shower | Connecting Rooms</p>
                    <p class="card-text">Facilities: High-Speed Wi-Fi | Electrical Outlet | Coffee/Tea Maker | Mini Fridge</p>
                    <p class="card-text">Adults: 2 | Children: 2</p>
                    <h6 class="mb-3">$575 per night</h6>
                    <a href="booking.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Room 7 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="room-card card border-0 shadow">
                <img src="images/rooms/3.avif" class="img-fluid rounded-top" style="height: 200px; object-fit: cover;">
                <div class="card-body" style="min-height: 200px;">
                    <h5 class="card-title">Presidential Suite</h5>
                    <p class="card-text">Features: 1 King Bed | Separate Bathtub and Shower | Connecting Room</p>
                    <p class="card-text">Facilities: High-Speed Wi-Fi | Electrical Outlet | Coffee/Tea Maker | Mini Fridge | Living Area</p>
                    <p class="card-text">Adults: 4 | Children: 2</p>
                    <h6 class="mb-3">$975 per night</h6>
                    <a href="booking.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
          <a href="rooms.php" class="btn btn-sm text-white border-0" style="background-color: black;">More Details >></a>
    </div>
</div>
<!--facility-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">FACILITIES</h2>
<div class="container-fluid px-lg-4 mt-4">
    
    <div class="row g-4">
        <!-- Facility Card 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
            <i class="bi bi-router-fill" style="font-size: 4rem;"></i> 
                <h5 class="mt-3">Free Wi-Fi</h5>
                <p>Stay connected with our complimentary high-speed Wi-Fi available throughout the hotel.</p>
            </div>
        </div>

        <!-- Facility Card 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
              <i class="bi bi-cup-hot-fill" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Restaurant & Bar</h5>
                <p>Enjoy a variety of local and international cuisine at our on-site restaurant and bar.</p>
            </div>
        </div>

        <!-- Facility Card 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
              <i class="bi bi-water" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Swimming Pool</h5>
                <p>Relax and unwind in our luxurious outdoor swimming pool with poolside service.</p>
            </div>
        </div>
        <div class="text-center">
          <a href="facilities.php" class="btn btn-sm text-white border-0" style="background-color: black;">More Details >></a>
    </div>
  </div>
</div>  

<!-- Reach us -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d176192.05063451425!2d80.44284997906409!3d5.959410250227563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae115377cc3eaf9%3A0x2463154f2d989243!2sWeligama!5e0!3m2!1sen!2slk!4v1722861867885!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel: +94412253447" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +94412253447
        </a>
        <br>
        <a href="tel: +94412254447" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +94412254447
        </a>
        <br>
        
      </div>
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow us</h5>
           <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2"> 
          <i class="bi bi-facebook me-2"></i> Facebook
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2"> 
          <i class="bi bi-instagram me-2"></i> Instagram
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block">
          <span class="badge bg-light text-dark fs-6 p-2"> 
          <i class="bi bi-twitter me-2"></i> Twitter
          </span>
        </a>
      </div>
      
    </div>
    <div class="text-center mt-4">
          <a href="contact.php" class="btn btn-sm text-white border-0" style="background-color: black;">More Details >></a>
    </div>
  </div>
</div>

<!-- Footer -->
<div class="container-fluid bg-white mt-5 footer">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2">Tidal Lodge<br><span class="h-font fw-bold fs-5">Weligama</span></h3>
      <p>Located in Weligama, Tidal Lodge is your perfect getaway, blending comfort with coastal charm. Reach us at <b>hoteltidal@gmail.com</b> or call <b>+94412254753</b> for inquiries. Follow us on social media to stay connected!</p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
      <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
      <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
      <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
      <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
      <a href="gallery.php" class="d-inline-block mb-2 text-dark text-decoration-none">Gallery</a>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow us</h5>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-facebook me-1"></i> Facebook
      </a><br>
      <a href="#" class="d-inline-block text-dark text-decoration-none">
        <i class="bi bi-instagram me-1"></i> Instagram
      </a><br>
      <a href="#" class="d-inline-block text-dark text-decoration-none">
        <i class="bi bi-twitter"></i> Twitter
      </a>
    </div>
  </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by HBWDevops</h6>

<!-- Scripts -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    }
  });
</script>

</body>
</html>
