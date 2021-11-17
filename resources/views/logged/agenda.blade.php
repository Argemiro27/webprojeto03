@extends('adm.layout')

@section('content')
<a href="{{url('agenda/create')}}" class="button">Adicionar</a>
<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Tarefa</th>
      <th>Editar</th>
      <th>Remover</th>
    </tr>
  </thead>
  <tbody>
    @foreach($agendas as $agenda)
    <tr>
      <td>{{$agenda->nome}}</td>
      <td>
        @if($agenda->tarefa)
        {{$agenda->tarefa->user->name}}
        @endif
      </td>
      <td>
        <a href="{{route('agenda.edit',$agenda->id)}}" class="button">
          Editar
        </a>
      </td>
      <td>
        <form method="POST" action="{{route('agenda.destroy',$agenda->id)}}" onsubmit="return confirm('tem certeza?');">
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