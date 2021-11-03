@extends('layouts.main', ['activePage' => 'mostrar_publicaciones', 'titlePage' => 'Publicaciones'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Publicaciones</h4>
                            <p class="card-category">Publicaciones registradas</p>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('publicaciones.create') }}" class="btn btn-sm btn-facebook">Agregar publicacion</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>Id</th>
                                        <th>Titulo</th>
                                        <th>Fecha/hora</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach($publicaciones as $publicacion)
                                        <tr>
                                            <td>{{ $publicacion->id_publicacion }}</td>
                                            <td>{{ $publicacion->titulo }}</td>
                                            <td>{{ $publicacion->fecha_hora_publicacion }}</td>
                                            <td class="td-actions text-right">
                                                
                                                <a href="{{ route('publicaciones.show', $publicacion->id_publicacion) }}" class="btn btn-info">
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
                            {{ $publicaciones->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/efectoCerrarAlert.js') }}"></script>
@endsection