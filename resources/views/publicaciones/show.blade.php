@extends('layouts.main', ['activePage' => 'publicaciones', 'titlePage' => 'Detalles de publicación'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Publicación</div>
                            <p class="car-category">Vista detallada de la publicación {{ $publicacion[0]['id_publicacion'] }} </p>
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
                                                        <h5 class="title mt-3">{{ $publicacion[0]['titulo'] }}</h5>
                                                    </a>
                                                    <p class="description">
                                                    {{ $publicacion[0]['url_doc'] }}  <br>
                                                    {{ $publicacion[0]['fecha_hora_publicacion'] }}  <br>
                                                    {{ $publicacion[0]['username'] }} <br>
                                                    {{ $publicacion[0]['tipo_rol'] }}                                                  
                                                    </p>
                                                </div>
                                            </p>
                                            <div class="card-description">
                                            {{ $publicacion[0]['descripcion'] }}  
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