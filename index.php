<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TurfZone</title>
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
      <li><a href="#about">About Us</a></li>
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
  <a href="#about" onclick="closeSidebar()">About Us</a>
  <a href="turfs.php">Turfs</a>
  <a href="events.php">Events</a>
  <a href="shop.php">Shop</a>
  <a href="#facilities" onclick="closeSidebar()">Our Facilities</a>
  <a href="#gallery" onclick="closeSidebar()">Turf Gallery</a>
  <a href="#sports" onclick="closeSidebar()">Choose Sport</a>
  <a href="contact.php">Contact</a>
  <?php if(isset($_SESSION['user_email'])) { ?>
    <a href="profile.php">My Profile</a>
  <?php } else { ?>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
  <?php } ?>
</div>

<div id="overlay" class="overlay" onclick="closeSidebar()"></div>

<section class="hero-slider">
  <div class="slider">
    <img src="turf/turf5.jpeg" alt="">
    <img src="turf/1709125164-image_cropper_1709125156888.webp" alt="">
    <img src="turf/brocode-turf-bhandari-bagh-dehradun-sports-clubs-t9et1m9aat.avif" alt="">
    <img src="turf/Football-Turf-Grass-14000dtex.jpeg" alt="">
    <img src="turf/hero-image.webp" alt="">
    <img src="turf/turf3.jpeg" alt="">
    <img src="turf/turf2.jpeg" alt="">
    <img src="turf/istockphoto-520999573-612x612.jpg" alt="">
  </div>

  <div class="hero-text">
    <h1>Book Your Turf Anytime</h1>
    <p>Find and reserve the best football and cricket turfs near you</p>
    <a href="#sports" class="book-btn">Explore Turfs</a>
  </div>
</section>

<section id="about" class="about-us">
  <h2>About The Project And Us</h2>

  <div class="developer developer-left">
    <img src="turf/sakchi.jpeg" alt="Sakchi Verma">
    <div class="developer-text">
      <h3>Sakchi Verma</h3>
      <p>
        I am Sakchi Verma, a BCA final semester student and one of the developers of
        this project. This website was created as part of our final semester project
        to solve a real-world problem faced by sports enthusiasts in the tri-city area
        of Chandigarh, Mohali, and Panchkula.
      </p>
      <p>
        Many turfs in these cities do not provide a proper online booking system,
        which makes it difficult for users to check availability and book slots.
        Through this project, we developed a centralized turf booking platform
        where users can explore available turfs and book them easily. This platform allows users to explore different football and cricket turfs,
        view pricing details, and reserve their preferred turf slots. The project
        demonstrates how web technologies can be used to build a centralized
        sports facility booking system.
      </p>
    </div>
  </div>

</section>

<section id="sports" class="sports-section">
  <h2>Choose Your Sport</h2>

  <div class="sports-container">
    <div class="sport-card">
      <img src="turf/istockphoto-520999573-612x612.jpg" alt="Football Turf">
      <h3>Football Turf</h3>
      <a href="turfs.php#football" class="sport-btn">Book Football Turf</a>
    </div>

    <div class="sport-card">
      <img src="turf/cturf2.jpeg" alt="Cricket Turf">
      <h3>Cricket Turf</h3>
      <a href="turfs.php#cricket" class="sport-btn">Book Cricket Turf</a>
    </div>
  </div>
</section>

<section id="facilities" class="facilities">
  <h2>Our Facilities</h2>

  <div class="facility-grid">
    <div class="facility">Parking</div>
    <div class="facility">Changing Rooms</div>
    <div class="facility">Washrooms</div>
    <div class="facility">Equipment Rental</div>
    <div class="facility">Seating Area</div>
  </div>
</section>

<section id="gallery" class="gallery">
  <h2>Turf Gallery</h2>

  <div class="gallery-grid">
    <img src="turf/brocode-turf-bhandari-bagh-dehradun-sports-clubs-t9et1m9aat.avif" alt="">
    <img src="turf/istockphoto-520999573-612x612.jpg" alt="">
    <img src="turf/cturf3.jpeg" alt="">
    <img src="turf/cturf4.jpeg" alt="">
  </div>
</section>

<section class="stats">
  <div class="stat">
    <h2>50+</h2>
    <p>Turfs Available</p>
  </div>
  <div class="stat">
    <h2>500+</h2>
    <p>Matches Played</p>
  </div>
  <div class="stat">
    <h2>300+</h2>
    <p>Happy Players</p>
  </div>
</section>

<footer id="contact">
  <p>© 2026 TurfZone | Football Turf Booking Platform | vermasakchi20@gmail.com | +91 9779203924</p>
</footer>

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
