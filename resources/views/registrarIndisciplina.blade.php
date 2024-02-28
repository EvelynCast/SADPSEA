@extends('app')

@section('titulo')
    <h1>Registrar Indisciplina</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Registrar Indisciplina</li>
@stop

@section('contenido')
<form method="POST" action="{{ url('guardarReporteIndisciplina') }}">
    @csrf
    <input name="alumno_id" type="hidden" value="{{ $id }}">
    <div class="form-group">
      <label for="fecha">Fecha</label>
      <input required name="fecha" type="date" class="form-control" id="" placeholder="Selecciona una fecha">
    </div>
    <div class="form-group">
        <label for="motivo">Motivo</label>
        <input required name="motivo" type="text" class="form-control" id="" placeholder="Escribe el motivo del reporte">
      </div> 
    <div class="form-group">
        <label for="texto">Comentario</label>
        <input required name="comentario" type="text" class="form-control" id="" placeholder="Escribe un comentario">
      </div>
    
    <button type="submit" class="btn btn-primary" style="background-color: #950000; border:0px" >Registrar</button>
  </form>
@stop
