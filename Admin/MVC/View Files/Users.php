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

         <section class="layout">
            
            <div class="panel panel-table">
                <div class="panel-header">
                    <div>
                        <h2>All Users</h2>
                        <p class="subtext">Manage renters, staff and admin accounts.</p>
                    </div>
                    <button class="btn-outline">Add User</button>
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

                        <tbody>
                            <tr>
                                <td>Rahim Uddin</td>
                                <td>Rahim Store</td>
                                <td>01711-000000</td>
                                <td><span class="tag role-renter">Renter</span></td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td>8</td>
                                <td>18,500</td>
                            </tr>

                            <tr>
                                <td>Nishi Akter</td>
                                <td>Nishi Crafts</td>
                                <td>01822-111111</td>
                                <td><span class="tag role-renter">Renter</span></td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td>5</td>
                                <td>12,000</td>
                            </tr>
                            <tr>
                                <td>FunLand BD</td>
                                <td>FunLand</td>
                                <td>01933-222222</td>
                                <td><span class="tag role-renter">Renter</span></td>
                                <td><span class="badge badge-suspended">Suspended</span></td>
                                <td>3</td>
                                <td>7,000</td>
                            </tr>
                            <tr>
                                <td>Aminul Islam</td>
                                <td>Event Staff</td>
                                <td>01777-333333</td>
                                <td><span class="tag role-staff">Staff</span></td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Super Admin</td>
                                <td>Management</td>
                                <td>admin@example.com</td>
                                <td><span class="tag role-admin">Admin</span></td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                 </div>
            </div>

            <!-- User details / edit form -->
            <div class="panel panel-form">
                <div class="panel-header">
                    <div>
                        <h2>User Details</h2>
                        <p class="subtext">View and update selected user info.</p>
                    </div>
                </div>








        