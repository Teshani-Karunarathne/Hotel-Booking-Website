<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tidal Lodge - ROOMS</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require('links.php');?>
    <style>
        /* Custom styling */
        .filter-panel {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .clear-button {
            margin-top: 5px;
        }
        .room-cards .room-card {
            margin-bottom: 20px;
            display: flex;
        }

        .room-image {
            width: 10px; /* Set width of the image */
            border-radius: 8px;
            margin-left: 20px;
        }
    </style>
</head>

<body class="bg-light">
<!--header-->

<?php require('header.php');?>
<!--header-->



 <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ROOMS</h2>
    <div class="h-line bg-dark"></div>
</div> 
    <div class="container mt-5">
        <!-- Filter Panel -->
        <div class="filter-panel">
            <h5>Filter Rooms</h5>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="features">Features</label>
                    <select id="features" class="form-control">
                        <option value="">All Features</option>
                        <option value="Garden View">Garden View</option>
                        <option value="Ocean View">Ocean View</option>
                        <option value="Superior Ocean View">Superior Ocean View</option>
                        <option value="1 King Bed">1 King Bed</option>
                        <option value="2 Queen Beds">2 Queen Beds</option>
                        <option value="Marble Bathroom">Marble Bathroom</option>
                        <option value="Separate Bathtub and Shower">Separate Bathtub and Shower</option>
                        <option value="Connecting Rooms">Connecting Rooms</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="guestAdult">Adults</label>
                    <input type="number" class="form-control" id="guestAdult" min="0" placeholder="Number of Adults">
                </div>
                <div class="form-group col-md-4">
                    <label for="guestChildren">Children</label>
                    <input type="number" class="form-control" id="guestChildren" min="0" placeholder="Number of Children">
                </div>
            </div>
            <button class="btn mt-1" onclick="filterRooms()" style="background-color: #4ee6bc; color: white;">Filter</button>
            <button class="btn btn-secondary clear-button" onclick="clearFilters()">Clear Filters</button>
        </div>

        <!-- Room Cards -->
        <div class="room-cards">
            <!-- Room examples -->
            <!-- Room 1 -->
            <div class="room-card card mb-4 border-0 shadow" data-features="1 King Bed, Marble Bathroom" data-adults="2" data-children="1">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="images/rooms/1.WEBP" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Guest Room</h5>
                            <p class="card-text">Features: 1 King Bed | Marble Bathroom</p>
                            <p class="card-text">Facilities: High-Speed Wi-Fi | Electrical Outlet | Coffee/Tea Maker | Mini Fridge</p>
                            <p class="card-text">Adults: 2 | Children: 1</p>
                            <h6 class="mb-3">$225 per night</h6>
                            <a href="booking.php" class="btn btn-sm w-10 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Room 2 -->
            <div class="room-card card mb-4 border-0 shadow" data-features="Garden View,2 Queen Beds,Marble bathroom" data-adults="2" data-children="1">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/rooms/2.WEBP" class="img-fluid rounded-start" >
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Guest Room - Garden View</h5>
                            <p class="card-text">Features: Garden View | 2 Queen Beds | Marble Bathroom</p>
                            <p class="card-text">Facilities: High-Speed Wi-Fi | Electrical Outlet | Coffee/Tea Maker | Mini Fridge</p>
                            <p class="card-text">Adults: 2 | Children: 1</p>
                            <h6 class="mb-3">$275 per night</h6>
                            <a href="booking.php" class="btn btn-sm w-10 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
          <!-- Room 3 -->
          <div class="room-card card mb-4 border-0 shadow" data-features="1 King Bed, Ocean View, Marble Bathroom" data-adults="2" data-children="1">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/rooms/6.avif" class="img-fluid rounded-start" >
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Guest Room - Ocean View</h5>
                            <p class="card-text">Features: 1 King Bed | Marble Bathroom</p>
                            <p class="card-text">Facilities: High-Speed Wi-Fi | Electrical Outlet | Coffee/Tea Maker | Mini Fridge</p>
                            <p class="card-text">Adults: 2 | Children: 2</p>
                            <h6 class="mb-3">$345 per night</h6>
                            <a href="booking.php" class="btn btn-sm w-10 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

          <!-- Room 4 -->
          <div class="room-card card mb-4 border-0 shadow" data-features="1 King Bed,Superior Ocean View, Marble Bathroom,Connecting Rooms" data-adults="2" data-children="1">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="images/rooms/4.WEBP" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Guest Room - Superior Ocean View</h5>
                            <p class="card-text">Features: 1 King Bed | Marble Bathroom | Connecting Rooms</p>
                            <p class="card-text">Facilities: High-Speed Wi-Fi | Electrical Outlet | Coffee/Tea Maker | Mini Fridge</p>
                            <p class="card-text">Adults: 2 | Children: 2</p>
                            <h6 class="mb-3">$425 per night</h6>
                            <a href="booking.php" class="btn btn-sm w-10 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
          <!-- Room 5 -->
          <div class="room-card card mb-4 border-0 shadow" data-features="1 King Bed,Garden View, Marble Bathroom, Connecting Rooms" data-adults="2" data-children="1">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <<img src="images/rooms/5.webp" class="img-fluid rounded-start" >
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Suite - Garden View</h5>
                            <p class="card-text">Features: 1 King Bed | Garden View | Marble Bathroom | Connecting Rooms</p>
                            <p class="card-text">Facilities: High-Speed Wi-Fi | Electrical Outlet | Coffee/Tea Maker | Mini Fridge</p>
                            <p class="card-text">Adults: 3 | Children: 2</p>
                            <h6 class="mb-3">$525 per night</h6>
                            <a href="booking.php" class="btn btn-sm w-10 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
          <!-- Room 6 -->
          <div class="room-card card mb-4 border-0 shadow" data-features="2 Queen Beds,Superior Ocean View, Separate Bathtub and Shower, Connecting Rooms" data-adults="2" data-children="1">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/rooms/11.png" class="img-fluid rounded-start" >
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Suite - Superior Ocean View</h5>
                            <p class="card-text">Features: 2 Queen Beds | Separate Bathtub and Shower | Connecting Rooms</p>
                            <p class="card-text">Facilities: High-Speed Wi-Fi | Electrical Outlet | Coffee/Tea Maker | Mini Fridge</p>
                            <p class="card-text">Adults: 2 | Children: 2</p>
                            <h6 class="mb-3">$575 per night</h6>
                            <a href="booking.php" class="btn btn-sm w-10 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
          <!-- Room 7 -->
          <div class="room-card card mb-4 border-0 shadow" data-features="1 King Bed, Separate Bathtub and Shower, Connecting Rooms" data-adults="2" data-children="1">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/rooms/3.avif" class="img-fluid rounded-start" >

                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Presidential Suit</h5>
                            <p class="card-text">Features: 1 King Bed | Separated Bathtub and Shower | Connecting Room</p>
                            <p class="card-text">Facilities: High-Speed Wi-Fi | Electrical Outlet | Coffee/Tea Maker | Mini Fridge | Living Area</p>
                            <p class="card-text">Adults: 4 | Children: 2</p>
                            <h6 class="mb-3">$975 per night</h6>
                            <a href="booking.php" class="btn btn-sm w-10 text-white custom-bg shadow-none mb-3" style="background-color: #4ee6bc;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!--Footer-->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!--Footer-->
<?php require('footer.php');?>
<!--Footer-->

    <script>
        function filterRooms() {
            // Get filter values
            let selectedFeature = document.getElementById('features').value.trim();
            let guestAdult = parseInt(document.getElementById('guestAdult').value) || 0;
            let guestChildren = parseInt(document.getElementById('guestChildren').value) || 0;

            // Get all room cards
            let rooms = document.querySelectorAll('.room-card');

            rooms.forEach(room => {
                let roomFeatures = room.getAttribute('data-features').split(',').map(f => f.trim());
                let roomAdults = parseInt(room.getAttribute('data-adults'));
                let roomChildren = parseInt(room.getAttribute('data-children'));

                // Check if the room matches the selected feature and guest count
                let featureMatch = !selectedFeature || roomFeatures.includes(selectedFeature);
                let adultMatch = guestAdult <= roomAdults;
                let childrenMatch = guestChildren <= roomChildren;

                // Show or hide the room based on matching criteria
                if (featureMatch && adultMatch && childrenMatch) {
                    room.style.display = 'block';
                } else {
                    room.style.display = 'none';
                }
            });
        }

        function clearFilters() {
            // Reset filter fields
            document.getElementById('features').value = '';
            document.getElementById('guestAdult').value = '';
            document.getElementById('guestChildren').value = '';

            // Show all rooms
            let rooms = document.querySelectorAll('.room-card');
            rooms.forEach(room => {
                room.style.display = 'block';
            });
        }
    </script>

</body>
</html>
