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

        