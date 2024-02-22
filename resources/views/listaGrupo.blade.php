@extends('app')

@section('titulo')
    <h1>{{ $grupo->nombre }}</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">{{ $grupo->nombre }}</li>
@stop

@section('contenido')
<table class="table table-hover">
    <thead>
        <tr>
            <th>Num</th>
            <th>Numero de control</th>
            <th>Nombre</th>
            <th>Ver perfil</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($grupo->alumnos as $a)
        <tr>
            <td>{{ $a->alumno->id}}</td>
            <td>{{ $a->alumno->numero_control}}</td>
            <td>{{ $a->alumno->nombre}}</td>
            <td>
                <a href="{{ url('consultarPerfil') }}/{{ $a->alumno->id }}" class="btn btn-default">
                    <img src="{{ asset('images/icono_note.png') }}" alt="" width="20px">
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>        
    
@stop
