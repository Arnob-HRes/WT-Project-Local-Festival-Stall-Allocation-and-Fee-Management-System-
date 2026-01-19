<?php
require_once('../Database_or_Model_Files/Database.php'); 


$conn = connectsql(); 


if (isset($_GET['action']) && $_GET['action'] == 'reject' && isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $deleteQuery = "DELETE FROM booking WHERE BookingID = '$id'";
    if(mysqli_query($conn, $deleteQuery)) {
        header("Location: Bookings.php?msg=Deleted");
        exit();
    }
}


if (isset($_GET['action']) && $_GET['action'] == 'approve' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $updateQuery = "UPDATE booking SET status = 'Approved' WHERE BookingID = '$id'";
    mysqli_query($conn, $updateQuery);
    header("Location: Bookings.php?msg=Approved");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Booking Requests - Admin</title>
    <link rel="stylesheet" href="../Stylesheets/Bookings-style.css" />
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2>Stall Admin</h2>
        </div>
        <nav class="sidebar-nav">
            <a href="Dashboard.php">Dashboard</a>     
            <a href="Bookings.php" class="active">Bookings</a>
            <a href="Stalls.php">Stalls</a>
            <a href="Categories.php">Categories</a>
            <a href="Users.php">Users</a>
        </nav>
    </aside>

    <div class="main">
        <header class="topbar">
            <h1>Booking Requests</h1>
            <div class="topbar-right">
                <div class="user-badge">Admin</div>
            </div>
        </header>

        <section class="panel">
            <div class="panel-header">
                <div>
                    <h2>Pending & Recent Requests</h2>
                    <p class="subtext">Manage stall booking requests directly from database.</p>
                </div>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>Stall Type</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // ডাটাবেস থেকে তথ্য তুলে আনা
                        $fetchQuery = "SELECT * FROM booking ORDER BY BookingID DESC";
                        $result = mysqli_query($conn, $fetchQuery);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['BookingID']; ?></td>
                                    <td><?php echo htmlspecialchars($row['Username']); ?></td>
                                    <td><?php echo htmlspecialchars($row['phonenumber']); ?></td>
                                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                                    <td><?php echo htmlspecialchars($row['location']); ?></td>
                                    <td><?php echo htmlspecialchars($row['stall']); ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td>৳ <?php echo number_format($row['amount']); ?></td>
                                    <td class="actions">
                                        <button class="btn-sm btn-approve" onclick="alert('Booking Approved!')">Approve</button>
                                        
                                        <a href="Bookings.php?action=reject&id=<?php echo $row['BookingID']; ?>" 
                                           class="btn-sm btn-reject" 
                                           style="text-decoration: none;"
                                           onclick="return confirm('Are you sure you want to reject and delete this booking?')">
                                           Reject
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='9' style='text-align:center;'>No bookings found in database.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>
</html>