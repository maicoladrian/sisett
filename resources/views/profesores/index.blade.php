@extends('layouts.main', ['activePage' => 'mostrar_profesores', 'titlePage' => 'Lista de Profesores'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Profesores</h4>
                                    <p class="card-category">Profesores registrados</p>
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
                                            <a href="{{ route('profesores.create')}}" class="btn btn-sm btn-facebook">Agregar Profesor</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Nombre completo</th>
                                                <th>Celular</th>
                                                <th>U.E.</th>
                                                <th>Rol</th>
                                                <th>Registrado</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($profesores as $profesor)
                                                <tr>
                                                    <td>{{ $profesor->id_profesor}}</td>
                                                    <td>{{ $profesor->ap_paterno}}  {{ $profesor->ap_materno}}  {{ $profesor->nombres}}</td>
                                                    <td>{{ $profesor->celular}}</td>
                                                    <td>{{ $profesor->nombre_unidad_educativa}}</td>
                                                    <td>{{ $profesor->tipo_rol}}</td>
                                                    <td>{{ $profesor->created_at}}</td>
                                                    <td class="td-actions text-right">
                                                        
                                                        <a href="{{ route('profesores.show', $profesor->id_profesor) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                                        <!-- <a href="#" class="btn btn-info"><i class="material-icons">person</i></a> -->
                                                        <button class="btn btn-warning" type="button">
                                                            <i class="material-icons">edit</i>
                                                        </button>
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
                                    {{ $profesores->links() }}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/efectoCerrarAlert.js') }}"></script>
@endsection