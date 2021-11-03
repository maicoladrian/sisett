@extends('layouts.main', ['activePage' => 'mostrar_cargos', 'titlePage' => 'Cargos'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Cargos</h4>
                            <p class="card-category">Cargos registrados</p>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('cargos.create') }}" class="btn btn-sm btn-facebook">Agregar cargo</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>Id</th>
                                        <th>Descripcion</th>
                                        <th>Creado</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach($cargos as $cargo)
                                        <tr>
                                            <td>{{ $cargo->id_cargo }}</td>
                                            <td>{{ $cargo->descripcion_cargo }}</td>
                                            <td>{{ $cargo->created_at }}</td>
                                            <td class="td-actions text-right">
                                                
                                                
                                            <a href="{{ route('cargos.edit', $cargo->id_cargo) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
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
                            {{ $cargos->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/efectoCerrarAlert.js') }}"></script>
@endsection