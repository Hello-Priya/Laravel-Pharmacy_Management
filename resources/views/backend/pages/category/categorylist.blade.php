@extends('backend.master')
@section('content')

<h1><a class="btn btn-primary" href="{{route('show')}}">Create Form</a></h1>
<table>
    <thead>
        <tr>
            <th>Category Name</th>
            <th>Category Details</th>
            </tr>
       
    <tr>
      
      <td>
          <a class="btn btn-warning" href="">Edit</a>
          <a class="btn btn-success"  href="">View</a>
          <a class="btn btn-danger"  href="">Delete</a>
      </td>
    </tr>

    </thead>
    <tbody>

    </tbody>
</table>

@endsection