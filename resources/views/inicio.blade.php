@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('S.I.D.D.E.C.')])

@section('content')
<div class="container" style="height: auto;">
  
  <div class="row align-items-center">
    <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
      <!-- Sistema web para la publicacion de informacion y control de asistencia en direccion distrital de educacion Chayanta -->
      <h3>{{ __('Sistema de Información para la Dirección Distrital de Educación Chayanta') }} </h3>
    </div>
    
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('asistencias.control') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Registrar asistencia') }}</strong></h4>
            <div class="social-line">
              <!-- <a href="#" class="btn btn-just-icon btn-link btn-white">
                Hora y fecha: 07:50:10 - 2021-10-09
              </a> -->
              <p class="card-description text-center">{{ __('Hora y fecha: ') }} {{ date('Y-m-d') }} {{ date('H:i') }} </p>
              
            </div>
          </div>
          <div class="card-body">
            <p class="card-description text-center">{{ __('Ingrese su código de control') }} </p>

            <!-- codigo -->
            <div class="bmd-form-group{{ $errors->has('codigo_control') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">fingerprint</i>
                  </span>
                </div>
                <input type="text" name="codigo_control" class="form-control" placeholder="{{ __('Codigo de control') }}" value="{{ old('codigo_control', null) }}" required autofocus>
              </div>
              @if ($errors->has('codigo_control'))
                <div id="codigo_control-error" class="error text-danger pl-3" for="codigo_control" style="display: block;">
                  <strong>{{ $errors->first('codigo_control') }}</strong>
                </div>
              @endif
            </div>

          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Registrar asistencia') }}</button>
          </div>
        </div>
      </form>

    </div>
  </div>
  @if(session('success'))
        <div class="col-md-4 ml-auto mr-auto mb-3 text-center alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ session('success') }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
  @elseif(session('error'))
        <div class="col-md-4 ml-auto mr-auto mb-3 text-center alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ session('error') }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
  @endif
</div>

<script src="{{ asset('js/efectoCerrarAlert.js') }}"></script>
@endsection
