@extends('index')
@section('content') 
<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matching results</title>
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1>Matching results</h1>
<br>
    <div class="search-bar">
      <form  type="get" action="{{url('/search')}}">
        <input  type="search" name="search" placeholder="Search for a medical test...">
        <button type="submit">Search</button>
      </form>
    </div>
    @foreach($tests as $test)
    <div class="test-list">
      <a href="/test/{{$test->id}}">
        <div class="test-item"><strong>{{$test->name}}</strong></div>
      </a>
    </div>
    @endforeach
</div> 
</body>

</html>
   @endsection