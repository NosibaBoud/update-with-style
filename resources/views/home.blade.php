@extends('index')

@section('content')
<head>
  <!--styles-->
  <link href="/css/main.css" rel="stylesheet">
</head>
  <body>
    <header>
      <div class="content">
        <img src="{{URL('/images/image2.jpg')}}" alt="">
  </div>
  
</header>
<div class="centered-text">
  <h1>Welcome to Our Website</h1>
  <p>Your trusted partner in medical laboratories.</p>
</div>
   
<section class="about-section">
  <div class="about-content">
      <div class="about-text">
          <h2>About Us</h2>
          <p>
              Welcome to our laboratory, where precision meets innovation. 
              We are dedicated to providing accurate and reliable testing 
              services, powered by state-of-the-art technology and a commitment 
              to excellence.
          </p>
          <p>
              Our team of experts ensures the highest standards in diagnostics, 
              empowering you with the health insights you need.
          </p>
      </div>
      <div class="about-image">
        <img src="{{URL('/images/lab.jpg')}}" alt="">
      </div>
  </div>
</section>
<section class="services-section">
  <div class="services-container">
      <!-- Image Section -->
      <div class="services-image">
        <img src="{{URL('/images/services.jpg')}}" alt="">
      </div>
      <!-- Services List -->
      <div class="services-content">
          <h2>Our Services</h2>
          <ul>
              <li>Blood Testing and Analysis</li>
              <li>Pathology and Diagnostics</li>
              <li>COVID-19 Testing</li>
              <li>Microbiology Services</li>
              <li>Genetic Testing and Counseling</li>
              <li>Health Checkup Packages</li>
          </ul>
      </div>
  </div>
</section>
<section class="location-section">
  <div class="location-container">
      <!-- Location and Work Time -->
      <div class="location-content">
          <h2>Our Location</h2>
          <p>123 Medical Lane, Health City, MediLand</p>
          <h3>Work Hours</h3>
          <p>Monday - Friday: 8:00 AM - 6:00 PM</p>
          <p>Saturday: 8:00 AM - 2:00 PM</p>
          <p>Sunday: Closed</p>
      </div>
      <!-- Image -->
      <div class="location-image">
        <img src="{{URL('/images/services.jpg')}}" alt="">
      </div>
  </div>
</section>
<footer class="footer">
  <div class="contact-us">
      <h3>Contact Us</h3>
      <ul>
          <li><span class="icon">📞</span> Phone: +123 456 7890</li>
          <li><span class="icon">📘</span> Facebook: <a href="#">@example</a></li>
          <li><span class="icon">📸</span> Instagram: <a href="#">@example</a></li>
      </ul>
  </div>
</footer>
  </body>
  
@endsection