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
                @if(count($a->alumno->reportesDestacados) == 1)
                    <img src="{{asset('images/E-BRONCE.png')}}" alt="" width="50px" data-toggle="tooltip" data-placement="top" title="Insignia BRONCE">
                @elseif(count($a->alumno->reportesDestacados) == 2)
                    <img src="{{asset('images/E-PLATA.png')}}" alt="" width="50px" data-toggle="tooltip" data-placement="top" title="Insignia PLATA">
                @elseif(count($a->alumno->reportesDestacados) >= 3)
                    <img src="{{asset('images/E-ORO.png')}}" alt="" width="50px" data-toggle="tooltip" data-placement="top" title="Insignia ORO">
                @endif
            </td>
            <td>
                @if(count($a->alumno->reportesIndisciplina) == 0)
                    <img src="{{asset('images/IN_VERDE.png')}}" alt="" width="50px" data-toggle="tooltip" data-placement="top" title="Sin reporte">
                @elseif(count($a->alumno->reportesIndisciplina) == 1)
                    <img src="{{asset('images/IN_AMARILLO.png')}}" alt="" width="50px" data-toggle="tooltip" data-placement="top" title="1 reporte">
                @elseif(count($a->alumno->reportesIndisciplina) == 2)
                    <img src="{{asset('images/IN_NARANJA.png')}}" alt="" width="50px" data-toggle="tooltip" data-placement="top" title="2 reportes">
                @elseif(count($a->alumno->reportesIndisciplina) >= 3)
                    <img src="{{asset('images/IN_ROJO.png')}}" alt="" width="50px" data-toggle="tooltip" data-placement="top" title="3 o más reportes">
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>        
    
@stop
