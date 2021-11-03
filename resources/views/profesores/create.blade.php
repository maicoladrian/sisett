@extends('layouts.main', ['activePage' =>'profesores', 'titlePage' =>'Nuevo Profesor'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('profesores.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Profesor</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="ap_paterno" class="col-sm-2 col-form-label">Ap. Paterno</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="ap_paterno" placeholder="Ingrese el Apellido Paterno" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="ap_materno" class="col-sm-2 col-form-label">Ap. Materno</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="ap_materno" placeholder="Ingrese el Apellido Materno">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombres" placeholder="Ingrese los nombres">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="ci" class="col-sm-2 col-form-label">Cedula de identidad</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="ci" placeholder="Ingrese la cedula de identidad">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="celular" class="col-sm-2 col-form-label">Celular</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="celular" placeholder="Ingrese el numero de celular">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <label for="profesor_id_unidad_educativa" class="col-sm-2 col-form-label">Unidad Educativa</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="usuario_id_rol" placeholder="Ingrese el Rol"> -->
                                        <select class="form-control selectpicker" data-style="btn btn-link" name="profesor_id_unidad_educativa" id="profesor_id_unidad_educativa">
                                            <option value="">Elija una U.E.</option>
                                            @foreach ($unidades as $unidad)
                                                <option value=" {{ $unidad['id_unidad_educativa'] }} "> {{ $unidad['nombre_unidad_educativa'] }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="profesor_id_rol" class="col-sm-2 col-form-label">Rol</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="docente_id_tipo_docente" placeholder="Ingrese el tipo docente"> -->
                                        <select class="form-control selectpicker" data-style="btn btn-link" name="profesor_id_rol" id="profesor_id_rol">
                                            <option value="">Elija el rol</option>
                                            @foreach ($roles as $rol)
                                                <option value=" {{ $rol['id_rol'] }} "> {{ $rol['tipo_rol'] }} </option>
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