@extends('app')

@section('titulo')
    <h1>Perfil del Alumno</h1>
@stop

@section('contenido')
<div style="text-align:center;"> <center>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('images/iconos_3.png') }}" class="card-img-top" alt="..." style="width: 30%; margin: auto;">
        <div class="card-body">
            <table class="table">
                <tbody>
                <tr>
                    <th scope="row">Nombre:</th>
                    <td>{{ $alumno->nombre }}</td>
                </tr>
                <tr>
                    <th scope="row">Grupo:</th>
                    <td>{{ $alumno->grupo }}</td>
                </tr>
                <tr>
                    <th scope="row">Num Control:</th>
                    <td colspan="2">{{ $alumno->numero_control }}</td>
                </tr>
                </tbody>
            </table>
            <a href="{{ asset('RegistrarReporteIndisciplina') }}/{{ $alumno->id }}" class="btn btn-primary" style="background-color: #950000; border:0px" >Registrar Indisciplina </a><br><br>
            <a href="{{ asset('RegistrarReporteDestacado') }}/{{ $alumno->id }}" class="btn btn-primary" style="background-color: #950000; border:0px" >Registrar Habilidad</a>
        </div>
    </div>
</center>
</div>
@stop


           