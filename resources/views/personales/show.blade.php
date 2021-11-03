@extends('layouts.main', ['activePage' => 'personales', 'titlePage' => 'Detalles de Personal'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Personal</div>
                        <p class="card-category">Vista detallada del Personal {{ $personal[0]['ap_paterno'] }}</p>
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
                                                    <h5 class="title mt-3">{{ $personal[0]['ap_paterno'] }} {{ $personal[0]['ap_materno'] }} {{ $personal[0]['nombres'] }}</h5>
                                                </a>
                                                <p class="description">
                                                Cédula de identidad: {{ $personal[0]['ci'] }}  <br>
                                                Celular: {{ $personal[0]['celular'] }}  <br>
                                                Codigo de control: {{ $personal[0]['codigo_control'] }}  <br>
                                                Mac: {{ $personal[0]['mac_pc'] }} <br>
                                                Cargo: {{ $personal[0]['descripcion_cargo'] }}
                                                
                                                </p>
                                            </div>
                                        </p>
                                        <div class="card-description">
                                        Personal registrado: {{ $personal[0]['created_at'] }} 
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container">
                                            <a href="{{ route('personales.edit', $personal[0]['id_personal']) }}" class="btn btn-sm btn-primary"><i class="material-icons">edit</i>Editar</a>
                                            <!-- <button class="btn btn-sm btn-primary">Editar</button> -->
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