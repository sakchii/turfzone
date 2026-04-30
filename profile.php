<?php
session_start();
include "db.php";

if(!isset($_SESSION['user_email'])){
    header("Location: login.php");
    exit();
}

$email = $_SESSION['user_email'];
$name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "User";

$sql = "SELECT * FROM booking WHERE email='$email' ORDER BY date DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>My Profile | TurfZone</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="profile-page">

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
      <li><a href="profile.php">My Profile</a></li>
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
  <a href="profile.php">My Profile</a>
</div>

<div id="overlay" class="overlay" onclick="closeSidebar()"></div>

<div class="profile-container">
  <h1>My Profile</h1>
  <p>Welcome, <?php echo htmlspecialchars(ucfirst($name)); ?> 👋</p>

  <h2>My Bookings</h2>

  <table class="profile-table">
    <tr>
      <th>Turf</th>
      <th>Date</th>
      <th>Slot</th>
      <th>Payment</th>
    </tr>

    <?php
    if ($result && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".htmlspecialchars($row['turf'])."</td>
                    <td>".htmlspecialchars($row['date'])."</td>
                    <td>".htmlspecialchars($row['slot'])."</td>
                    <td>".htmlspecialchars($row['payment'])."</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No bookings found</td></tr>";
    }
    ?>
  </table>

  <div style="text-align:center; margin-top:30px;">
    <a href="logout.php" class="logout-btn">Logout</a>
  </div>
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