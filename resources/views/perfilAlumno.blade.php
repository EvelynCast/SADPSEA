@extends('app')

@section('titulo')
    <h1>Página en blanco</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Blank page</li>
@stop

@section('contenido')
<table class="table table-hover">
    <thead>
        <tr>
           <th>Nombre: {{ $alumno->nombre }}</th> 
           <th>Grupo: {{ $alumno->grupo }}</th>
            <th>Num Control: {{ $alumno->numero_control }}</th>
        </tr>
    </thead>
</table>

    <a href="" class="btn btn-primary">Reportar</a>
@stop
