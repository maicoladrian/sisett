@extends('layouts.main', ['activePage' => 'lugares', 'titlePage' => 'Actualizar lugar'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('lugares.update', $lugar->id_lugar) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Lugar</h4>
                                <p class="card-category">Actualizar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="descripcion_lugar" class="col-sm-2 col-form-label">Descripción</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="descripcion_lugar" value="{{ $lugar->descripcion_lugar }}" autofocus>
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