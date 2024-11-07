<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tidal Lodge - FACILITIES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <?php require('links.php');?>
  <style>
    .pop:hover{
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
</head>
<body class="bg-light">
<!--header-->
<?php require('header.php');?>
<!--header-->

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">FACILITIES</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    Tidal Lodge offers a serene seaside escape with luxurious amenities, including elegantly designed rooms, an on-site restaurant featuring fresh local cuisine, and a relaxing spa for rejuvenation. Guests can unwind by the outdoor pool, enjoy direct beach access, or explore local attractions with help from our dedicated concierge. Ideal for intimate gatherings and events, Tidal Lodge provides versatile event spaces and personalized planning services. With a blend of relaxation and adventure options, Tidal Lodge is the perfect retreat for unforgettable stays by the coast.
    </p>
  </div>
  <div class="container my-5">
    
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

        <!-- Facility Card 4 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
              <i class="bi bi-heart-pulse-fill" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Spa & Wellness</h5>
                <p>Revitalize with a range of spa treatments, massages, and wellness therapies.</p>
            </div>
        </div>

        <!-- Facility Card 5 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
                <<i class="bi bi-car-front-fill" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Free Parking</h5>
                <p>Convenient on-site parking is available at no extra cost for all guests.</p>
            </div>
        </div>

        <!-- Facility Card 6 -->
        <div class="col-lg-4 col-md-6">
            <div class="facility-card p-4 text-center">
                <i class="bi bi-hdd-rack facility-icon" style="font-size: 4rem;"></i>
                <h5 class="mt-3">Business Center</h5>
                <p>Access our fully equipped business center for meetings, presentations, and work needs.</p>
            </div>
        </div>
    </div>
</div>

  



<!--Footer-->
<?php require('footer.php');?>
<!--Footer-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>