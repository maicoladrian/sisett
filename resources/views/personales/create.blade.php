@extends('layouts.main', ['activePage' =>'personales', 'titlePage' =>'Nuevo Personal'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('personales.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Personal</h4>
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
                                    <label for="codigo_control" class="col-sm-2 col-form-label">Codigo de control</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="codigo_control" placeholder="Ingrese el codigo de control">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="mac_pc" class="col-sm-2 col-form-label">Mac de PC</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="mac_pc" placeholder="Ingrese la mac de la PC">
                                    </div>
                                </div>
                                
                                
                                <div class="row">
                                    <label for="personal_id_cargo" class="col-sm-2 col-form-label">Rol</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="docente_id_tipo_docente" placeholder="Ingrese el tipo docente"> -->
                                        <select class="form-control selectpicker" data-style="btn btn-link" name="personal_id_cargo" id="personal_id_cargo">
                                            <option value="">Elija el cargo</option>
                                            @foreach ($cargos as $cargo)
                                                <option value=" {{ $cargo['id_cargo'] }} "> {{ $cargo['descripcion_cargo'] }} </option>
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