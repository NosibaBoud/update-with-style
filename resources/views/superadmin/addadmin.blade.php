<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="/css/superadminpages.css" rel="stylesheet">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar Navigation -->
        <nav class="sidebar">
            <h2> Add New Admin</h2>
            <ul>
                <li><a href="{{url('/add/admin')}}">Add New Admin</a></li>
                <li><a href="{{url('/manage/admins')}}">Manage Admins</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="main-content">
            <header>
                <h1>Add New Admin</h1>
            </header>
            <section class="content">
                <!-- Add Admin Section -->
                <div class="add-admin">
                    <h2>Ensert admin inforamtion:</h2>
                    <form id="add-admin-form">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" placeholder="Enter admin name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Enter admin email" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Phone Number:</label>
                            <input type="text" id="phone_number" name="phone_number" placeholder="Enter admin phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Password:</label>
                            <input type="text" id="password" name="password" placeholder="Enter admin password" required>
                        </div>
                        <button type="submit">Add Admin</button>
                    </form>
                </div>
            </body>
            </html>