@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Nuevo usuario'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('users.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Usuario</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name" placeholder="Ingresar nombre" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="username" class="col-sm-2 col-form-label">Nombre de usuario</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="username" placeholder="Ingresar usuario">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name="email" placeholder="Ingresar email">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control" name="password" placeholder="Ingresar contraseña">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="users_id_rol" class="col-sm-2 col-form-label">Rol</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="docente_id_tipo_docente" placeholder="Ingrese el tipo docente"> -->
                                        <select class="form-control selectpicker" data-style="btn btn-link" name="users_id_rol" id="users_id_rol">
                                            <option value="">Elija el rol</option>
                                            @foreach ($roles as $rol)
                                                <option value=" {{ $rol['id_rol'] }} "> {{ $rol['tipo_rol'] }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <label for="users_id_rol" class="col-sm-2 col-form-label">Rol</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="users_id_rol" placeholder="Ingresar rol">
                                    </div>
                                </div> -->
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection 