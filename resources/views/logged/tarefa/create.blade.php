  
@extends('logged.layout')

@section('content')
@if(count($errors) > 0)
<ul class="validator">
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
<form method="POST" action="{{url('tarefa')}}">
  @csrf
  @method('POST')
  <div class="row">
    <label class="col-2" for="user">Usuário</label>
    <select class="col-5" name="user_id" id="user">
      <option></option>
      @foreach($users as $user)
      <option value="{{$user->id}}" @if($user->id==old('user_id')) selected @endif>{{$user->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="row">
    <label class="col-2" for="nt">Nome da Tarefa</label>
    <input type="text" name="nometarefa" id="nt" class="col-5" value="{{ old('nometarefa') }}" />
  </div>
  <div class="row">
    <label class="col-2" for="dt">Data</label>
    <input type="text" name="data" id="dt" class="col-3" value="{{ old('data') }}" />
  </div>
  <div class="row">
    <label class="col-2" for="desc">Descrição</label>
    <input type="text" name="descricao" id="desc" class="col-5" value="{{ old('descricao') }}" />
  </div>
  </div>
  <button type="submit" class="button">Salvar</button>
</form>

@endsection