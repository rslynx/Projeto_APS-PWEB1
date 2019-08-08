@extends('alumni.layout')

@section('title', 'Edit Pessoa')

@section('content')
<div class="card">
  <div class="card-header">
    Edit Pessoa
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
    <form method="post" action="{{ route('pessoa.update', $pessoa->id)}}">
      <div class="form-group">
        @csrf
        @method('PATCH')
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" />
      </div>
      <div class="form-group">
        <label for="especie">Endereco:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" />
      </div>
      <div class="form-group">
        <label for="raca">Telefone:</label>
        <input type="text" id="telefone" name="telefone" />
      </div>
      <div class="form-group">
        <label for="cor">Cep:</label>
        <input type="text" id="cep" name="cep" />
      </div>
      <div class="form-group">
        <label for="cor">Cpf:</label>
        <input type="text" id="cpf" name="cpf" />
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar Animal</button>
    </form>
  </div>
</div>
@endsection