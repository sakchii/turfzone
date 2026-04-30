<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $check = $conn->query("SELECT id FROM users WHERE email='$email' LIMIT 1");

    if ($check && $check->num_rows > 0) {
        echo "<script>alert('Email already registered');</script>";
    } else {
        $sql = "INSERT INTO users (name, email, password, role)
                VALUES ('$name', '$email', '$password', 'user')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
                alert('Registered Successfully');
                window.location='login.php?email=$email';
            </script>";
            exit();
        } else {
            echo "<script>alert('Registration failed');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | TurfZone</title>
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
    <div class="sidebar-brand">
      <span class="brand-dot"></span>
      <h2>TurfZone</h2>
    </div>
    <button class="close-btn" onclick="closeSidebar()">&times;</button>
  </div>

  <div class="sidebar-subtitle">Quick Menu</div>
  <a href="index.php">Home</a>
  <a href="index.php#about">About Us</a>
  <a href="turfs.php">Turfs</a>
  <a href="events.php">Events</a>
  <a href="shop.php">Shop</a>
  <a href="index.php#facilities">Our Facilities</a>
  <a href="index.php#gallery">Turf Gallery</a>
  <a href="index.php#sports">Choose Sport</a>
  <a href="contact.php">Contact</a>
  <a href="login.php">Login</a>
</div>

<div id="overlay" class="overlay" onclick="closeSidebar()"></div>

<section class="form-page">
  <div class="form-card">
    <h1>Create Account</h1>
    <p>Register to book turfs, join events, and access shop services.</p>

    <form method="POST">
      <label>Full Name</label>
      <input type="text" name="name" required>

      <label>Email</label>
      <input type="email" name="email" required>

      <label>Password</label>
      <input type="password" name="password" required>

      <button type="submit" class="form-btn">Register</button>
    </form>

    <p class="form-bottom-text">Already have an account? <a href="login.php">Login here</a></p>
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