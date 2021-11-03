@extends('layouts.main', ['activePage' => 'unidades', 'titlePage' => 'Detalles de Unidad Educativa'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Unidad Educativa</div>
                            <p class="car-category">Vista detallada de la Unidad Educativa {{ $unidad[0]['nombre_unidad_educativa'] }} </p>
                        </div>
                        <!-- body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <div class="author">
                                                    <a href="#">
                                                        <img src="{{ asset('/img/avatar.png') }}" alt="image" class="avatar">
                                                        <h5 class="title mt-3">{{ $unidad[0]['nombre_unidad_educativa'] }}</h5>
                                                    </a>
                                                    <p class="description">
                                                    {{ $unidad[0]['detalle_clasificacion_ue'] }}  <br>
                                                    {{ $unidad[0]['descripcion_lugar'] }}
                                                                                                   
                                                    </p>
                                                </div>
                                            </p>
                                            <div class="card-description">
                                            {{ $unidad[0]['antecedentes'] }}  
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