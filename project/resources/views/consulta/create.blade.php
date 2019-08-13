@extends('animal.layout')

@section('title', 'Cadastrar Animal')

@section('content')
<div class="card">
  <div class="card-header">
    Adicionar Animal
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
    <form method="post" action="{{ route('pessoa.consulta.store' , $pessoa->id)}}">
      <div class="form-group">
        @csrf
        <label for="nome">Data:</label>
        <input type="text" class="form-control" id="data" name="data" />
      </div>
      <div class="form-group">
        <label for="especie">Turno:</label>
        <input type="text" class="form-control" id="turno" name="turno" />
      </div>
      <button type="submit" class="btn btn-primary">Agendar</button>
    </form>
  </div>
</div>
@endsection