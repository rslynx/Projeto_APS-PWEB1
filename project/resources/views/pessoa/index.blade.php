@extends('pessoa.layout')

@section('title', 'Pessoas')

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
      <td>Nome</td>
      <td>Endereco</td>
      <td>Telefone</td>
      <td>Cep</td>
      <td>Cpf</td>

    </tr>
  </thead>
  <tbody>
    @foreach($pessoa as $pessoa)
    <tr>
      <td>{{$pessoa->id}}</td>
      <td>{{$pessoa->nome}}</td>
      <td>{{$pessoa->endereco}}</td>
      <td>{{$pessoa->telefone}}</td>
      <td>{{$pessoa->cep}}</td>
      <td>{{$pessoa->cpf}}</td>
      <td><a href="{{ route('pessoa.show',$pessoa->id)}}" class="btn btn-primary" role="button">Detalhes</a></td>
      <td><a href="{{ route('pessoa.edit',$pessoa->id)}}" class="btn btn-primary" role="button">Edit</a></td>
      <td>
        <form class="delete" action="{{ route('pessoa.destroy',$pessoa->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ route('pessoa.create') }}" class="btn btn-primary" role="button">Adicionar Pessoa </a>
@endsection

@section('script')
<script>
  $(function() {
    $('.delete').on('submit', function() {
      return confirm('Are you sure?');
    });
  });
</script>
@endsection