@extends('layouts.main', ['activePage' => 'rols', 'titlePage' => 'Nuevo rol'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('rols.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Rol</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="tipo_rol" class="col-sm-2 col-form-label">Tipo de rol</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="tipo_rol" placeholder="Ingresar tipo de rol" autofocus>
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