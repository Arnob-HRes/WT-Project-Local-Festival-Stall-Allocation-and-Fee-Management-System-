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
            <a href="index.html">Dashboard</a>
            <a href="bookings.html">Bookings</a>
            <a href="stalls.html">Stalls</a>
            <a href="categories.html" class="active">Categories</a>
            <a href="#">Payments</a>
            <a href="#">Users</a>
            <a href="#">Settings</a>
        </nav>
    </aside>

    <div class="main">
        <header class="topbar">
            <h1>Categories</h1>
            <div class="topbar-right">
                <input type="text" placeholder="Search category..." />
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
                        <tbody>
                            <tr>
                                <td>Food</td>
                                <td>food</td>
                                <td>All kinds of food and beverages stalls</td>
                                <td>12</td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td class="actions">
                                    <button class="btn-sm btn-neutral">Edit</button>
                                    <button class="btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Art</td>
                                <td>art</td>
                                <td>Handmade and creative art stalls</td>
                                <td>6</td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td class="actions">
                                    <button class="btn-sm btn-neutral">Edit</button>
                                    <button class="btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Toys</td>
                                <td>toys</td>
                                <td>Toys and kids’ items</td>
                                <td>4</td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td class="actions">
                                    <button class="btn-sm btn-neutral">Edit</button>
                                    <button class="btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Accessories</td>
                                <td>accessories</td>
                                <td>Fashion, bags, jewellery, etc.</td>
                                <td>5</td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td class="actions">
                                    <button class="btn-sm btn-neutral">Edit</button>
                                    <button class="btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Hand Craft</td>
                                <td>hand-craft</td>
                                <td>Hand crafted items and souvenirs</td>
                                <td>3</td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td class="actions">
                                    <button class="btn-sm btn-neutral">Edit</button>
                                    <button class="btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Arcade</td>
                                <td>arcade</td>
                                <td>Games and entertainment (rides, VR, etc.)</td>
                                <td>2</td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td class="actions">
                                    <button class="btn-sm btn-neutral">Edit</button>
                                    <button class="btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
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

                <form class="form">
                    <div class="form-group">
                        <label for="cat-name">Category Name</label>
                        <input type="text" id="cat-name" placeholder="e.g., Electronics" />
                    </div>

                    <div class="form-group">
                        <label for="cat-slug">Slug (optional)</label>
                        <input type="text" id="cat-slug" placeholder="e.g., electronics" />
                        <span class="help-text">If empty, slug will be generated from name.</span>
                    </div>

                    <div class="form-group">
                        <label for="cat-description">Description</label>
                        <textarea id="cat-description" rows="3" placeholder="Short description of this category."></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="cat-status">Status</label>
                            <select id="cat-status">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cat-order">Display Order</label>
                            <input type="number" id="cat-order" placeholder="1" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cat-color">Color Tag (optional)</label>
                        <input type="color" id="cat-color" value="#2563eb" />
                        <span class="help-text">Used for icons / labels in UI.</span>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-secondary">Clear</button>
                        <button type="submit" class="btn-primary">Save Category</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>
</html>
