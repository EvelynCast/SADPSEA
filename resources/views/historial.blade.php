@extends('app')

@section('titulo')
    <h1>Página en blanco</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Historial</li>
@stop

@section('contenido')
    <h2>Indisciplina</h2><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Fecha</th>
                <th>Motivo</th>
                <th>Comentario</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($indisciplina as $i)
                <tr>
                    <td>{{ $i->alumno->nombre }}</td>
                    <td>{{ $i->fecha }}</td>
                    <td>{{ $i->motivo }}</td>
                    <td>{{ $i->comentario }}</td>
                    <td>
                        <a href="{{ url('eliminarReporteIndisciplina') }}/{{ $i->id }}" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table><br>
    <hr>
    <h2>Destacados</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Habilidad</th>
                <th>Fecha</th>
                <th>Comentario</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($destacado as $d)
                <tr>
                    <td>{{ $d->alumno->nombre }}</td>
                    <td>{{ $d->habilidad->nombre}}</td>
                    <td>{{ $d->fecha }}</td>
                    <td>{{ $d->comentario }}</td>
                    <td>
                        <a href="{{ url('eliminarReporteDestacado') }}/{{ $d->id }}" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
