@extends('layouts.main', ['activePage' => 'mostrar_personales', 'titlePage' => 'Lista de Personales'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Personales</h4>
                                    <p class="card-category">Personales registrados</p>
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
                                            <a href="{{ route('personales.create')}}" class="btn btn-sm btn-facebook">Agregar Personal</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Nombre completo</th>
                                                <th>Celular</th>
                                                <th>Codigo</th>
                                                <th>Cargo</th>
                                                <th>Registrado</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($personales as $personal)
                                                <tr>
                                                    <td>{{ $personal->id_personal}}</td>
                                                    <td>{{ $personal->ap_paterno}}  {{ $personal->ap_materno}}  {{ $personal->nombres}}</td>
                                                    <td>{{ $personal->celular}}</td>
                                                    <td>{{ $personal->codigo_control}}</td>
                                                    <td>{{ $personal->descripcion_cargo}}</td>
                                                    <td>{{ $personal->created_at}}</td>
                                                    <td class="td-actions text-right">
                                                        
                                                        <a href="{{ route('personales.show', $personal->id_personal) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                                        <!-- <a href="#" class="btn btn-info"><i class="material-icons">person</i></a> -->
                                                        <a href="{{ route('personales.edit', $personal->id_personal) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
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
                                    {{ $personales->links() }}

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