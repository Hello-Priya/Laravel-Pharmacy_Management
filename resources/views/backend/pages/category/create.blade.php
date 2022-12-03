@extends('backend.master')
@section('content')
<h1><a class="btn btn-primary" href="{{route('show')}}">Back</a></h1>
<div class="container">
  <div class="mx-auto" style= width:100px,float:left>
  <form class="form" action="{{route('storedata')}}" mathod="post">
    @csrf
    <div class="my-2">
                <label>Catgory Name</label>
                <input type="text"name="category_name"  class="form-control" placeholder="Enter your category name" name="category_name">
            </div>
            <div class="my-2">
                <label>Catgory Details</label>
                <input type="text" name="details" class="form-control" placeholder="Enter your category details"
                    name="category_details">
            </div>
           
                
            <div>
                <button type="submit" name="btn" class="btn btn-primary">Submit</button>
            </div>
</form>
@endsection
    