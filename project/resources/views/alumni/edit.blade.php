@extends('alumni.layout')

@section('title', 'Edit Alumnus')

@section('content')
<div class="card">
  <div class="card-header">
    Edit Alumnus
  </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li></li>
        @endforeach
      </ul>
    </div>
    @endif
    <form method="post" action="{{action('App\Http\Controllers\AnimalController@update', $animal->id)}}">
      <div class="form-group">
        @csrf
          <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="" />
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" value="" />
      </div>
      <div class="form-group">
        <label for="linkedin">Linkedin:</label>
        <input type="text" class="form-control" id="linkedin" name="linkedin" value="" />
      </div>
      <button type="submit" class="btn btn-primary">Update Alumnus</button>
    </form>
  </div>
</div>
@endsection