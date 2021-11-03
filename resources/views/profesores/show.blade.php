@extends('layouts.main', ['activePage' => 'profesores', 'titlePage' => 'Detalles de Profesor'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Profesor</div>
                        <p class="card-category">Vista detallada del Profesor {{ $profesor[0]['ap_paterno'] }}</p>
                    </div>
                    <!-- body usuario -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <div class="author">
                                                <a href="">
                                                    <img src="{{ asset('/img/avatar.png') }}" alt="image" class="avatar">
                                                    <h5 class="title mt-3">{{ $profesor[0]['ap_paterno'] }} {{ $profesor[0]['ap_materno'] }} {{ $profesor[0]['nombres'] }}</h5>
                                                </a>
                                                <p class="description">
                                                {{ $profesor[0]['ci'] }}  <br>
                                                {{ $profesor[0]['celular'] }}  <br>
                                                {{ $profesor[0]['nombre_unidad_educativa'] }}  <br>
                                                {{ $profesor[0]['tipo_rol'] }} <br>
                                                
                                                </p>
                                            </div>
                                        </p>
                                        <div class="card-description">
                                        Profesor registrado: {{ $profesor[0]['created_at'] }} 
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container">
                                            <button class="btn btn-sm btn-primary">Editar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection