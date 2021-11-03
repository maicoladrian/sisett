@extends('layouts.main', ['activePage' => 'unidades', 'titlePage' => 'Nueva Unidad Educativa'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('unidades.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Unidad Educativa</h4>
                                <p class="card-category">Ingresar información</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="nombre_unidad_educativa" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombre_unidad_educativa" placeholder="Ingresar nombre" autofocus="true">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="antecedentes" class="col-sm-2 col-form-label">Antecedentes</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="antecedentes" placeholder="Ingresar antecedentes">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="unidad_educativa_id_clasificacion_ue" class="col-sm-2 col-form-label">Clasificacion</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="docente_id_tipo_docente" placeholder="Ingrese el tipo docente"> -->
                                        <select class="form-control selectpicker" data-style="btn btn-link" name="unidad_educativa_id_clasificacion_ue" id="unidad_educativa_id_clasificacion_ue">
                                            <option value="">Elija la clasificacion</option>
                                            @foreach ($clasificaciones as $clasificacion)
                                                <option value=" {{ $clasificacion['id_clasificacion_ue'] }} "> {{ $clasificacion['detalle_clasificacion_ue'] }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="unidad_educativa_id_lugar" class="col-sm-2 col-form-label">Lugar</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="docente_id_tipo_docente" placeholder="Ingrese el tipo docente"> -->
                                        <select class="form-control selectpicker" data-style="btn btn-link" name="unidad_educativa_id_lugar" id="unidad_educativa_id_lugar">
                                            <option value="">Elija el lugar</option>
                                            @foreach ($lugares as $lugar)
                                                <option value=" {{ $lugar['id_lugar'] }} "> {{ $lugar['descripcion_lugar'] }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <label for="unidad_educativa_id_clasificacion_ue" class="col-sm-2 col-form-label">Clasificacion</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="unidad_educativa_id_clasificacion_ue" placeholder="Ingresar clasificacion">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="unidad_educativa_id_lugar" class="col-sm-2 col-form-label">Lugar</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="unidad_educativa_id_lugar" placeholder="Ingresar lugar">
                                    </div>
                                </div> -->
                                
                                
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