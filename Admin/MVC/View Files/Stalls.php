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
            <a href="index.html">Dashboard</a>
            <a href="bookings.html">Bookings</a>
            <a href="stalls.html" class="active">Stalls</a>
            <a href="#">Categories</a>
            <a href="#">Payments</a>
            <a href="#">Users</a>
            <a href="#">Settings</a>
        </nav>
    </aside>

    <div class="main">
        <header class="topbar">
            <h1>Stalls</h1>
            <div class="topbar-right">
                <select>
                    <option value="all">All Status</option>
                    <option value="available">Available</option>
                    <option value="booked">Booked</option>
                    <option value="maintenance">Maintenance</option>
                </select>
                <select>
                    <option value="all">All Categories</option>
                    <option value="food">Food</option>
                    <option value="art">Art</option>
                    <option value="toys">Toys</option>
                    <option value="accessories">Accessories</option>
                    <option value="handcraft">Hand Craft</option>
                    <option value="arcade">Arcade</option>
                </select>
                <input type="text" placeholder="Search stall ID or zone..." />
                <div class="user-badge">Admin</div>
            </div>
        </header>

        <section class="layout">
            <!-- Stall list -->
            <div class="panel panel-table">
                <div class="panel-header">
                    <div>
                        <h2>All Stalls</h2>
                        <p class="subtext">List of all stalls with basic details.</p>
                    </div>
                </div>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Stall ID</th>
                                <th>Zone</th>
                                <th>Category</th>
                                <th>Size</th>
                                <th>Base Fee (৳)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A-01</td>
                                <td>Zone A</td>
                                <td>Food</td>
                                <td>3m x 3m</td>
                                <td>2500</td>
                                <td><span class="badge badge-available">Available</span></td>
                            </tr>
                            <tr>
                                <td>A-02</td>
                                <td>Zone A</td>
                                <td>Food</td>
                                <td>3m x 3m</td>
                                <td>2500</td>
                                <td><span class="badge badge-booked">Booked</span></td>
                            </tr>
                            <tr>
                                <td>B-03</td>
                                <td>Zone B</td>
                                <td>Hand Craft</td>
                                <td>2m x 3m</td>
                                <td>2200</td>
                                <td><span class="badge badge-available">Available</span></td>
                            </tr>
                            <tr>
                                <td>C-07</td>
                                <td>Zone C</td>
                                <td>Arcade</td>
                                <td>4m x 4m</td>
                                <td>4000</td>
                                <td><span class="badge badge-maintenance">Maintenance</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-footer">
                    <span>Showing 1–4 of 30 stalls</span>
                    <div class="pagination">
                        <button class="btn-page">&laquo;</button>
                        <button class="btn-page active">1</button>
                        <button class="btn-page">2</button>
                        <button class="btn-page">3</button>
                        <button class="btn-page">&raquo;</button>
                    </div>
                </div>
            </div>

            <!-- Add new stall form -->
            <form class="form" enctype="multipart/form-data">
    <div class="form-group">
        <label for="stall-id">Stall ID</label>
        <input type="text" id="stall-id" placeholder="e.g., A-10" />
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="zone">Zone</label>
            <select id="zone">
                <option value="">Select zone</option>
                <option>Zone A</option>
                <option>Zone B</option>
                <option>Zone C</option>
            </select>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select id="category">
                <option value="">Select category</option>
                <option>Food</option>
                <option>Art</option>
                <option>Toys</option>
                <option>Accessories</option>
                <option>Hand Craft</option>
                <option>Arcade</option>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="width">Width (m)</label>
            <input type="number" id="width" placeholder="3" />
        </div>
        <div class="form-group">
            <label for="length">Length (m)</label>
            <input type="number" id="length" placeholder="3" />
        </div>
        <div class="form-group">
            <label for="base-fee">Base Fee (৳)</label>
            <input type="number" id="base-fee" placeholder="2500" />
        </div>
    </div>

    <!-- New: photo upload -->
    <div class="form-group">
        <label for="photo">Stall Photo</label>
        <div class="file-field">
            <input type="file" id="photo" accept="image/*" />
            <span class="file-help">Upload a clear image of the stall (jpg, png)</span>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="status">Status</label>
            <select id="status">
                <option>Available</option>
                <option>Booked</option>
                <option>Maintenance</option>
            </select>
        </div>
        <div class="form-group">
            <label for="priority">Priority / Visibility</label>
            <select id="priority">
                <option>Normal</option>
                <option>Featured</option>
                <option>Hidden</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="description">Description / Notes</label>
        <textarea id="description" rows="3" placeholder="Near gate, corner stall, electricity, water, etc."></textarea>
    </div>

    <div class="form-actions">
        <button type="button" class="btn-secondary">Clear</button>
        <button type="submit" class="btn-primary">Add Stall</button>
    </div>
</form>

        </section>
    </div>
</body>
</html>
