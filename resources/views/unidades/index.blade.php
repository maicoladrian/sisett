@extends('layouts.main', ['activePage' => 'mostrar_unidades', 'titlePage' => 'Unidades Educativas'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Unidades Educativas</h4>
                            <p class="card-category">Unidades Educativas registradas</p>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('unidades.create') }}" class="btn btn-sm btn-facebook">Agregar Unidad Educativa</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Registrado</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach($unidades as $unidad)
                                        <tr>
                                            <td>{{ $unidad->id_unidad_educativa }}</td>
                                            <td>{{ $unidad->nombre_unidad_educativa }}</td>
                                            <td>{{ $unidad->created_at }}</td>
                                            <td class="td-actions text-right">
                                                
                                                <a href="{{ route('unidades.show', $unidad->id_unidad_educativa) }}" class="btn btn-info">
                                                    <i class="material-icons">person</i>
                                                </a>
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
                            {{ $unidades->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/efectoCerrarAlert.js') }}"></script>
@endsection