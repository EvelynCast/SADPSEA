<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use PHPUnit\Framework\Error\Notice;
use App\Models\Indisciplina;
use App\Models\Destacado;

class HomeController extends Controller
{
    public function home(){
        return view('home');
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
