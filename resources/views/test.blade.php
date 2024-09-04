@extends('index')
@section('content')  

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$test->name}}</h1>
    </div>
  </header>
<head class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900"></h1>
    </div>
  </head>
  <main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <div class="container">
  <div class="row align-items-start">
    <div class="col">
      <body>
      <div class="card">
  <h5 class="card-header"></h5>
  <div class="card-body">
  <h5 class="card-title">Details: {{$test->details}}</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a  class="btn btn-primary" href="{{url('/add_test',$test->id)}}">Add</a>
</main>
  </div>
</div>
@endsection




<h1></h1>
<!-- Display other details of the test -->
</body>
</html>