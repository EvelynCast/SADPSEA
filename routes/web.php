<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\MaestroController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GrupoController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['admin', 'role:admin']], function() {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/home', [HomeController::class, 'home']);

    //Rutas de alumnos
    Route::get('/alumno/consultar', [AlumnoController::class, 'consultar']);
    Route::get('/alumno/registrar', [AlumnoController::class, 'registrar']);
    Route::get('/reporte/pdf', [AlumnoController::class, 'reportePdf']);

    Route::get('/reporte/pdf/{id}', [AlumnoController::class, 'reporteAlumnoPdf']);

    //Rutas de administrador
    Route::get('/homeAdministrador', [HomeController::class, 'homeAdministrador']);

    //Ruta de ejemplo para obtener detalle de calificacion
    Route::get('alumno/materias', [AlumnoController::class, 'materias']);
    Route::get('generarQR', [AlumnoController::class, 'generaQR']);

    Route::get('RegistrarReporteIndisciplina/{id}', [MaestroController::class, 'RegistrarIndisciplina']);
    Route::get('RegistrarReporteDestacado/{id}', [MaestroController::class, 'RegistrarDestacado']);
    Route::get('ListaGrupo/{id}', [GrupoController::class, 'ListaGrupo']);
    Route::get('consultarPerfil/{id}', [AlumnoController::class, 'consultarPerfil']);    
    Route::post('guardarReporteIndisciplina', [MaestroController::class, 'guardarReporteIndisciplina']);    
    Route::post('guardarReporteDestacado', [MaestroController::class, 'guardarReporteDestacado']);    
    
});

Route::group(['prefix' => 'alumno','middleware' => ['alumno', 'role:alumno']], function() {
    Route::get('/home', function () {
        return view('alumno.home');
    });
});

require __DIR__.'/auth.php';
