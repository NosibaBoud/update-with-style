
@extends('admindashboard.indexadmin')
@section('content')
<script src="https://cdn.tailwindcss.com"></script>

    <div class="form-row">
      <div class="col">
        <h4>Insert investigation name</h4>
        <input type="text" class="form-control" placeholder="investigation name">
      </div>
      <div class="col">
        <h4>Insert investigation details</h4>
        <input type="text" class="form-control" placeholder="Details">
      </div>
    </div>

</form>

@endsection