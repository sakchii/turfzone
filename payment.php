<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$date = $_POST['date'] ?? '';
$slot = $_POST['slot'] ?? '';
$turf = $_POST['turf'] ?? 'Turf';

if ($slot === '') {
    echo "<script>alert('Please select a slot first'); window.history.back();</script>";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="payment-container">

<div class="payment-card">
  <h2>Payment for <?php echo htmlspecialchars($turf); ?></h2>

  <div class="payment-details">
    <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Date:</strong> <?php echo htmlspecialchars($date); ?></p>
    <p><strong>Slot:</strong> <?php echo htmlspecialchars($slot); ?></p>
  </div>

  <form action="confirm.php" method="POST">
    <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
    <input type="hidden" name="date" value="<?php echo htmlspecialchars($date); ?>">
    <input type="hidden" name="slot" value="<?php echo htmlspecialchars($slot); ?>">
    <input type="hidden" name="turf" value="<?php echo htmlspecialchars($turf); ?>">

    <select name="payment_method" required>
      <option value="">Select Payment Method</option>
      <option value="UPI">UPI</option>
      <option value="Cash">Cash</option>
    </select>

    <h3>Scan & Pay via UPI</h3>

    <img src="turf/qr.png" alt="UPI QR" style="width:200px; margin:15px 0; border-radius:10px;">
    <p style="color:#ccc;">Scan using any UPI app (GPay, PhonePe, Paytm)</p>

    <button type="submit" class="pay-btn">Pay & Confirm</button>
  </form>
</div>

</body>
</html>