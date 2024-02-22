@extends('app')

@section('home')
    <h1 class="mb-2">Inicio</h1>
    <div class="row">
        
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <img src="{{ url('images/icono_lista.png') }}" width="23%" alt="" class="brand-image" style="">

            <div class="info-box-content">
                <span class="info-box-text">Grupos Asignados</span>
                <span class="info-box-number">3</span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <img src="{{ url('images/icono_note.png') }}" width="21%" alt="" class="brand-image" style="">

            <div class="info-box-content">
                <span class="info-box-text">Reportes Generados</span>
                <span class="info-box-number">25</span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
       
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="card card-outline card-warning">
                <div class="card-header">
                  <h3 class="card-title">Grupos</h3>
                </div>
                <div class="card-body">
                  <a href="{{ url('ListaGrupo') }}/1">
                    <button type="submit" class="btn btn-primary" style="background-color: #950000; border:0px" >6AVP</button>
                  </a>
                </div>
                <div class="card-body">
                  <a href="{{ url('ListaGrupo') }}/2">
                  <button type="submit" class="btn btn-primary" style="background-color: #950000; border:0px" >6AVE</button>
                </div>
                <div class="card-body">
                  <a href="{{ url('ListaGrupo') }}/3">
                  <button type="submit" class="btn btn-primary" style="background-color: #950000; border:0px" >6AVO</button>
                </div>
              </div>
        </div>
    </div>
@endsection
