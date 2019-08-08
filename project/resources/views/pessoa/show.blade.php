@extends('pessoa.layout')

@section('title', 'Pessoa')

@section('content')
<td>{{$pessoa->id}}</td>
      <td>{{$pessoa->nome}}</td>
      <td>{{$pessoa->endereco}}</td>
      <td>{{$pessoa->telefone}}</td>
      <td>{{$pessoa->cep}}</td>
      <td>{{$pessoa->cpf}}</td>

      @include('animal.index', ['animais' => $pessoa->animais])

@endsection

@section('script')

@endsection