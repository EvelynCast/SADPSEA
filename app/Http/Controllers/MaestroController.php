<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Habilidad;
use App\Models\Indisciplina;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MaestroController extends Controller
{
    public function RegistrarIndisciplina($id){
        return view("registrarIndisciplina", compact('id'));
    }

    public function RegistrarDestacado($id){
        $habilidades=Habilidad::all();
        return view("registrarDestacado", compact('habilidades', 'id'));
    }

    public function guardarReporteIndisciplina(Request $datos){
        Indisciplina::create([ 
            'alumno_id'=>$datos->input('alumno_id'),
            'user_id'=>1,
            'fecha'=>$datos->input('fecha'),
            'motivo'=>$datos->input('motivo'),
            'comentario'=>$datos->input('comentario'),
        ]);
        return redirect('/home');
    }
}
