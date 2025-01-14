
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
            <h1>Create a New User</h1>
         
    
            <section class="content">
                    <form method="POST" action="{{ route('admin.update', $user->id) }}">
                      @csrf
                <!-- Add Admin Section -->
                <div class="add-admin">
                    <h2>Ensert admin inforamtion:</h2>
                    <form id="add-admin-form">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" placeholder="Enter admin name" value="{{$user->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Enter admin email"value="{{$user->email}}" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Phone Number:</label>
                            <input type="text" id="phone_number" name="phone_number" placeholder="Enter admin phone number"value="{{$user->phone_number}}" required>
                        </div>
                        <div class="password-container">
                            <label for="name">Password:</label>
                            <input type="password" id="password" name="password" placeholder="Enter admin password"value="{{$user->password}}" required>
                            <span class="toggle-eye" onclick="togglePassword()">👁</span>
                        </div>
                    
                        <br><br>
                        <script>
                            function togglePassword() {
                                const passwordField = document.getElementById("password");
                                const toggleIcon = document.querySelector(".toggle-eye");
                                
                                if (passwordField.type === "password") {
                                    passwordField.type = "text";
                                    toggleIcon.textContent = "👁‍🗨"; // Switch to "eye closed" icon
                                } else {
                                    passwordField.type = "password";
                                    toggleIcon.textContent = "👁"; // Switch back to "eye open" icon
                                }
                            }
                        </script>
                      <button type="submit">Add Admin</button>
                      </div>
                      
                    </form>
                </div>
            </form>
            </body>
            </html>