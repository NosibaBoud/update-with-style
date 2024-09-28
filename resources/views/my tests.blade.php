@extends('index')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@section('content') 
  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">My Tests</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
@if(!empty($tests))
        @foreach($tests as $test)
        <ul>{{$test->investigation->name}}</ul>
        @endforeach
        @if($tests->count() > 0)
        <form  method="POST" action="{{url('/make appointment')}}">
          @csrf
        
          <div class="card-body" style="text-align: right;">
          <div class="btn btn-primary">
            <button  type="submit">make home appointment</button>
        </div>
      </div>
      </form>
        @else
    <p>No tests selected yet.</p>
        @endif
@endif
    </div>
   
          
    

  
  </main>
@endsection
