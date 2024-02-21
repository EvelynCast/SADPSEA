<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Alumno;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AlumnoController extends Controller
{
    public function consultar(){
        $alumnos = Alumno::all();

        return view('alumno.consultar', compact('alumnos'));
    }

    public function registrar(){
        //consultas el alumno
        return view('alumno.registrar');
    }

    public function reportePdf(){
        $alumnos = array("Alumno1", "Alumno2", "Alumno3"); //DAtos de la base de datos
        PDF::SetPaper('A4', 'landscape'); //Configuracion de la libreria
        $pdf = PDF::loadView('PDF.reporteGenerico', array('alumnos' => $alumnos)); //Carga la vista y la convierte a PDF
        return $pdf->download("reporteGenerico.pdf"); //Descarga el PDF con ese nombre
    }

    public function reporteAlumnoPdf($id){
        $alumno = Alumno::find($id);
        PDF::SetPaper('A4', 'landscape'); //Configuracion de la libreria
        $pdf = PDF::loadView('PDF.reporteAlumno', array('alumno' => $alumno)); //Carga la vista y la convierte a PDF
        return $pdf->download("reporteAlumno".$alumno->id.".pdf"); //Descarga el PDF con ese nombre
    }

    public function materias(){
        //Este id de alumno lo van a sacar del Auth::user()->alumno_id
        $id=2;
        $alumno = Alumno::with('materias')->find($id);


        dd($alumno);

    }

    public function generaQR(){
        return QrCode::size(300)->generate('Aquí va La URL que se va a acceder');
    }

    public function consultarPerfil($id){
        $alumno = Alumno::find($id);

        return view('perfilAlumno', compact('alumno'));
    }

}
