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
            <th>Destacado</th>
            <th>Indisciplina</th>
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
            <td>
                {{ count($a->alumno->reportesDestacados) }}
                @if(count($a->alumno->reportesDestacados) == 1)
                    <img src="images/E-BRONCE.png" alt="">
                @elseif(count($a->alumno->reportesDestacados) == 2)
                    <img src="images/E-PLATA.png" alt="">
                @elseif(count($a->alumno->reportesDestacados) >= 3)
                    <img src="images/E-ORO.png" alt="">
                @endif
            </td>
            <td>
                {{ count($a->alumno->reportesIndisciplina) }}
                @if(count($a->alumno->reportesIndisciplina) == 1)
                    <img src="images/IN_AMARILLO.png" alt="">
                @elseif(count($a->alumno->reportesIndisciplina) == 2)
                    <img src="images/IN_NARANJA.png" alt="">
                @elseif(count($a->alumno->reportesIndisciplina) >= 3)
                    <img src="images/IN_ROJO.png" alt="">
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>        
    
@stop
