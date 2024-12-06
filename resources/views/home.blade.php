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
        <h1>welcome to our <span class="primary-text" > laboratory </span>website</h1>
        <p> here we provide all you want to know about our medical tests </p>
      </div>
    </header>
  <main>
 <!--about section start-->
 <section id="about">
  <div class="container">
    <div class="title">
      <p>At our Medical Lab, we are dedicated to providing top-quality healthcare services to our patients.</p>
      <p> With a commitment to excellence and precision with<span class="primary-txt"> More than 10+ Years of experiance.</span></P>
    <!-- <hr>-->
      <h1>-</h1>
    </div>
    <div class="about-content">
      
        <h1>About Us</h1>
        <p>
        Our online platform allows you to conveniently access your test results from the comfort of your home.
        </p>
        <p>Also  offer a seamless appointment scheduling system that empowers you to book appointments with our experienced healthcare professionals with ease.
        </p>
      </div>
    </div>
    <header>
     
    </header>

 </section>

  </main>
  </body>
  
@endsection