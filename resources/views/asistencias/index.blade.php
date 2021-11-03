@extends('layouts.main', ['activePage' => 'mostrar_asistencias', 'titlePage' => 'Lista de Asistencias'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Asistencias</h4>
                                    <p class="card-category">Asistencias registrados</p>
                                </div>
                                <div class="card-body">
                                    @if(session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success')}}
                                    </div>
                                    <!-- <div type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        {{ session('success')}}
                                    </div> -->
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="#" class="btn btn-sm btn-facebook">Reporte mensual</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Nombre completo</th>
                                                <th>fecha</th>
                                                <th>hora</th>
                                                <th>Codigo de Control</th>
                                                <th>Registrado</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($asistencias as $asistencia)
                                                <tr>
                                                    <td>{{ $asistencia->id_asistencia}}</td>
                                                    <td>{{ $asistencia->ap_paterno}}  {{ $asistencia->ap_materno}}  {{ $asistencia->nombres}}</td>
                                                    <td>{{ $asistencia->fecha}}</td>
                                                    <td>{{ $asistencia->hora}}</td>
                                                    <td>{{ $asistencia->codigo_control}}</td>
                                                    <td>{{ $asistencia->created_at}}</td>
                                                    <td class="td-actions text-right">
                                                        
                                                        
                                                        <button class="btn btn-danger" type="button">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $asistencias->links() }}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection