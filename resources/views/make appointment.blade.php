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
        <form class="appointment-form" action="/store/appointment/" method="post">
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
                <label for="phone_number">Date of Birth</label>
            <div style="display: flex; gap: 10px; align-items: center;">
                <!-- Day Selection -->
                <select name="day" required id="day">
                    <option value="" disabled selected>Day</option>
                    <!-- Generate days dynamically -->
                    <script>
                        for (let i = 1; i <= 31; i++) {
                            document.write(`<option value="${i}">${i}</option>`);
                        }
                    </script>
                </select>
            
                <!-- Month Selection -->
                <select name="month" required id="month">
                    <option value="" disabled selected>Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            
                <!-- Year Selection -->
                <select name="year" required id="year">
                    <option value="" disabled selected>Year</option>
                    <!-- Generate years dynamically -->
                    <script>
                        const currentYear = new Date().getFullYear();
                        for (let i = currentYear; i >= 1900; i--) {
                            document.write(`<option value="${i}">${i}</option>`);
                        }
                    </script>
                </select>
            </div>
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
