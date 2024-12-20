@extends('index')
@section('content') 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Appointment Booking</title>
    <link href="/css/style.css" rel="stylesheet">
  
</head>
<body>
  <div class="container">
    <h1>Book a Home Appointment</h1>
     
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <main class="form-container">
        <form class="appointment-form" action="/store/appointment" method="post">
                @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" required>
            </div>
            <div class="form-group">
            </di>
            <div class="form-group">
                <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter admin email" required>
        </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="tel" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
            </div>
           
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter your address" required>
            </div>
            <div class="form-group">
                <label for="appointmentDate">Date</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="appointmentTime">Time</label>
                <input type="time" id="time" name="time" required>
            </div>
            <button type="submit">Book Appointment</button>
        </form>
    </main>
  </div>
</body>
</html>

  
@endsection
