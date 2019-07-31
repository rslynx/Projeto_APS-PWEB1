@extends('animal.layout')

@section('title', 'Animal')

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
      <td>Especie</td>
      <td>Raça</td>
      <td>Cor</td>
      <td>Idade</td>
      <td>Porte</td>
      <td>Comportamento</td>
      <td>Vacinado</td>
      <td>Editar</td>
      <td>Deletar</td>

    </tr>
  </thead>
  <tbody>
    @foreach($animal as $animal)
    <tr>
      <td>{{$animal->id}}</td>
      <td>{{$animal->nome}}</td>
      <td>{{$animal->especie}}</td>
      <td>{{$animal->raca}}</td>
      <td>{{$animal->corDaPelagem}}</td>
      <td>{{$animal->idade}}</td>
      <td>{{$animal->porteFisico}}</td>
      <td>{{$animal->comportamento}}</td>
      <td>{{$animal->vacinado}}</td>
      <td><a href="{{ route('animal.edit',$animal->id)}}" class="btn btn-primary" role="button">Edit</a></td>
      <td>
        <form class="delete" action="{{ route('animal.destroy',$animal->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ route('animal.create') }}" class="btn btn-primary" role="button">Adicionar Animal</a>
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