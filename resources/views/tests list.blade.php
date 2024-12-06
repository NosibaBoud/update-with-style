@extends('index')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@section('content') 

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">medical test list</h1>
    </div>
  </header>
  <main>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <div class="container">
  <div class="row align-items-center">
    <div class="col">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
     <!-- <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search by name">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>-->
      <br>
      <div class="space-y-4">
      @foreach($tests as $test)
      <div class="col">
    <div class="card">
  <div class="card-body">
        <a href="/test/{{$test->id}}"class="block px-4 py-6 border border-gray-300 rounded-lg">
        <strong>{{$test->name}}</strong>
      </a>
      </div>
</div>
    </div>
      @endforeach
      </div>
    </div>
    <br>
   <div>
    {{$tests->Links()}}
    </div>
    
    </div>
    <div>
  </main>
</div>
</body>

</html>
   @endsection