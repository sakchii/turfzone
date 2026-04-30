<?php
session_start();
include "db.php";

$prefill_email = $_GET['email'] ?? "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_name']  = $user['name'];
        $_SESSION['user_role']  = $user['role'];

        if ($user['role'] === 'admin') {
            header("Location: admin-bookings.php");
            exit();
        } else {
            header("Location: profile.php");
            exit();
        }
    } else {
        echo "<script>alert('Invalid Credentials');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | TurfZone</title>
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
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php" class="register-btn">Register</a></li>
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
  <a href="register.php">Register</a>
</div>

<div id="overlay" class="overlay" onclick="closeSidebar()"></div>

<section class="form-page">
  <div class="form-card">
    <h1>Login</h1>

    <form method="POST">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo htmlspecialchars($prefill_email); ?>" required>

      <label>Password</label>
      <input type="password" name="password" required>

      <button type="submit" class="form-btn">Login</button>
    </form>

    <p class="form-bottom-text">Don’t have an account? <a href="register.php">Register here</a></p>
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