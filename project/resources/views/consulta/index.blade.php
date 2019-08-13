
<table class="table table-striped">
  <thead>
    <tr>
      <td>Data</td>
      <td>Turno</td>
    </tr>
  </thead>
  <tbody>
    @foreach($consultas as $consulta)
    <tr>
      <td>{{$consulta->id}}</td>
      <td>{{$consulta->data}}</td>
      <td>{{$consulta->turno}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

