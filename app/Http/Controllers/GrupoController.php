<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;

class GrupoController extends Controller
{
    public function ListaGrupo($id){
        $grupo = Grupo::find($id);
        return view("listaGrupo", compact('grupo'));
    }
}
