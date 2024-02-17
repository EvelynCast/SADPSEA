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
                <span class="info-box-number">5</span>
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
    <h5 class="mb-2">Registros</h5>
    <div class="row">
        <div class="col-sm-6">
            <div class="card card-outline card-warning">
                <div class="card-header">
                  <h3 class="card-title">Otra información</h3>
                </div>
                <div class="card-body">
                  Contenido
                </div>
                <div class="card-footer">
                  Footer
                </div>
              </div>
        </div>
        <div class="col-sm-6">
            <div class="card card-outline card-danger">
                <div class="card-header">
                  <h3 class="card-title">Más información</h3>
                </div>
                <div class="card-body">
                  contenido puede ser una tabla xd prueba de cambio
                </div>
                <div class="card-footer">
                  footer
                </div>
              </div>
        </div>
    </div>
@endsection
