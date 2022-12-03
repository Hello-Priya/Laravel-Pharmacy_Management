@extends('backend.master')
@section('content')
<div class="container">
    
    <h1 class="text-center bg-primary text-white mb-5">Customer List Table</h1>
    <a href="create_form" class="btn btn-info">Form</a>
    <br></br>
<table class="table table-striped table-hover table-bordered border-dark table-primary">
  <thead> 
    <tr>
      <th class="bg-primary" scope="col">SL NO</th>
      <th class="bg-primary" scope="col">Customer Name</th>
      <th class="bg-primary" scope="col">Customer Details</th>
      <th class="bg-primary" scope="col">Customer Address</th>
      <th class="bg-primary" scope="col">Customer Phone</th>
      <th class="bg-primary" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $customer)
    <tr>
      <td class="bg-primary" scope="row">{{$customer->id}}</td>
      <td class="bg-primary">{{$customer->Name}}</td>
      <td class="bg-primary">{{$customer->Details}}</td>
      <td class="bg-primary">{{$customer->Address}}</td>
      <td class="bg-primary">{{$customer->Mobile_Number}}</td>
      <td>
        <a href="{{route('customer.edit',$customer->id)}}" class="btn btn-success">Edit</a>
        <a href="{{route('customer.delete',$customer->id)}}" class="btn btn-danger">Delete</a>

       </td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>

</div>

@endsection