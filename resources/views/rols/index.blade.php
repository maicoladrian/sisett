@extends('layouts.main', ['activePage' => 'mostrar_rols', 'titlePage' => 'Roles'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Roles</h4>
                            <p class="card-category">Roles registrados</p>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('rols.create') }}" class="btn btn-sm btn-facebook">Agregar rol</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>Id</th>
                                        <th>Tipo rol</th>
                                        <th>Creado</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach($rols as $rol)
                                        <tr>
                                            <td>{{ $rol->id_rol }}</td>
                                            <td>{{ $rol->tipo_rol }}</td>
                                            <td>{{ $rol->created_at }}</td>
                                            <td class="td-actions text-right">
                                                
                                                <a href="{{ route('rols.edit', $rol->id_rol) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                <!-- <button class="btn btn-warning" type="button">
                                                    <i class="material-icons">edit</i>
                                                </button> -->
                                                <!-- <button class="btn btn-danger" type="button">
                                                    <i class="material-icons">close</i>
                                                </button> -->
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer mr-auto">
                            {{ $rols->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="{{ asset('js/efectoCerrarAlert.js') }}"></script>
@endsection