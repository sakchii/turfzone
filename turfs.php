<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Available Turfs | TurfZone</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
  <div class="container">
    <div class="menu-icon" onclick="openSidebar()">&#9776;</div>
    <div class="logo">TurfZone</div>

    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="turfs.php">Turfs</a></li>
      <li><a href="events.php">Events</a></li>
      <li><a href="shop.php">Shop</a></li>
      <li><a href="index.php#about">About Us</a></li>
      <li><a href="contact.php">Contact</a></li>
      <?php if(isset($_SESSION['user_email'])) { ?>
        <li><a href="profile.php">My Profile</a></li>
      <?php } else { ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php" class="register-btn">Register</a></li>
      <?php } ?>
    </ul>
  </div>
</nav>

<div id="sidebar" class="sidebar">
  <div class="sidebar-header">
    <h2>TurfZone</h2>
    <span class="close-btn" onclick="closeSidebar()">&times;</span>
  </div>

  <a href="index.php">Home</a>
  <a href="index.php#about">About Us</a>
  <a href="turfs.php">Turfs</a>
  <a href="events.php">Events</a>
  <a href="shop.php">Shop</a>
  <a href="index.php#facilities">Our Facilities</a>
  <a href="index.php#gallery">Turf Gallery</a>
  <a href="index.php#sports">Choose Sport</a>
  <a href="contact.php">Contact</a>
</div>

<div id="overlay" class="overlay" onclick="closeSidebar()"></div>

<section class="turfs-hero">
  <h1>Available Turfs</h1>
  <p>Explore football and cricket turfs across Chandigarh, Mohali and Panchkula.</p>
</section>

<div class="turf-tabs">
  <a href="#football" class="tab-btn">Football</a>
  <a href="#cricket" class="tab-btn">Cricket</a>
</div>

<section id="football" class="turf-section">
  <h2>Football Turfs</h2>

  <div class="turf-container">
    <div class="turf-card">
      <img src="turf/fturf1.jpeg" alt="Score On">
      <h3>Score On</h3>
      <p>Plot No. 111, IT Park Rd,<br>Near Om Nursery,<br>Kishangarh, Chandigarh</p>
      <p class="price">₹1200 / hour</p>
      <a href="booking.php?turf=Score%20On"><button class="book-now">Book Now</button></a>
    </div>

    <div class="turf-card">
      <img src="turf/fturf2.jpeg" alt="Tiki Taka Arena">
      <h3>Tiki Taka Arena</h3>
      <p>Rooftop,<br>Paras Downtown Square Mall,<br>Zirakpur, Punjab 140603</p>
      <p class="price">₹1500 / hour</p>
      <a href="booking.php?turf=Tiki%20Taka%20Arena"><button class="book-now">Book Now</button></a>
    </div>

    <div class="turf-card">
      <img src="turf/fturf3.jpeg" alt="Legacy Matters">
      <h3>Legacy Matters</h3>
      <p>Sector 27D,<br>Sector 27,<br>Chandigarh, 160019</p>
      <p class="price">₹1200 / hour</p>
      <a href="booking.php?turf=Legacy%20Matters"><button class="book-now">Book Now</button></a>
    </div>

    <div class="turf-card">
      <img src="turf/fturf4.jpeg" alt="Forest Kicks">
      <h3>Forest Kicks</h3>
      <p>Near Baba Balak Nath Mandir,<br>Kaimbwala, Chandigarh, 160001</p>
      <p class="price">₹1250 / hour</p>
      <a href="booking.php?turf=Forest%20Kicks"><button class="book-now">Book Now</button></a>
    </div>

    <div class="turf-card">
      <img src="turf/turf3.jpeg" alt="Urban Park Football Turf">
      <h3>Urban Park Football Turf</h3>
      <p>Sector 17,<br>Chandigarh, 160017</p>
      <p class="price">₹1300 / hour</p>
      <a href="booking.php?turf=Urban%20Park%20Football%20Turf"><button class="book-now">Book Now</button></a>
    </div>

    <div class="turf-card">
      <img src="turf/Football-Turf-Grass-14000dtex.jpeg" alt="Front Foot Turf">
      <h3>Front Foot Turf</h3>
      <p>Ramgarh Bhudda,<br>Punjab 140603</p>
      <p class="price">₹1200 / hour</p>
      <a href="booking.php?turf=Front%20Foot%20Turf"><button class="book-now">Book Now</button></a>
    </div>
  </div>
</section>

<section id="cricket" class="turf-section">
  <h2>Cricket Turfs</h2>

  <div class="turf-container">
    <div class="turf-card">
      <img src="turf/cturf1.jpeg" alt="The Grand Turf">
      <h3>THE GRAND TURF</h3>
      <p>Gazipur Rd, opposite Sohi Heights,<br>near Suncity Ultima,<br>Zirakpur, Punjab 140603</p>
      <p class="price">₹1500 / hour</p>
      <a href="booking.php?turf=THE%20GRAND%20TURF"><button class="book-now">Book Now</button></a>
    </div>

    <div class="turf-card">
      <img src="turf/cturf2.jpeg" alt="Stump'd Box Cricket">
      <h3>Stump'd Box Cricket</h3>
      <p>Sector 44,<br>Chandigarh, 160043</p>
      <p class="price">₹1500 / hour</p>
      <a href="booking.php?turf=Stump%27d%20Box%20Cricket"><button class="book-now">Book Now</button></a>
    </div>

    <div class="turf-card">
      <img src="turf/cturf3.jpeg" alt="The Dugout">
      <h3>The Dugout</h3>
      <p>Nagla Rd,<br>Zirakpur, Punjab 140603</p>
      <p class="price">₹1500 / hour</p>
      <a href="booking.php?turf=The%20Dugout"><button class="book-now">Book Now</button></a>
    </div>

    <div class="turf-card">
      <img src="turf/cturf4.jpeg" alt="Ground Zero">
      <h3>GROUND ZERO</h3>
      <p>AKSIPS-65 SCHOOL,<br>Phase 11, Sector 65,<br>Sahibzada Ajit Singh Nagar, Punjab 160062</p>
      <p class="price">₹1400 / hour</p>
      <a href="booking.php?turf=GROUND%20ZERO"><button class="book-now">Book Now</button></a>
    </div>
  </div>
</section>

<script>
function openSidebar() {
  document.getElementById("sidebar").style.left = "0";
  document.getElementById("overlay").style.display = "block";
  document.body.style.overflow = "hidden";
}

function closeSidebar() {
  document.getElementById("sidebar").style.left = "-340px";
  document.getElementById("overlay").style.display = "none";
  document.body.style.overflow = "auto";
}
</script>

</body>
</html>