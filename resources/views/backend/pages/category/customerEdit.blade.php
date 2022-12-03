@extends('backend.master')
@section('content')
<div class="container">
  
<a href="{{route('customer.show')}}" class="btn btn-info">Form</a>
<br></br>
<form class="form" action="{{route('customer.update',$customerEdit->id)}}" method="POST">
    @method('PUT')
 @csrf
 <div class="form-floating">
  <input type="text" name="Name" class="form-control" value="{{$customerEdit->Name}}" placeholder="Enter your name">
  <label for="floating">Customer Name :</label>
 </div>

 <div class="form-floating mt-5">
  <input type="text" name="Details" class="form-control" value="{{$customerEdit->Details}}" placeholder="Enter your name">
  <label for="floating">Customer Details :</label>
 </div>

 <div class="form-floating mt-5">
  <input type="text" name="Address" class="form-control" value="{{$customerEdit->Address}}" placeholder="Enter your name">
  <label for="floating">Customer Address :</label>
 </div>

 <div class="form-floating mt-5">
  <input type="text" name="Mobile_Number" class="form-control"value="{{$customerEdit->Mobile_Number}}" placeholder="Enter your name">
  <label for="floating">Customer phone :</label>
 </div>
 <div class="mt-5">
  <button type="submit" class="btn btn-primary">Update</button>
 </div>
  
</form>
</div>
@endsection