@extends('layouts.main', ['activePage' => 'mostrar_horarios', 'titlePage' => 'Horarios'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Horarios</h4>
                            <p class="card-category">Horarios registrados</p>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('horarios.create') }}" class="btn btn-sm btn-facebook">Agregar horario</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>Id</th>
                                        <th>Entrada Mañana</th>
                                        <th>Salida Mañana</th>
                                        <th>Entrada Tarde</th>
                                        <th>Salida Tarde</th>
                                        <th>Creado</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach($horarios as $horario)
                                        <tr>
                                            <td>{{ $horario->id_horario }}</td>
                                            <td>{{ $horario->hora_entrada_m }}</td>
                                            <td>{{ $horario->hora_salida_m }}</td>
                                            <td>{{ $horario->hora_entrada_t }}</td>
                                            <td>{{ $horario->hora_salida_t }}</td>
                                            <td>{{ $horario->created_at }}</td>
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
                            {{ $horarios->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/efectoCerrarAlert.js') }}"></script>
@endsection