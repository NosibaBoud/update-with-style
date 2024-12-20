@extends('index')
@section('content') 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Results</title>
    <!--styles-->
  <link href="/css/style.css" rel="stylesheet">
</head>
<body>
  <header class="header">
      <h1>Search Medical Test Results</h1>
  </header>
  
  <main class="search-container">
      <form class="search-form" action="{{ route('pdf.search') }}" method="GET">
        @csrf
          <label for="testSearch"> Please Enter Result ID</label>
          <input type="text" id="receipt_number" name="receipt_number" placeholder="Search by Receipt Number of Result ..." required>
          <form action="{{ url('/pdfs/$pdf->id/view')}}" method="GET">
            @csrf
          <button type="submit">view</button>
        </form>
      </form>
</main>
</body>
</html>
@endsection