@extends('app')

@section('titulo')
    <h1>Página en blanco</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Blank page</li>
@stop

@section('contenido')
<div style="text-align:center;"> <center>
    <div class="card" style="width: 18rem;">
        <img src="user_imagen" class="card-img-top" alt="...">
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
            <a href="{{ asset('RegistrarReporteIndisciplina') }}/{{ $alumno->id }}" class="btn btn-primary" style="background-color: #950000; border:0px" >Reportar Indisciplina</a><br><br>
            <a href="{{ asset('RegistrarReporteDestacado') }}/{{ $alumno->id }}" class="btn btn-primary" style="background-color: #950000; border:0px" >Reportar Destacado</a>
        </div>
    </div>
</center>
</div>
@stop


           