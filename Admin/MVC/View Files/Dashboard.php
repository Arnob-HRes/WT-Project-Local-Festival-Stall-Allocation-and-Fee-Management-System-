<?php
require_once('../Database_or_Model_Files/Database.php'); 
$conn = connectsql();

// ১. Total Bookings (সব বুকিং এর সংখ্যা)
$total_bookings_res = mysqli_query($conn, "SELECT COUNT(*) as total FROM booking");
$total_bookings = mysqli_fetch_assoc($total_bookings_res)['total'];

// ২. Pending Requests (যদি আপনার টেবিলে status কলাম থাকে, তবেই এটি কাজ করবে)
// যদি status কলাম না থাকে, তবে আপাতত সব বুকিংই পেন্ডিং হিসেবে গণ্য হবে।
$pending_res = mysqli_query($conn, "SELECT COUNT(*) as total FROM booking WHERE LOWER(status) = 'pending'");
if ($pending_res) {
    $row = mysqli_fetch_assoc($pending_res);
    $pending_requests = $row['total'];
} else {
    // যদি status কলামে সমস্যা থাকে তবে সব বুকিংকে কাউন্ট করবে
    $pending_requests = $total_bookings; 
}
// ৩. Available Stalls (আপনার 'stalls' টেবিল থেকে মোট স্টল - বুকড স্টল)
$total_stalls_res = mysqli_query($conn, "SELECT COUNT(*) as total FROM stalls");
$total_stalls = mysqli_fetch_assoc($total_stalls_res)['total'];
$available_stalls = $total_stalls - $total_bookings;

// ৪. Today's Revenue (আজকের মোট আয়)
$today = date('Y-m-d');
$revenue_res = mysqli_query($conn, "SELECT SUM(amount) as total FROM booking WHERE date = '$today'");
$today_revenue = mysqli_fetch_assoc($revenue_res)['total'] ?? 0;
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../Stylesheets/dashboard-style.css" />
</head>
<body>

    
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2>Stall Admin</h2>
        </div>
        <nav class="sidebar-nav">
            <a href="Dashboard.php" class="active">Dashboard</a>
            <a href="Bookings.php">Bookings</a>
            <a href="Stalls.php">Stalls</a>
            <a href="Categories.php">Categories</a>
            <a href="Users.php">Users</a>
            
        </nav>
    </aside>

    
    <div class="main">
        
        <header class="topbar">
            <h1>Dashboard</h1>
            
                <div class="user-badge">Admin</div>
            
        </header>

        <!-- Overview cards -->
        <section class="cards">
    <div class="card">
        <h3>Total Bookings</h3>
        <p><?php echo $total_bookings; ?></p>
    </div>
    <div class="card">
        <h3>Pending Requests</h3>
        <p><?php echo $pending_requests; ?></p>
    </div>
    <div class="card">
        <h3>Available Stalls</h3>
        <p><?php echo ($available_stalls > 0) ? $available_stalls : 0; ?></p>
    </div>
    <div class="card">
        <h3>Today’s Revenue</h3>
        <p>৳ <?php echo number_format($today_revenue); ?></p>
    </div>
</section>

        <!-- Table area -->
        <section class="panel">
            <div class="panel-header">
                <h2>Recent Booking Requests</h2>
                <button class="btn-primary">View All</button>
            </div>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Renter</th>
                            <th>Stall</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Fee</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php
    $recent_res = mysqli_query($conn, "SELECT * FROM booking ORDER BY BookingID DESC LIMIT 5");
    while($row = mysqli_fetch_assoc($recent_res)) {
    ?>
    <tr>
        <td><?php echo htmlspecialchars($row['Username']); ?></td>
        <td><?php echo htmlspecialchars($row['stall']); ?></td>
        <td>Food</td> <td><?php echo $row['date']; ?></td>
        <td>10:00 - 22:00</td> 
        <td>৳ <?php echo number_format($row['amount']); ?></td>
        <td>
            <span class="badge badge-pending">Pending</span>
        </td>
    </tr>
    <?php } ?>
</tbody>
                </table>
            </div>
        </section>
    </div>
</body>
</html>
