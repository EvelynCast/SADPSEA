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
              <img src="{{ url('images/RB.png') }}" width="19.5%" alt="" class="brand-image" style="">

            <div class="info-box-content">
                <span class="info-box-text">Reportes Destacados</span>
                <span class="info-box-number">{{ $destacados}}</span>
            </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <img src="{{ url('images/RM.png') }}" width="18.5%" alt="" class="brand-image" style="">

          <div class="info-box-content">
              <span class="info-box-text">Reportes Indisciplina</span>
              <span class="info-box-number">{{ $indisciplina}}</span>
          </div>
          </div>
      </div>
       
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-outline">
                <div class="card-header">
                  <h3>Grupos</h3>
                </div>
                <div class="card-body" style="padding: 2% 0% 0% 1%">
                  <a href="{{ url('ListaGrupo') }}/1">
                    <button type="submit" class="btn btn-primary" style="background-color: #950000; border:0px" >6AVP</button>
                  </a><hr>
                </div>
                <div class="card-body" style="padding: 0% 0% 0% 1%">
                  <a href="{{ url('ListaGrupo') }}/2">
                  <button type="submit" class="btn btn-primary" style="background-color: #950000; border:0px" >6AVE</button>
                  </a><hr>
                </div>
                <div class="card-body" style="padding: 0% 0% 0% 1%">
                  <a href="{{ url('ListaGrupo') }}/3">
                  <button type="submit" class="btn btn-primary" style="background-color: #950000; border:0px" >6AVO</button>
                  </a><hr>
                </div>
              </div>
        </div>
    </div>
@endsection
