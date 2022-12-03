@extends('backend.master')
@section('content')
<form class="form" action="{{route('napa-form')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="text">Name:</label>
    <input type="text" class="form-control" placeholder="Enter your Name" id="name" Name="Name">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd"
     Name="Password">
  </div>

  <div class="form-group">
    <label for="pwd">Mobile Number:</label>
    <input type="number" class="form-control" placeholder="Enter phone Number" id="pwd"
     Name="Mobile_Number">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
    

