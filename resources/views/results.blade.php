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
      <form class="search-form" action="#" method="get">
          <label for="testSearch"> Please Enter Result ID</label>
          <input type="text" id="testSearch" name="query" placeholder="Search by Test ID or Patient Name..." required>
          <button type="submit">Search</button>
      </form>
  </main>
</body>
</html>
@endsection