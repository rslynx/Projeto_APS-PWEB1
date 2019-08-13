@extends('alumni.layout')

@section('title', 'Edit Animal')

@section('content')
<div class="card">
  <div class="card-header">
    Edit Animal
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
    <form method="post" action="{{ route('animal.update', $animal->id)}}">
      <div class="form-group">
        @csrf
        @method('PATCH')
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$animal->nome}}" />
      </div>
      <div class="form-group">
        <label for="especie">Especie:</label>
        <input type="text" class="form-control" id="especie" name="especie" value="{{$animal->especie}}" />
      </div>
      <div class="form-group">
        <label for="raca">Raça:</label>
        <input type="text" id="raca" name="raca" value="{{$animal->raca}}" />
      </div>
      <div class="form-group">
        <label for="cor">Cor:</label>
        <input type="text" id="cor" name="corDaPelagem" value="{{$animal->corDaPelagem}}" />
      </div>
      <div class="form-group">
        <label for="cor">Idade:</label>
        <input type="text" id="idade" name="idade" value="{{$animal->idade}}" />
      </div>
      <div class="form-group">
        <label for="cor">Porte:</label>
        <input type="text" id="porteFisico" name="porteFisico" value="{{$animal->porteFisico}}"/>
      </div>
      <div class="form-group">
        <label for="cor">Comportamento:</label>
        <input type="text" id="comportamento" name="comportamento" value="{{$animal->comportamento}}" />
      </div>
      <div class="form-group">
        <label for="cor">Vacinado:</label>
        <input type="text" id="vacinado" name="vacinado" value="{{$animal->vacinado}}" />
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar Animal</button>
    </form>
  </div>
</div>
@endsection