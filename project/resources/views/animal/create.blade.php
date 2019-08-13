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
    <form method="post" action="{{ route('pessoa.animal.store' , $pessoa->id)}}">
      <div class="form-group">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" />
      </div>
      <div class="form-group">
        <label for="especie">Especie:</label>
        <input type="text" class="form-control" id="especie" name="especie" />
      </div>
      <div class="form-group">
        <label for="raca">Raça:</label>
        <input type="text" id="raca" name="raca" />
      </div>
      <div class="form-group">
        <label for="cor">Cor:</label>
        <input type="text" id="cor" name="corDaPelagem" />
      </div>
      <div class="form-group">
        <label for="cor">Idade:</label>
        <input type="text" id="idade" name="idade" />
      </div>
      <div class="form-group">
        <label for="porteFisico">Porte Fisico</label>
        <select class="form-control" id="exampleFormControlSelect1" id="porteFisico" name="porteFisico">
          <option>peq</option>
          <option>med</option>
          <option>gra</option>
        </select>
      </div>
      <div class="form-group">
        <label for="comportamento">Comportamento</label>
        <select class="form-control" id="comportamento" name="comportamento">
          <option>docil</option>
          <option>agressivo</option>
        </select>
      </div>
      <div class="form-group">
        <label for="vacinado">Vacinado</label>
        <select class="form-control" id="vacinado" name="vacinado">
          <option>sim</option>
          <option>nao</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar Animal</button>
    </form>
  </div>
</div>
@endsection