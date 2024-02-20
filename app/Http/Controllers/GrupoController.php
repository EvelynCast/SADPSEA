<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function ListaGrupo($id){
        return view("listaGrupo");
    }
}
