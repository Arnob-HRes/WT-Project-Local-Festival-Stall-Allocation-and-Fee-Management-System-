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
            <a href="Payments.php">Payments</a>
            <a href="Users.php">Users</a>
            
        </nav>
    </aside>

    
    <div class="main">
        
        <header class="topbar">
            <h1>Dashboard</h1>
            <div class="topbar-right">
                <input type="text" placeholder="Search..." />
                <div class="user-badge">Admin</div>
            </div>
        </header>

        <!-- Overview cards -->
        <section class="cards">
            <div class="card">
                <h3>Total Bookings</h3>
                <p>128</p>
            </div>
            <div class="card">
                <h3>Pending Requests</h3>
                <p>12</p>
            </div>
            <div class="card">
                <h3>Available Stalls</h3>
                <p>34</p>
            </div>
            <div class="card">
                <h3>Today’s Revenue</h3>
                <p>৳ 25,000</p>
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
                        <tr>
                            <td>Rahim Store</td>
                            <td>A-12</td>
                            <td>Food</td>
                            <td>2026-01-05</td>
                            <td>10:00 - 16:00</td>
                            <td>৳ 2,500</td>
                            <td><span class="badge badge-pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>Nishi Crafts</td>
                            <td>B-03</td>
                            <td>Hand Craft</td>
                            <td>2026-01-06</td>
                            <td>16:00 - 22:00</td>
                            <td>৳ 3,000</td>
                            <td><span class="badge badge-approved">Approved</span></td>
                        </tr>
                        <tr>
                            <td>FunLand</td>
                            <td>C-07</td>
                            <td>Arcade</td>
                            <td>2026-01-07</td>
                            <td>10:00 - 22:00</td>
                            <td>৳ 5,000</td>
                            <td><span class="badge badge-rejected">Rejected</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>
</html>
