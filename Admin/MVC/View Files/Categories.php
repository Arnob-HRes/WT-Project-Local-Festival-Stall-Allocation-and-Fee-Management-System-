<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Categories - Admin</title>
    <link rel="stylesheet" href="../Stylesheets/Categories-style.css" />
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
            <a href="Categories.php" class="active">Categories</a>
            <a href="Payments.php">Payments</a>
            <a href="Users.php">Users</a>
        </nav>
    </aside>

    <div class="main">
        <header class="topbar">
            <h1>Categories</h1>
            <div class="topbar-right">
                <input type="text" id="cat-search" placeholder="Search category..." />
                <div class="user-badge">Admin</div>
            </div>
        </header>

        <section class="layout">
            <!-- Category list -->
            <div class="panel panel-table">
                <div class="panel-header">
                    <div>
                        <h2>All Categories</h2>
                        <p class="subtext">Manage stall categories used in bookings and stalls.</p>
                    </div>
                </div>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Total Stalls</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="cat-body">
                            <!-- JS diye rows asbe -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Add new category form -->
            <div class="panel panel-form">
                <div class="panel-header">
                    <div>
                        <h2>Add New Category</h2>
                        <p class="subtext">Create or update stall categories.</p>
                    </div>
                </div>

                <form class="form" id="cat-form">
                    <div class="form-group">
                        <label for="cat-name">Category Name</label>
                        <input type="text" id="cat-name" name="name" placeholder="e.g., Electronics" />
                        <small class="error" id="err-name"></small>
                    </div>

                    <div class="form-group">
                        <label for="cat-slug">Slug (optional)</label>
                        <input type="text" id="cat-slug" name="slug" placeholder="e.g., electronics" />
                        <span class="help-text">If empty, slug will be generated from name.</span>
                    </div>

                    <div class="form-group">
                        <label for="cat-description">Description</label>
                        <textarea id="cat-description" name="description" rows="3"
                            placeholder="Short description of this category."></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="cat-status">Status</label>
                            <select id="cat-status" name="status">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cat-order">Display Order</label>
                            <input type="number" id="cat-order" name="order" placeholder="1" />
                        </div>
                    </div>


                    <div class="form-actions">
                        <button type="button" class="btn-secondary" id="btn-clear">Clear</button>
                        <button type="submit" class="btn-primary">Save Category</button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script src="../JavaScript_Files/Categories.js"></script>
</body>
</html>
