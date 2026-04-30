<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chandigarh Cricket League</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
  <div class="container">
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

<section class="event-details-page">
  <div class="event-details-card">
    <img src="turf/cricket_event1.jpeg" alt="Chandigarh Cricket League">

    <h1>Chandigarh Cricket League</h1>
    <p><strong>Turf:</strong> PowerPlay Arena, Zirakpur</p>
    <p><strong>Date:</strong> 18 April 2026</p>
    <p><strong>Entry Fee:</strong> &#8377;2500 per team</p>
    <p><strong>Team Size:</strong> 8 players + 2 substitutes</p>
    <p><strong>Reporting Time:</strong> 9:00 AM</p>
    <p><strong>Prize Pool:</strong> &#8377;20,000</p>
    <p><strong>Contact:</strong> 98765 12345</p>

    <h3>Event Details</h3>
    <p>
      Chandigarh Cricket League is a box cricket tournament organized for teams looking
      for competitive matches in a professional turf environment. The tournament focuses
      on fair play, excitement, and community participation.
    </p>

    <a href="contact.php"><button class="book-now">Register Now</button></a>
  </div>
</section>

</body>
</html>