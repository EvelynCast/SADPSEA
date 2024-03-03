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
            <th>Estado</th>
            <th>Finalizar</th>
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
                    @if($i->estado==0)
                        <span class="badge badge-danger">No atendido</span>
                    @elseif ($i->estado==1)
                        <span class="badge badge-success">Finalizado</span>
                    @endif
                </td>
                <td>
                    <a href="{{ url('/administrador/finalizarIndisciplina') }}/{{ $i->id }}" class="btn btn-primary btn-sm">Finalizar</a>
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
        </tr>
    </thead>
    <tbody>
        @foreach ($destacado as $d)
            <tr>
                <td>{{ $d->alumno->nombre }}</td>
                <td>
                    <div style="background-color: green; color: white; font-style: bold; border-radius:5px; text-align: center; ">
                        {{ $d->habilidad->nombre}}
                    </div>
                </td>
                <td>{{ $d->fecha }}</td>
                <td>{{ $d->comentario }}</td>

            </tr>
        @endforeach
    </tbody>
</table>
@stop
