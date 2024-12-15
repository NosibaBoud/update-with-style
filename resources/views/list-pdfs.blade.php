<!DOCTYPE html>
<html>
<head>
    <title>Search PDF by Receipt Number</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Search PDF by Receipt Number</h2>
        <form action="{{ route('pdf.search') }}" method="GET">
            @csrf
            <div class="mb-3">
                <label for="receipt_number" class="form-label">Receipt Number</label>
                <input type="text" class="form-control" id="receipt_number" name="receipt_number" placeholder="Enter receipt number" required>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        @if (isset($pdf))
            <div class="mt-4">
                <h3>Search Result:</h3>
                <p><strong>Receipt Number:</strong> {{ $pdf->receipt_number }}</p>
                <a href="{{ asset('storage/' . $pdf->file_path) }}" target="_blank" class="btn btn-info">View PDF</a>
            </div>
        @elseif (isset($noResult))
            <div class="mt-4 text-danger">
                <p>No PDF found for the provided receipt number.</p>
            </div>
        @endif
    </div>
</body>
</html>