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
        <img src="..." class="card-img-top" alt="...">
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
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ asset('RegistrarReporteIndisciplina') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Registrar Indisciplina</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('RegistrarReporteDestacado') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Registrar Destacado</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</center>
</div>
    <a href="" class="btn btn-primary">Reportar</a>
@stop


           