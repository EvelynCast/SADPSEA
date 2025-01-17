<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use PDF;
use App\Models\Habilidad;
use App\Models\Indisciplina;
use App\Models\Destacado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return redirect('/historial');
    }

    public function guardarReporteDestacado(Request $datos){
        Destacado::create([ 
            'alumno_id'=>$datos->input('alumno_id'),
            'user_id'=>1,
            'habilidad_id'=>$datos->input('habilidad_id'),
            'fecha'=>$datos->input('fecha'),
            'comentario'=>$datos->input('comentario'),
        ]);
        return redirect('/historial');
    }

    public function historial(){

        $indisciplina = Indisciplina::where('user_id', Auth::user()->id)->get();
        $destacado = Destacado::where('user_id', Auth::user()->id)->get();

        return view('historial', compact('indisciplina', 'destacado'));
    }

    public function eliminarReporteDestacado($id){
        $reporte = Destacado::find($id);
        $reporte->delete();

        return redirect('historial');
    }

    public function eliminarReporteIndisciplina($id){
        $reporte = Indisciplina::find($id);
        $reporte->delete();

        return redirect('historial');
    }
}
