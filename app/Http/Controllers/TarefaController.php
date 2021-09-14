<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\User;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefa::all();
        return view("logged/tarefa", compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view("logged/tarefa/create", compact('users'));
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
            'user_id' => 'required|integer',
            'nometarefa' => 'required|max:255',
            'data' => 'required|max:255',
            'descricao' => 'required|max:255',
        ]);
        if ($validated) {
            $tarefa = new Tarefa();
            $tarefa->user_id = $request->get('user_id');
            $tarefa->nometarefa = $request->get('nometarefa');
            $tarefa->data = $request->get('data');
            $tarefa->descricao = $request->get('descricao');
            $tarefa->save();
            return redirect("tarefa");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefa $tarefa)
    {
        $users = User::all();
        return view("logged/tarefa/edit", compact('users', 'tarefa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'nometarefa' => 'required|max:255',
            'data' => 'required|max:255',
            'descricao' => 'required|max:255',
        ]);
        if ($validated) {
            $tarefa->user_id = $request->get('user_id');
            $tarefa->nometarefa = $request->get('nometarefa');
            $tarefa->data = $request->get('data');
            $tarefa->descricao = $request->get('descricao');
            $tarefa->save();
            return redirect("tarefa");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();
        return redirect("tarefa");
    }
}
