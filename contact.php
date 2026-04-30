<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $conn->query("INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')");
    echo "<script>alert('Message sent successfully');</script>";
}
?>
<?php
session_start();

$message_sent = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message_sent = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Us - TurfZone</title>
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

<div class="contact-container">
    <h1 class="contact-title">Contact Us</h1>

    <?php if($message_sent){ ?>
      <p style="text-align:center; color:#1ed760; font-weight:bold;">Message sent successfully.</p>
    <?php } ?>

    <div class="contact-grid">
        <div class="left-section">
            <div class="card">
                <h2>📞 Contact Information</h2>

                <p><strong>Email:</strong></p>
                <p>📧 singhmanavpreet15@gmail.com</p>
                <p>📧 vermasakchi20@gmail.com</p>

                <p><strong>Phone:</strong></p>
                <p>📱 +91 76529 06925</p>
                <p>📱 +91 9779203924</p>
            </div>

            <div class="card">
                <h2>❓ FAQ</h2>
                <p><strong>Q1:</strong> How do I book a turf?</p>
                <p>Select date & slot from booking page.</p>

                <p><strong>Q2:</strong> Can I cancel?</p>
                <p>Yes, before scheduled time.</p>

                <p><strong>Q3:</strong> Real-time slots?</p>
                <p>Yes, slots update instantly.</p>
            </div>
        </div>

        <div class="right-section">
            <div class="card">
                <h2>📩 Send Message</h2>

                <form method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message"></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>

            <div class="card">
                <h2>📜 Terms & Conditions</h2>
                <p>• Provide correct booking details</p>
                <p>• Payment before confirmation</p>
                <p>• Booking may be cancelled in emergencies</p>
                <p>• Damage will be chargeable</p>
                <p>• Follow turf rules strictly</p>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    © 2026 TurfZone | Football Turf Booking Platform
</div>

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