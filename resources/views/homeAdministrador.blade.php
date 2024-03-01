@extends('appAdministrador')

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Inicio</li>
@stop

@section('titulo')
    Lista de reportes
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
        </tr>
    </thead>
    <tbody>
        @foreach ($indisciplina as $i)
            <tr>
                <td>{{ $i->alumno->nombre }}</td>
                <td>{{ $i->fecha }}</td>
                <td>{{ $i->motivo }}</td>
                <td>{{ $i->comentario }}</td>

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
        </tr>
    </thead>
    <tbody>
        @foreach ($destacado as $d)
            <tr>
                <td>{{ $d->alumno->nombre }}</td>
                <td>{{ $d->habilidad->nombre}}</td>
                <td>{{ $d->fecha }}</td>
                <td>{{ $d->comentario }}</td>

            </tr>
        @endforeach
    </tbody>
</table>
@stop
