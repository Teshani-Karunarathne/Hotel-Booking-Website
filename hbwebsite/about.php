<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tidal Lodge - ABOUT</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require('links.php');?>
  <style>
    .box{
      border-top-color: var(--teal) !important;
    }
  </style>
</head>
<body class="bg-light">
<!--header-->

<?php require('header.php');?>
<!--header-->
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    At Tidal Lodge, we offer a serene beachfront escape with personalized service, elegant rooms, and exceptional amenities. Our team is dedicated to creating memorable stays, inviting you to relax, recharge, and enjoy coastal comfort at its best.
    </p>
  </div>
  
  <div class="container my-5">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 mb-4">
            <img src="images/about/about.jpg" class="img-fluid" alt="Tidal Lodge">
        </div>
        <div class="col-lg-6 col-md-6 mb-4">
            <h3 class="mb-3">Mission</h3>
            <p>
                Our mission at Tidal Lodge is to provide a welcoming sanctuary where guests experience the perfect blend of comfort, hospitality, and natural beauty. We aim to create memorable, meaningful stays through exceptional service, sustainable practices, and a dedication to exceeding expectations.
            </p>
            <h3 class="mb-3">Vision</h3>
            <p>
                To be the premier destination in Weligama, providing an unparalleled experience that harmoniously blends luxury, comfort, and the natural beauty of the coastal environment. We aim to create lasting memories for our guests through exceptional service, sustainable practices, and a welcoming atmosphere, ensuring that every stay at Tidal Lodge is not just a visit, but a cherished experience.
            </p>
        </div>
    </div>
</div>
  

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/hotel.svg" width="70px">
          <h4 class="mt-3">100+ ROOMS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/customers.svg" width="70px">
          <h4 class="mt-3">200+ CUSTOMERS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/rating.svg" width="70px">
          <h4 class="mt-3">150+ REVIEWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/staff.svg" width="70px">
          <h4 class="mt-3">200+ STAFFS</h4>
        </div>
      </div>
    </div>
  </div>

  <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
  <div class="container mt-5">
    <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
          <img src="images/team/1.jpg" width="300px">
          <h5 class="mt-3 text-center">Manager</h5>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
          <img src="images/team/2.jpg" width="300px">
          <h5 class="mt-3 text-center">Finance Manager</h5>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
      <img src="images/team/3.JPEG" width="300px" height="200px">
      <h5 class="mt-3 text-center">Technical Team</h5>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
      <img src="images/team/4.jpg" width="300px">
      <h5 class="mt-3 text-center">HR Department</h5>
      </div>
    </div>
  </div>


  <div class="container px-4">
    
    </div>
  </div>
<!--Footer-->
<?php require('footer.php');?>
<!--Footer-->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  

  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>


</body>
</html>