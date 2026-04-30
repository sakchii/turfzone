<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_email']) || !isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

/* SEARCH / FILTER */
$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : "";
$date_filter = isset($_GET['date']) ? $conn->real_escape_string($_GET['date']) : "";

$where = "WHERE 1";

if ($search !== "") {
    $where .= " AND (name LIKE '%$search%' OR email LIKE '%$search%' OR turf LIKE '%$search%')";
}

if ($date_filter !== "") {
    $where .= " AND date = '$date_filter'";
}

/* DASHBOARD STATS */
$total_bookings = 0;
$total_users = 0;
$today_bookings = 0;
$total_revenue = 0;

/* if your table is app_users, replace users with app_users below */
$res1 = $conn->query("SELECT COUNT(*) AS total FROM booking");
if ($res1) {
    $row = $res1->fetch_assoc();
    $total_bookings = $row['total'];
}

$res2 = $conn->query("SELECT COUNT(*) AS total FROM users");
if ($res2) {
    $row = $res2->fetch_assoc();
    $total_users = $row['total'];
}

$res3 = $conn->query("SELECT COUNT(*) AS total FROM booking WHERE date = CURDATE()");
if ($res3) {
    $row = $res3->fetch_assoc();
    $today_bookings = $row['total'];
}

/* simple estimated revenue */
$res4 = $conn->query("SELECT COUNT(*) AS total FROM booking");
if ($res4) {
    $row = $res4->fetch_assoc();
    $total_revenue = $row['total'] * 1200;
}

/* BOOKINGS */
$sql = "SELECT * FROM booking $where ORDER BY id DESC";
$result = $conn->query($sql);

/* CONTACT MESSAGES */
$contact_result = $conn->query("SELECT * FROM contact ORDER BY id DESC LIMIT 10");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - TurfZone</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="admin-body">

<div class="admin-header">
    TurfZone Admin Dashboard
</div>

<div class="admin-container">

    <!-- DASHBOARD CARDS -->
    <div class="admin-stats">
        <div class="admin-stat-card">
            <h3>Total Bookings</h3>
            <p><?php echo $total_bookings; ?></p>
        </div>

        <div class="admin-stat-card">
            <h3>Total Users</h3>
            <p><?php echo $total_users; ?></p>
        </div>

        <div class="admin-stat-card">
            <h3>Today's Bookings</h3>
            <p><?php echo $today_bookings; ?></p>
        </div>

        <div class="admin-stat-card">
            <h3>Estimated Revenue</h3>
            <p>₹<?php echo $total_revenue; ?></p>
        </div>
    </div>

    <!-- SEARCH / FILTER -->
    <div class="admin-table-box" style="margin-top: 25px;">
        <h2>Search & Filter Bookings</h2>

        <form method="GET" class="admin-filter-form">
            <input type="text" name="search" placeholder="Search by name, email or turf" value="<?php echo htmlspecialchars($search); ?>">
            <input type="date" name="date" value="<?php echo htmlspecialchars($date_filter); ?>">
            <button type="submit" class="admin-btn">Apply</button>
            <a href="admin-bookings.php" class="admin-btn reset-btn">Reset</a>
        </form>
    </div>

    <!-- BOOKINGS TABLE -->
    <div class="admin-table-box" style="margin-top: 25px;">
        <h2>All Turf Bookings</h2>

        <table class="admin-table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Turf</th>
                <th>Date</th>
                <th>Slot</th>
                <th>Payment</th>
            </tr>

            <?php
            if ($result && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".htmlspecialchars($row['name'])."</td>
                            <td>".htmlspecialchars($row['email'])."</td>
                            <td>".htmlspecialchars($row['turf'])."</td>
                            <td>".htmlspecialchars($row['date'])."</td>
                            <td>".htmlspecialchars($row['slot'])."</td>
                            <td>".htmlspecialchars($row['payment'])."</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7' class='no-data'>No Bookings Found</td></tr>";
            }
            ?>
        </table>
    </div>

    <!-- CONTACT MESSAGES -->
    <div class="admin-table-box" style="margin-top: 25px;">
        <h2>Recent Contact Messages</h2>

        <table class="admin-table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Time</th>
            </tr>

            <?php
            if ($contact_result && $contact_result->num_rows > 0) {
                while($msg = $contact_result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$msg['id']."</td>
                            <td>".htmlspecialchars($msg['name'])."</td>
                            <td>".htmlspecialchars($msg['email'])."</td>
                            <td>".htmlspecialchars($msg['message'])."</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='no-data'>No Messages Found</td></tr>";
            }
            ?>
        </table>
    </div>

    <div style="text-align:center; margin-top:30px;">
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

</div>

</body>
</html>