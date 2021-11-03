@extends('layouts.main', ['activePage' =>'personales', 'titlePage' =>'Editar Personal'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('personales.update', $personal[0]['id_personal'])}}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Personal</h4>
                                <p class="card-category">Editar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="ap_paterno" class="col-sm-2 col-form-label">Ap. Paterno</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="ap_paterno" value="{{ $personal[0]['ap_paterno'] }}" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="ap_materno" class="col-sm-2 col-form-label">Ap. Materno</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="ap_materno" value="{{ $personal[0]['ap_materno'] }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombres" value="{{ $personal[0]['nombres'] }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="ci" class="col-sm-2 col-form-label">Cedula de identidad</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="ci" value="{{ $personal[0]['ci'] }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="celular" class="col-sm-2 col-form-label">Celular</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="celular" value="{{ $personal[0]['celular'] }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="codigo_control" class="col-sm-2 col-form-label">Codigo de control</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="codigo_control" value="{{ $personal[0]['codigo_control'] }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="mac_pc" class="col-sm-2 col-form-label">Mac de PC</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="mac_pc" value="{{ $personal[0]['mac_pc'] }}">
                                    </div>
                                </div>
                                
                                
                                <div class="row">
                                    <label for="personal_id_cargo" class="col-sm-2 col-form-label">Rol</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="docente_id_tipo_docente" placeholder="Ingrese el tipo docente"> -->
                                        <select class="form-control selectpicker" data-style="btn btn-link" name="personal_id_cargo" id="personal_id_cargo">
                                            <option value="">Elija el cargo</option>
                                            @foreach ($cargos as $cargo)
                                                @if($cargo['id_cargo'] == $personal[0]['personal_id_cargo'])
                                                    <option value=" {{ $cargo['id_cargo'] }} " selected> {{ $cargo['descripcion_cargo'] }} </option>
                                                @else
                                                    <option value=" {{ $cargo['id_cargo'] }} "> {{ $cargo['descripcion_cargo'] }} </option>
                                                @endif
                                            @endforeach
                                        </select>
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