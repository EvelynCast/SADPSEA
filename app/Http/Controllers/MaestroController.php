<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Habilidad;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MaestroController extends Controller
{
    public function RegistrarIndisciplina(){
        return view("registrarIndisciplina");
    }

    public function RegistrarDestacado(){
        $habilidades=Habilidad::all();
        return view("registrarDestacado", compact('habilidades'));
    }
}
