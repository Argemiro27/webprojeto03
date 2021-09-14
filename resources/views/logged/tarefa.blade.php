@extends('logged.layout')

@section('content')
<a href="{{url('tarefa/create')}}" class="button">Adicionar</a>
<table>
  <thead>
    <tr>
      <th>Usuário</th>
      <th>Nome da Tarefa</th>
      <th>Data</th>
      <th>Descrição</th>
      <th>Editar</th>
      <th>Remover</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tarefas as $tarefa)
    <tr>
      <td>{{$tarefa->user->name}}</td>
      <td>{{$tarefa->nometarefa}}</td>
      <td>{{$tarefa->data}}</td>
      <td>{{$tarefa->descricao}}</td>
      <td>
        <a href="{{route('tarefa.edit',$tarefa->id)}}" class="button">
          Editar
        </a>
      </td>
      <td>
        <form method="POST" action="{{route('tarefa.destroy',$tarefa->id)}}" onsubmit="return confirm('tem certeza?');">
          @csrf
          @method('DELETE')
          <button type="submit" class="button">
            Remover
          </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection