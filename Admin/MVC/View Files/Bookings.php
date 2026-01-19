<?php
require_once('../Database_or_Model_Files/Database.php'); 
requireAdmin();
$user_name = getUserName();
$conn = connectsql();

$sql = "SELECT b.*, u.FullName as renter_name, s.name as stall_name, c.name as category_name 
        FROM booking b 
        LEFT JOIN user u ON b.user_id = u.id 
        LEFT JOIN stalls s ON b.stall_id = s.id
        LEFT JOIN categories c ON b.category_id = c.id 
        ORDER BY b.created_at DESC";
$bookings_result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Booking Requests - Admin</title>
    <link rel="stylesheet" href="../Stylesheets/Bookings-style.css" />
</head>
<body>
    <!-- তোমার sidebar same -->

    <div class="main">
        <header class="topbar">
            <h1>Booking Requests</h1>
            <div class="topbar-right">
                <!-- select + search same -->
                <span class="user-welcome">Welcome, <?= htmlspecialchars($user_name) ?></span>
                <a href="logout.php" class="user-badge">Logout</a>
            </div>
        </header>
        
        <!-- তোমার table same, কিন্তু PHP loop দিয়ে dynamic করো -->
        <section class="panel">
            <!-- panel same -->
            <div class="table-wrapper">
                <table>
                    <!-- thead same -->
                    <tbody>
                        <?php if ($bookings_result && $bookings_result->num_rows > 0): ?>
                            <?php while($row = $bookings_result->fetch_assoc()): ?>
                            <tr>
                                <td><?= htmlspecialchars($row['id']) ?></td>
                                <td><?= htmlspecialchars($row['renter_name']) ?></td>
                                <td><?= htmlspecialchars($row['phone']) ?></td>
                                <td><?= htmlspecialchars($row['stall_name']) ?></td>
                                <td><?= htmlspecialchars($row['category_name']) ?></td>
                                <!-- other fields -->
                                <td><span class="badge badge-<?= $row['status'] ?>"><?= ucfirst($row['status']) ?></span></td>
                                <td>
                                    <button class="btn-sm btn-approve" onclick="updateStatus(<?= $row['id'] ?>, 'approved')">Approve</button>
                                    <button class="btn-sm btn-reject" onclick="updateStatus(<?= $row['id'] ?>, 'rejected')">Reject</button>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr><td colspan="10">No bookings found</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>
</html>
