@extends('backend.master')
@section('content')

<div class="container">
<a href="{{route('customer.show')}}" class="btn btn-info">Form</a>
<br></br>
<form class="form" action="{{route('customer.store')}}" method="POST">
 @csrf
 <div class="form-floating">
  <input type="text" name="Name" class="form-control" placeholder="Enter your name">
  <label for="floating">Customer Name :</label>
  <div>
    @error('Name')
     <strong class="text-danger">{{ $message }}</strong>
    @enderror
  </div>
 </div>

 <div class="form-floating mt-5">
  <input type="text" name="Details" class="form-control" placeholder="Enter your name">
  <label for="floating">Customer Details :</label>
  <div>
    @error('Details')
     <strong class="text-danger">{{ $message }}</strong>
    @enderror
  </div>
 </div>

 <div class="form-floating mt-5">
  <input type="text" name="Address" class="form-control" placeholder="Enter your name">
  <label for="floating">Customer Address :</label>
  <div>
    @error('Address')
     <strong class="text-danger">{{ $message }}</strong>
    @enderror
  </div>
 </div>

 <div class="form-floating mt-5">
  <input type="text" name="Mobile_Number" class="form-control" placeholder="Enter your name">
  <label for="floating">Customer phone :</label>

  <div>
    @error('Mobile_Number')
     <strong class="text-danger">{{ $message }}</strong>
    @enderror
  </div>
 </div>
 <div class="mt-5">
  <button type="submit" class="btn btn-primary">Customer Save</button>
 </div>
  
</form>
</div>
@endsection