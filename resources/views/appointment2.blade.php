@extends('index')
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
<script src="https://cdn.tailwindcss.com"></script>
@section('content')
<br>
<div class="border-b border-gray-900/10 pb-12">
    <label for="age" class="block text-sm font-medium  text-gray-900">Age</label>
    <div class="mt-2">
      <input type="text" name="age" id="age" style="width: 300px;" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>
    <fieldset>
        <legend style="margin-top:50px" class="text-sm font-semibold leading-8 text-gray-900">Gender</legend>
        <div class="mt-6 space-y-6">
          <div class="flex items-center">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Female
                </label>
              </div>
          </div>
          <div class="flex items-center">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Male
                </label>
              </div>
        </div>
      </fieldset>
    
  <br>   
       <h4>Please choose a date and time for your appointment</h4>   
       <br>     
          <input type="text" name="datetimes" />
          <script src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
<script>
$(function() {
  $('input[name="datetimes"]').daterangepicker({
    timePicker: true,
    singleDatePicker: true, // Set to true to allow selecting only a single date
    startDate: moment().startOf('hour'),
    locale: {
      format: 'M/DD hh:mm A'
    }
  });
});
</script>
</div>
  <form  method="POST" action="{{url('/make appointment')}}">
    @csrf
    <div class="mt-6 flex items-center justify-end">
     <button type="submit" style="margin-right: 10px;" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</button>
     <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
</form>

@endsection