@extends('app')

@section('titulo')
    <h1>6AVP</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Blank page</li>
@stop

@section('contenido')
    @foreach ( $alumnos as $a )
        <option value="{{ $a->id }}">{{ $a->nombre }}</option> 
    @endforeach
@stop
