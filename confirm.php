<?php
include "db.php";

$name = $conn->real_escape_string($_POST['name'] ?? '');
$email = $conn->real_escape_string($_POST['email'] ?? '');
$date = $conn->real_escape_string($_POST['date'] ?? '');
$slot = $conn->real_escape_string($_POST['slot'] ?? '');
$turf = $conn->real_escape_string($_POST['turf'] ?? '');
$payment = $conn->real_escape_string($_POST['payment_method'] ?? '');

$sql = "INSERT INTO booking (name, email, turf, date, slot, payment)
        VALUES ('$name', '$email', '$turf', '$date', '$slot', '$payment')";

$success = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Booking Confirmed</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php if($success) { ?>
<div class="confirm-container">
  <div class="confirm-card" id="receipt">

    <div class="success-icon">✅</div>
    <h2>Booking Confirmed!</h2>

    <div class="confirm-details">
      <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
      <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
      <p><strong>Turf:</strong> <?php echo htmlspecialchars($turf); ?></p>
      <p><strong>Date:</strong> <?php echo htmlspecialchars($date); ?></p>
      <p><strong>Slot:</strong> <?php echo htmlspecialchars($slot); ?></p>
      <p><strong>Payment:</strong> <?php echo htmlspecialchars($payment); ?></p>
    </div>

    <button onclick="printReceipt()" class="confirm-btn download-btn">Download Receipt</button>

    <a href="index.php">
      <button class="confirm-btn home-btn">Go Home</button>
    </a>

  </div>
</div>
<?php } else { ?>
  <div class="confirm-container">
    <div class="confirm-card">
      <h2>Something went wrong.</h2>
      <a href="index.php"><button class="confirm-btn home-btn">Go Home</button></a>
    </div>
  </div>
<?php } ?>

<script>
function printReceipt() {
    var content = document.getElementById("receipt").innerHTML;
    var win = window.open("", "", "width=800,height=600");
    win.document.write("<html><head><title>Receipt</title></head><body style='font-family:sans-serif;'>");
    win.document.write(content);
    win.document.write("</body></html>");
    win.document.close();
    win.print();
}
</script>

</body>
</html>