<?php
require_once('../Database_or_Model_Files/Database.php'); 
$conn = connectsql();


$sql = "SELECT * FROM all_users ORDER BY id DESC";
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
                <select>
                    <option value="all">All Roles</option>
                    <option value="renter">Renter</option>
                    <option value="staff">Staff</option>
                    <option value="admin">Admin</option>
                </select>

                <select>
                    <option value="all">All Status</option>
                    <option value="active">Active</option>
                    <option value="suspended">Suspended</option>
                </select>

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
                                <th>Name</th>
                                <th>Business</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Total Bookings</th>
                                <th>Total Paid (৳)</th>
                            </tr>
                        </thead>
                        <tbody id="userTableBody">
                            <?php if ($result && $result->num_rows > 0): ?>
                                <?php while($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($row['Name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Business'] ? $row['Business'] : '-'); ?></td>
                                        <td><?php echo htmlspecialchars($row['Phone']); ?></td>
                                        <td><span class="tag role-<?php echo strtolower($row['Role']); ?>"><?php echo $row['Role']; ?></span></td>
                                        <td><span class="badge badge-<?php echo strtolower($row['Status']); ?>"><?php echo $row['Status']; ?></span></td>
                                        <td><?php echo $row['Total Bookings']; ?></td>
                                        <td><?php echo number_format($row['Total Paid(৳)']); ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr><td colspan="7" style="text-align:center;">No users found in database.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-form" id="userFormPanel">
                <div class="panel-header">
                    <div>
                        <h2 id="formTitle">Add New User</h2>
                        <p class="subtext">Enter details to register a new account.</p>
                    </div>
                </div>

                <form class="form" id="addUserForm">
                    <div class="form-group">
                        <label for="u-name">Full Name</label>
                        <input type="text" name="u-name" id="u-name" required placeholder="Full Name" />
                    </div>

                    <div class="form-group">
                        <label for="u-business">Business Name</label>
                        <input type="text" name="u-business" id="u-business" placeholder="Store Name" />
                    </div>

                    <div class="form-group">
                        <label for="u-email">Email</label>
                        <input type="email" name="u-email" id="u-email" required placeholder="email@example.com" />
                    </div>

                    <div class="form-group">
                        <label for="u-phone">Phone</label>
                        <input type="text" name="u-phone" id="u-phone" required placeholder="017xx-xxxxxx" />
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="u-role">Role</label>
                            <select name="u-role" id="u-role">
                                <option value="Renter">Renter</option>
                                <option value="Staff">Staff</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="u-status">Status</label>
                            <select name="u-status" id="u-status">
                                <option value="Active">Active</option>
                                <option value="Suspended">Suspended</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="u-notes">Internal Notes</label>
                        <textarea name="u-notes" id="u-notes" rows="3" placeholder="Additional notes..."></textarea>
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