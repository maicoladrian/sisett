@extends('layouts.main', ['activePage' => 'mostrar_lugares', 'titlePage' => 'Lugares'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Lugares</h4>
                            <p class="card-category">Lugares registrados</p>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('lugares.create') }}" class="btn btn-sm btn-facebook">Agregar lugar</a>
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
                                        @foreach($lugares as $lugar)
                                        <tr>
                                            <td>{{ $lugar->id_lugar }}</td>
                                            <td>{{ $lugar->descripcion_lugar }}</td>
                                            <td>{{ $lugar->created_at }}</td>
                                            <td class="td-actions text-right">
                                                
                                                <a href="{{ route('lugares.edit', $lugar->id_lugar) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
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
                            {{ $lugares->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/efectoCerrarAlert.js') }}"></script>
@endsection