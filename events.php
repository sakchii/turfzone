<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Events | TurfZone</title>
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

<section class="events-hero">
  <h1>Upcoming Tournaments</h1>
  <p>Explore football and cricket tournaments happening across Chandigarh, Mohali and Panchkula.</p>
</section>

<section class="events-section">
  <div class="events-container">

    <a href="event-football-league.php" class="event-card">
      <img src="turf/football_event.jpeg" alt="Tri City Football Cup">
      <div class="event-info">
        <h3>Tri City Football Cup 2026</h3>
        <p><strong>Turf:</strong> Goal Zone, Mohali</p>
        <p><strong>Date:</strong> 12 April 2026</p>
      </div>
    </a>

    <a href="event-cricket-league.php" class="event-card">
      <img src="turf/cricket_event1.jpeg" alt="Chandigarh Cricket League">
      <div class="event-info">
        <h3>Chandigarh Cricket League</h3>
        <p><strong>Turf:</strong> PowerPlay Arena, Zirakpur</p>
        <p><strong>Date:</strong> 18 April 2026</p>
      </div>
    </a>

    <a href="event-football-league.php" class="event-card">
      <img src="turf/football_event2.jpeg" alt="Night Football Clash">
      <div class="event-info">
        <h3>Night Football Clash</h3>
        <p><strong>Turf:</strong> Score On, Chandigarh</p>
        <p><strong>Date:</strong> 25 April 2026</p>
      </div>
    </a>

    <a href="event-cricket-league.php" class="event-card">
      <img src="turf/cricket_event2.jpeg" alt="Box Cricket Showdown">
      <div class="event-info">
        <h3>Box Cricket Showdown</h3>
        <p><strong>Turf:</strong> Champion Cricket Ground, Mohali</p>
        <p><strong>Date:</strong> 2 May 2026</p>
      </div>
    </a>

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