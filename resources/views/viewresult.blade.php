@extends('index')
@section('content') 

<head>
    <title>Search Result</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
@if (isset($pdf))
<div class="card">
        <h2>Search Result</h2>
    <p><strong>Receipt Number:</strong> {{ $pdf->receipt_number }}</p>
    <a href="{{ asset('storage/' . $pdf->file_path) }}" target="_blank"  class="btn-view">View Result</a>
</div>
@elseif (isset($noResult))
    <p> <div class="card">
        <h2>Warning</h2>
        <p>Sorry, the request may not be Ready or unpaid.</p>
        <form action="{{ url('/results')}}" method="GET">
            @csrf
        <button>Ok</button>
    </form>
    </div></p>
</div>
@endif
</body>
@endsection