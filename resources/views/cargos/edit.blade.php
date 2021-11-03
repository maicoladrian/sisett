@extends('layouts.main', ['activePage' => 'cargos', 'titlePage' => 'Actualizar cargo'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('cargos.update', $cargo->id_cargo) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Cargo</h4>
                                <p class="card-category">Editar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="descripcion_cargo" class="col-sm-2 col-form-label">Descripcion del cargo</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="descripcion_cargo" value="{{ $cargo->descripcion_cargo }}" autofocus>
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