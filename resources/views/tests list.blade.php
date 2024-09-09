@extends('index')

@section('content') 
  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">medical test list</h1>
    </div>
  </header>
  <main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <div class="container">
  <div class="row align-items-center">
    <div class="col">
      <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search by name">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
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