<?php
session_start();
include "db.php";

if(!isset($_SESSION['user_email'])){
    header("Location: login.php");
    exit();
}

$turf = $_GET['turf'] ?? "";
$selected_date = $_GET['date'] ?? date('Y-m-d');

$booked_slots = [];

if ($turf !== "") {
    $safe_turf = $conn->real_escape_string($turf);
    $safe_date = $conn->real_escape_string($selected_date);

    $sql = "SELECT slot FROM booking WHERE turf='$safe_turf' AND date='$safe_date'";
    $result = $conn->query($sql);

    if ($result) {
        while($row = $result->fetch_assoc()){
            $booked_slots[] = $row['slot'];
        }
    }
}

$email = $_SESSION['user_email'];
$name = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Turf</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-box">
    <h2>Book Turf: <?php echo htmlspecialchars($turf); ?></h2>

    <form action="payment.php" method="POST">
        <input type="hidden" name="turf" value="<?php echo htmlspecialchars($turf); ?>">

        <input type="text" name="name" 
value="<?php echo htmlspecialchars($name); ?>" readonly required>

        <label>Email</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" readonly>

        <label>Date</label>
        <input type="date"
               name="date"
               value="<?php echo htmlspecialchars($selected_date); ?>"
               onchange="window.location='booking.php?turf=<?php echo urlencode($turf); ?>&date='+this.value"
               required>

        <label>Time Slot</label>

        <div class="slots-container">
        <?php
        $slots = [
            "6 AM - 7 AM",
            "7 AM - 8 AM",
            "5 PM - 6 PM",
            "6 PM - 7 PM"
        ];

        foreach($slots as $s){
            if(in_array($s, $booked_slots)){
                echo "<button type='button' class='slot booked' disabled>".htmlspecialchars($s)." (Booked)</button>";
            } else {
                echo "<button type='button' class='slot available' onclick=\"selectSlot('".htmlspecialchars($s, ENT_QUOTES)."', this)\">".htmlspecialchars($s)."</button>";
            }
        }
        ?>
        </div>

        <input type="hidden" name="slot" id="selectedSlot">
        <br>
        <button type="submit">Proceed to Payment</button>
    </form>
</div>

<script>
function selectSlot(slot, el){
    document.getElementById("selectedSlot").value = slot;

    let buttons = document.querySelectorAll('.slot');
    buttons.forEach(btn => btn.classList.remove('selected'));

    el.classList.add('selected');
}
</script>

</body>
</html>