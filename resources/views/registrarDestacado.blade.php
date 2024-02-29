@extends('app')

@section('titulo')
    <h1>Registrar Habilidad</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Registrar Habilidad</li>
@stop

@section('contenido')
<form method="POST" action="{{ url('guardarReporteDestacado') }}">
  @csrf
  <input name="alumno_id" type="hidden" value="{{ $id }}">
    <div class="form-group">
        <label for="habilidad">Habilidad</label>
        <select  class="form-control" name="habilidad_id" id="">
            <option value="">Selecciona una habilidad</option>
            @foreach ( $habilidades as $h )
                <option value="{{ $h->id }}">{{ $h->nombre }}</option>
            @endforeach
        </select>
    </div> 
    <div class="form-group">
      <label for="fecha">Fecha</label>
      <input name="fecha" type="date" class="form-control" id="" placeholder="Selecciona una fecha">
    </div>
    <div class="form-group">
        <label for="texto">Comentario</label>
        <input name="comentario" type="text" class="form-control" id="" placeholder="Escribe un comentario">
      </div>
    
    <button type="submit" class="btn btn-primary" style="background-color: #950000; border:0px" >Registrar </button>
  </form>
@stop
