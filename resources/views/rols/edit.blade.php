@extends('layouts.main', ['activePage' => 'rols', 'titlePage' => 'Actualizar rol'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('rols.update', $rol->id_rol) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Rol</h4>
                                <p class="card-category">Actualizar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="tipo_rol" class="col-sm-2 col-form-label">Tipo de rol</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="tipo_rol" value="{{ $rol->tipo_rol }}" autofocus>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection 