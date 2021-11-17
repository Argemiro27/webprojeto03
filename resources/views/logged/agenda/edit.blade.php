@extends('adm.layout')

@section('content')
@if(count($errors) > 0)
<ul class="validator">
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
<form method="POST" action="{{url('agenda',$agenda->id)}}">
  @csrf
  @method('PUT')
  <div class="row">
    <label class="col-2" for="nome">Nome</label>
    <input type="test" name="nome" id="nome" class="col-5" value="{{ $agenda->nome }}" />
  </div>
  <div class="row">
    <label class="col-2" for="tarefa">Tarefa</label>
    <select class="col-5" name="tarefa_id" id="tarefa">
      <option></option>
      @foreach($adotantes as $tarefa)
      <option value="{{$tarefa->id}}" @if($tarefa->id==$agenda->tarefa_id) selected @endif>{{$tarefa->user->name}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="button">Salvar</button>
</form>

@endsection