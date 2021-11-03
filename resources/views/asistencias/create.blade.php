@extends('layouts.main', ['activePage' => 'asistencias', 'titlePage' => 'Nueva asistencia'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('asistencias.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Asistencia</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="fecha" placeholder="Ingresar la fecha" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="hora" class="col-sm-2 col-form-label">Hora</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="hora" placeholder="Ingresar la hora">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="asistencia_id_personal" class="col-sm-2 col-form-label">Personal</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="docente_id_tipo_docente" placeholder="Ingrese el tipo docente"> -->
                                        <select class="form-control selectpicker" data-style="btn btn-link" name="asistencia_id_personal" id="asistencia_id_personal">
                                            <option value="">Elija el personal</option>
                                            @foreach ($personales as $personal)
                                                <option value=" {{ $personal['id_personal'] }} "> {{ $personal['codigo_control'] }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="asistencia_id_horario" class="col-sm-2 col-form-label">Horario</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="docente_id_tipo_docente" placeholder="Ingrese el tipo docente"> -->
                                        <select class="form-control selectpicker" data-style="btn btn-link" name="asistencia_id_horario" id="asistencia_id_horario">
                                            <option value="">Elija el horario</option>
                                            @foreach ($horarios as $horario)
                                                <option value=" {{ $horario['id_horario'] }} "> {{ $horario['id_horario'] }} </option>
                                            @endforeach
                                        </select>
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