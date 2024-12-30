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
            <h2>Admin Dashboard</h2>
            <ul>
                <li><a href="{{url('/add/admin')}}">Add New Admin</a></li>
                <li><a href="{{url('/manage/admins')}}">Manage Admins</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>  
        
        <!-- Main Content -->
        <div class="main-content">
            <header>
                <h1>superadmin name</h1>
            </header>
            <section class="content">
                <!-- Admin List Section -->
                <div class="admin-list">
                    <h2>Admin List</h2>
                    <br>
                    @if ($users->isEmpty())
                        <p>No admins found.</p>
                    @else
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone number</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                              
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone_number}}</td>
                                <td>{{$user->role}}</td>
                                
                                <td>
                                    <div class="button-container">
                                    <form action="{{ route('admin.delete',$user) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <button class="delete-btn">Delete</button> 
                                    </form>
                                    <a href="{{url('/update')}}">
                                    <button class="update-btn">Update</button>
                                </a>
                            </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </section>
        </div>
    </div>
</body>
</html>