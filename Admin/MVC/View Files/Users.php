<?php

require_once('../Database_or_Model_Files/Database.php'); 
$conn = connectsql();

$sql = "SELECT Username, FullName, ContactNumber, Email, Address, ProfilePicture FROM user";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Users - Admin</title>
    <link rel="stylesheet" href="../Stylesheets/Users-style.css" />
</head>
<body>
   
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2>Stall Admin</h2>
        </div>
        <nav class="sidebar-nav">
            <a href="Dashboard.php">Dashboard</a>
            <a href="Bookings.php">Bookings</a>
            <a href="Stalls.php">Stalls</a>
            <a href="Categories.php">Categories</a>
            <a href="Payments.php">Payments</a>
            <a href="Users.php" class="active">Users</a>
        </nav>
    </aside>

    <div class="main">
        <header class="topbar">
            <h1>Users</h1>
            <div class="topbar-right">
                
                
                <input type="text" placeholder="Search name, phone, email..." />
                <div class="user-badge">Admin</div>
            </div>
        </header>

        <section class="layout" id="usersLayout">
            <div class="panel panel-table" id="userTablePanel">
                <div class="panel-header">
                    <div>
                        <h2>All Users</h2>
                        <p class="subtext">Manage renters, staff and admin accounts.</p>
                    </div>
                    <button class="btn-outline" id="addUserBtn">Add User</button>
                </div>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Profile Picture</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody id="userTableBody">
                            <?php if ($result && $result->num_rows > 0): ?>
                                <?php while($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($row['FullName'] ?? '-'); ?></td>
                                        <td><?php echo htmlspecialchars($row['Username'] ?? '-'); ?></td>
                                        <td><?php echo htmlspecialchars($row['ContactNumber'] ?? '-'); ?></td>
                                        <td><?php echo htmlspecialchars($row['Email'] ?? '-'); ?></td>
                                        <td><?php echo htmlspecialchars($row['Address'] ?? '-'); ?></td>
                                        <td>
                                            <?php if (!empty($row['ProfilePicture'])): ?>
                                                <img src="<?php echo htmlspecialchars($row['ProfilePicture']); ?>" width="40" alt="Profile">
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td><span class="tag role-user">User</span></td> <!-- Default Role -->
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr><td colspan="7" style="text-align:center;">No users found in database.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Form same রাখো, শুধু Role/Status optional -->
            <div class="panel panel-form" id="userFormPanel">
                <!-- Form content same -->
                <form class="form" id="addUserForm">
                    <div class="form-group">
                        <label for="u-username">Username</label>
                        <input type="text" name="u-username" id="u-username" required placeholder="Username" />
                    </div>
                    <div class="form-group">
                        <label for="u-fullname">Full Name</label>
                        <input type="text" name="u-fullname" id="u-fullname" required placeholder="Full Name" />
                    </div>
                    <div class="form-group">
                        <label for="u-email">Email</label>
                        <input type="email" name="u-email" id="u-email" required placeholder="email@example.com" />
                    </div>
                    <div class="form-group">
                        <label for="u-phone">Phone</label>
                        <input type="text" name="u-phone" id="u-phone" required placeholder="017xx-xxxxxx" />
                    </div>
                    <div class="form-group">
                        <label for="u-password">Password</label>
                        <input type="password" name="u-password" id="u-password" required placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label for="u-address">Address</label>
                        <input type="text" name="u-address" id="u-address" placeholder="Address" />
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn-secondary" id="cancelBtn">Cancel</button>
                        <button type="submit" class="btn-primary">Add User</button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script src="../JavaScript_Files/Users.js"></script>
</body>
</html>
