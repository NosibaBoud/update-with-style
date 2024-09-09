@extends('index')
@section('content') 


  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">My Tests</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
@if(!empty($tests))
    <ul>
        @foreach($tests as $test)
            <li>{{ $test }}</li>
        @endforeach
    </ul>
    <a  class="btn btn-primary" href="{{url('/make appointment')}}">make home appointment</a>
@else
    <p>No tests selected yet.</p>
@endif

    </div>
  </main>
@endsection
