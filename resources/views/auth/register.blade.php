<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@extends('layouts.app')
<head>  <!--styles-->
    <link href="/css/log.css" rel="stylesheet"></head>
  
    @section('content')
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Register Now</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <form class="login-form">
                            <div class="form-group">
                            <label for="name" class="text-uppercase">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('email') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="name" class="text-uppercase">{{ __('phone number') }}</label>
                                <input id="name" type="text" class="form-control @error('email') is-invalid @enderror" name="phone number" value="{{ old('phone number') }}">
                                @error('phone number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="text-uppercase">{{ __('Email Address') }}</label>
                                <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="form-group">
                            <label for="password" class="text-uppercase">{{ __('Password') }}</label>
                                <input id="password" type="password"  class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label for="password-confirm" class="text-uppercase">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        <div class="form-check">
                                <button type="submit" class="btn btn-login float-right">
                                    {{ __('Register') }}
                                </button>
                            </div>
                    </form>
                </form>
                <div class="col-md-8 banner-sec">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                         <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                    <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://www.oneeducation.org.uk/wp-content/uploads/2020/08/Become-a-Medical-Laboratory-Technician.png" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                    <h2>This is Heaven</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>	
          </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{URL('/images/image-55.jpg')}}" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                    <h2>This is Heaven</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>	
            </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://media.istockphoto.com/id/1692415035/photo/scientists-are-testing-new-drugs-in-the-lab-to-test-some-emerging-diseases-in-research-and.jpg?s=612x612&w=0&k=20&c=Z6rn1XdW0x6147hqP4azROikO-cXUbxWY42YxEsPzHs=" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                    <h2>This is Heaven</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>	
            </div>
          </div>
                    </div>	   
                    
                </div>
            </div>
        </div>
    </section>
@endsection
