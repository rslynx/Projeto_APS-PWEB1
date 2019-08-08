

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
    @foreach($animais as $animal)
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
    </tr>
    @endforeach
  </tbody>
</table>

