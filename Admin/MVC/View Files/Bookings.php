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
            <a href="Payments.php">Payments</a>
            <a href="Users.php">Users</a>
            <a href="#">Settings</a>
        </nav>
    </aside>

    <div class="main">
        <header class="topbar">
            <h1>Booking Requests</h1>
            <div class="topbar-right">
                <select>
                    <option value="all">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
                <input type="text" placeholder="Search renter or stall..." />
                <div class="user-badge">Admin</div>
            </div>
        </header>

        <section class="panel">
            <div class="panel-header">
                <div>
                    <h2>Pending & Recent Requests</h2>
                    <p class="subtext">Approve or reject stall booking requests.</p>
                </div>
                <button class="btn-outline">Export CSV</button>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Renter Name</th>
                            <th>Phone</th>
                            <th>Stall Request</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Fee</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BK-1023</td>
                            <td>Rahim Store</td>
                            <td>01711-000000</td>
                            <td>A-12 (Zone A)</td>
                            <td>Food</td>
                            <td>2026-01-05</td>
                            <td>10:00 - 16:00</td>
                            <td>৳ 2,500</td>
                            <td><span class="badge badge-pending">Pending</span></td>
                            <td class="actions">
                                <button class="btn-sm btn-approve">Approve</button>
                                <button class="btn-sm btn-reject">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>BK-1022</td>
                            <td>Nishi Crafts</td>
                            <td>01822-111111</td>
                            <td>B-03 (Zone B)</td>
                            <td>Hand Craft</td>
                            <td>2026-01-06</td>
                            <td>16:00 - 22:00</td>
                            <td>৳ 3,000</td>
                            <td><span class="badge badge-approved">Approved</span></td>
                            <td class="actions">
                                <button class="btn-sm btn-neutral">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>BK-1021</td>
                            <td>FunLand</td>
                            <td>01933-222222</td>
                            <td>C-07 (Zone C)</td>
                            <td>Arcade</td>
                            <td>2026-01-07</td>
                            <td>10:00 - 22:00</td>
                            <td>৳ 5,000</td>
                            <td><span class="badge badge-rejected">Rejected</span></td>
                            <td class="actions">
                                <button class="btn-sm btn-neutral">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>BK-1020</td>
                            <td>Street Bites</td>
                            <td>01644-333333</td>
                            <td>A-05 (Zone A)</td>
                            <td>Food</td>
                            <td>2026-01-05</td>
                            <td>16:00 - 22:00</td>
                            <td>৳ 2,800</td>
                            <td><span class="badge badge-pending">Pending</span></td>
                            <td class="actions">
                                <button class="btn-sm btn-approve">Approve</button>
                                <button class="btn-sm btn-reject">Reject</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-footer">
                <span>Showing 1–4 of 24 requests</span>
                <div class="pagination">
                    <button class="btn-page">&laquo;</button>
                    <button class="btn-page active">1</button>
                    <button class="btn-page">2</button>
                    <button class="btn-page">3</button>
                    <button class="btn-page">&raquo;</button>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
