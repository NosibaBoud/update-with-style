<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Investigations</title>
@extends('admindashboard.indexadmin')
@section('content')
<head>
    <link href="/css/adminpages.css" rel="stylesheet">
  </head>
    <div class="mx-auto max-w-8xl px-4 py-6 sm:px-6 lg:px-8 ">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Investigations</h1>
    </div>    
</br>
<div class="search-bar">
  <form  type="get" action="{{url('/investigation/search')}}">
    <input  type="search" name="search" placeholder="Search for a medical test...">
    <button type="submit">Search</button>
  </form>
</div>
<form  method="POST" action="{{url('/investigation/create')}}">
  @csrf
    <button class="button add">create new investigation</button>
</form>
 <!-- Success Message -->
 @if (session('success'))
 <div class="alert alert-success">
     {{ session('success') }}
 </div>
@endif
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="container">
    <div class="row align-items-center">
      <div class="col">
    </div>
        <br>
      
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                    @foreach($tests as $test)
                    <th scope="row">{{$test->id}}</th>
                <td>   
                    <div class="col">
                
                      <strong>{{$test->name}}</strong>
                    
                </div>
                   </td>
                   <td>
                    <div class="button-container">
                    <a href="/investigation/{{$test->id}}/edit">
                        <button  class="button edit">edit</button>
</a>

<!-- Delete Button -->
<form action="{{ route('investigation.delete', $test->id) }}" method="POST" style="display:inline;">
  @csrf
  @method('DELETE')
  <button class="button delete" onclick="return confirm('Are you sure you want to delete this investigation?')">Delete</button>
</form>
                    <a href="/investigation/{{$test->id}}">
                        <button class="button view">view</button>
                      </a>
                </div>
                </td>
              </tr>
            </tbody>
                  @endforeach
          </table>
      </div>
      <br>
     <div>
        <br>
      {{$tests->Links()}}
      </div>
  
      </div>
      <div>
    </main>
  </div>
                   
    
</body>
@endsection