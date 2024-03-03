<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use App\Models\Destacado;
use App\Models\Indisciplina;
use PHPUnit\Framework\Error\Notice;

class HomeController extends Controller
{
    public function home(){
        $destacados=Destacado::count();
        $indisciplina=Indisciplina::count();
        return view('home', compact('destacados', 'indisciplina'));
    }

    public function homeMaestro(){
        $noticias = Noticia::all();

        return view('administrador.home', compact('noticias'));
    }

    public function homeAdministrador(){
        $indisciplina = Indisciplina::all();
        $destacado = Destacado::all();

        return view('homeAdministrador', compact('indisciplina', 'destacado'));
    }
}
