<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\Agenda;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class AnimalController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $agendas = Agenda::all();
    return view("logged/agenda", compact('agendas'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $tarefas = Tarefa::all();
    return view("logged/agenda/create", compact('tarefas'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'nome' => 'required|max:255',
    ]);
    if ($validated) {
      $agenda = new Agenda();
      $agenda->nome = $request->get('nome');
      if ($request->get('tarefa_id')) {
        $agenda->tarefa_id = $request->get('tarefa_id');
      }
      $agenda->save();
      return redirect("agenda");
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Agenda  $agenda
   * @return \Illuminate\Http\Response
   */
  public function show(Agenda $agenda)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Agenda  $agenda
   * @return \Illuminate\Http\Response
   */
  public function edit(Agenda $agenda)
  {
    $tarefas = Tarefa::all();
    return view("logged/agenda/edit", compact('tarefas', 'agenda'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Agenda  $agenda
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Agenda $agenda)
  {
    $validated = $request->validate([
      'nome' => 'required|max:255',
    ]);
    if ($validated) {
      $agenda->nome = $request->get('nome');
      if ($request->get('tarefa_id')) {
        $agenda->tarefa_id = $request->get('tarefa_id');
      } else {
        $agenda->tarefa_id = NULL;
      }
      $agenda->save();
      return redirect("agenda");
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Agenda  $agenda
   * @return \Illuminate\Http\Response
   */
  public function destroy(Agenda $agenda)
  {
    $agenda->delete();
    return redirect("agenda");
  }
}