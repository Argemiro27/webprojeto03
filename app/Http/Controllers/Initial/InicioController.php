<?php

namespace App\Http\Controllers\Initial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        $assistente = [
            "imagens" => [
                "nome" => "Assistenteum",
                "url" => "img/assistente/assistenteum.png"
            ]
        ];
        return view("initial/inicio", $assistente);
    }
}
