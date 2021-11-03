@extends('layouts.main', ['activePage' => 'horarios', 'titlePage' => 'Nuevo horario'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('horarios.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Horario</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="hora_entrada_m" class="col-sm-2 col-form-label">Hora entrada en la mañana</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="hora_entrada_m" placeholder="Ingresar la hora de entrada" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="hora_salida_m" class="col-sm-2 col-form-label">Hora salida en la mañana</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="hora_salida_m" placeholder="Ingresar la hora de salida">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="hora_entrada_t" class="col-sm-2 col-form-label">Hora entrada por la tarde</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="hora_entrada_t" placeholder="Ingresar la hora de entrada">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="hora_salida_t" class="col-sm-2 col-form-label">Hora salida por la tarde</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="hora_salida_t" placeholder="Ingresar la hora de salida">
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