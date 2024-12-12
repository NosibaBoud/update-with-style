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
    <main class="form-container">
        <form class="appointment-form" action="#" method="post">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
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
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" placeholder="Enter your age" min="0" required>
            </div>
            <div class="form-group">
                <label for="appointmentDate">Date</label>
                <input type="date" id="appointmentDate" name="appointmentDate" required>
            </div>
            <div class="form-group">
                <label for="appointmentTime">Time</label>
                <input type="time" id="appointmentTime" name="appointmentTime" required>
            </div>
            <button type="submit">Book Appointment</button>
        </form>
    </main>
  </div>
</body>
</html>

  
@endsection
