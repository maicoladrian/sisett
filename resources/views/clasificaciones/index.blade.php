@extends('layouts.main', ['activePage' => 'mostrar_clasificaciones', 'titlePage' => 'Clasificaciones'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Clasificaciones</h4>
                            <p class="card-category">Clasificaciones registrados</p>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('clasificaciones.create') }}" class="btn btn-sm btn-facebook">Agregar clasificacion</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>Id</th>
                                        <th>Detalle</th>
                                        <th>Creado</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach($clasificaciones as $clasificacion)
                                        <tr>
                                            <td>{{ $clasificacion->id_clasificacion_ue }}</td>
                                            <td>{{ $clasificacion->detalle_clasificacion_ue }}</td>
                                            <td>{{ $clasificacion->created_at }}</td>
                                            <td class="td-actions text-right">
                                                
                                                
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
                            {{ $clasificaciones->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/efectoCerrarAlert.js') }}"></script>
@endsection