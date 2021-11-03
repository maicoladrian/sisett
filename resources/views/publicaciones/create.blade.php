@extends('layouts.main', ['activePage' => 'publicaciones', 'titlePage' => 'Nueva publicación'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('publicaciones.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Publicación</h4>
                                <p class="card-category">Ingresar información</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="titulo" placeholder="Ingresar titulo" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="descripcion" placeholder="Ingresar descripcion">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="url_doc" class="col-sm-2 col-form-label">Url</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="url_doc" placeholder="Ingresar url">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <label for="publicacion_id_users" class="col-sm-2 col-form-label">Usuario</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="publicacion_id_users" placeholder="Ingresar usuario">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection 