<?php
require_once '../Controller/StallsController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Stalls Management - Admin</title>
    <link rel="stylesheet" href="../Stylesheets/Stalls-style.css" />
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2>Stall Admin</h2>
        </div>
        <nav class="sidebar-nav">
            <a href="Dashboard.php">Dashboard</a>
            <a href="Bookings.php">Bookings</a>
            <a href="Stalls.php" class="active">Stalls</a>
            <a href="Categories.php">Categories</a>
            <a href="Payments.php">Payments</a>
            <a href="Users.php">Users</a>
            <a href="#">Settings</a>
        </nav>
    </aside>

    <div class="main">
        <header class="topbar">
            <h1>Stalls</h1>
            <div class="topbar-right">
                <select id="filter-status">
                    <option value="all">All Status</option>
                    <option value="Available">Available</option>
                    <option value="Booked">Booked</option>
                    <option value="Maintenance">Maintenance</option>
                </select>
                <select id="filter-category">
                    <option value="all">All Categories</option>
                    <option value="Food">Food</option>
                    <option value="Art">Art</option>
                    <option value="Toys">Toys</option>
                    <option value="Accessories">Accessories</option>
                    <option value="Hand Craft">Hand Craft</option>
                    <option value="Arcade">Arcade</option>
                </select>
                <input type="text" id="filter-search" placeholder="Search stall ID or zone..." />
                <div class="user-badge">Admin</div>
            </div>
        </header>

        <section class="layout">
            <div class="panel panel-table">
                <div class="panel-header">
                    <div>
                        <h2>All Stalls</h2>
                        <p class="subtext">List of all stalls with basic details.</p>
                    </div>
                </div>

                <div class="table-footer">
                    <span>Total stalls: <?= $totalStalls; ?></span>
                </div>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Stall ID</th>
                                <th>Zone</th>
                                <th>Category</th>
                                <th>Size</th>
                                <th>Photo</th>
                                <th>Base Fee (৳)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="stalls-body">
                            <!-- Ajax diye rows asbe -->
                        </tbody>
                    </table>
                </div>
            </div>

            
            <form class="form" method="post" action="Stalls.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="stall-id">Stall ID</label>
                    <input type="text" id="stall-id" name="stall_id" placeholder="e.g., A-10" required />
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="zone">Zone</label>
                        <select id="zone" name="zone" required>
                            <option value="">Select zone</option>
                            <option value="Zone A">Zone A</option>
                            <option value="Zone B">Zone B</option>
                            <option value="Zone C">Zone C</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select id="category" name="category" required>
                            <option value="">Select category</option>
                            <option value="Food">Food</option>
                            <option value="Art">Art</option>
                            <option value="Toys">Toys</option>
                            <option value="Accessories">Accessories</option>
                            <option value="Hand Craft">Hand Craft</option>
                            <option value="Arcade">Arcade</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="width">Width (m)</label>
                        <input type="number" id="width" name="width" placeholder="3" min="1" required />
                    </div>
                    <div class="form-group">
                        <label for="length">Length (m)</label>
                        <input type="number" id="length" name="length" placeholder="3" min="1" required />
                    </div>
                    <div class="form-group">
                        <label for="base-fee">Base Fee</label>
                        <input type="number" id="base-fee" name="base_fee" placeholder="2500" min="1" required />
                    </div>
                </div>

                <div class="form-group">
                    <label for="photo">Stall Photo</label>
                    <div class="file-field">
                        <input type="file" id="photo" name="photo" accept="image/*" />
                        <span class="file-help">Upload a clear image of the stall (jpg, png)</span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" name="status">
                            <option value="Available">Available</option>
                            <option value="Booked">Booked</option>
                            <option value="Maintenance">Maintenance</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="priority">Priority / Visibility</label>
                        <select id="priority" name="priority">
                            <option value="Normal">Normal</option>
                            <option value="Featured">Featured</option>
                            <option value="Hidden">Hidden</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description / Notes</label>
                    <textarea id="description" name="description" rows="3"
                        placeholder="Near gate, corner stall, electricity, water, etc."></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-primary">Add Stall</button> 
                </div>
            </form>
        </section>
    </div>

    <script src="../JavaScript Files/stalls.js"></script>
</body>
</html>
