@extends('index')
@section('content') 

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Results</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form class="row g-3">
  
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Receipt number</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="enter Receipt number">
  </div>
  <div class="col-auto">
  <button type="button" class="btn btn-primary">ok</button>
  </div>
</form>
    </div>
  </main>
</div>

</body>
</html>
@endsection