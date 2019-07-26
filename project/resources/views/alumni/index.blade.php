@extends('alumni.layout')

@section('title', 'Alumnus')

@section('content')
@if(session()->get('success'))
<div class="alert alert-success">
  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Email</td>
      <td>Linkedin</td>
      <td colspan="2">Action</td>
    </tr>
  </thead>
  <tbody>
    @foreach($alumni as $alumni)
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><a href="" class="btn btn-primary" role="button">Edit</a></td>
      <td>
        <form action="" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@csrf
@method('CREATE')
<a href="" class="btn btn-primary" role="button">Add alumnus</a>
@endsection