<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    //
    public function create(){
        return view('rols.create');
    }

    public function store(Request $request){
        Rol::create($request->all());

        // Rol::create($request->only('name','username','email')
        // +[
        //     'password' => bcrypt($request->input('password'))
        // ]);

        return redirect()->route('rols.index')->with('success','Rol creado correctamente');
    }

    public function index(){
        // $users = User::all();
        $rols = Rol::paginate(5);
        return view('rols.index', compact('rols'));
    }


    //1ra forma de traer un usuario por su id
    // public function show($id){
    //     $user = User::findOrFail($id);
    //     // dd($user);
    //     return view('users.show', compact('user'));
    // }

    //segunda forma
    public function show(Rol $rol){
        // $user = User::findOrFail($id);
        // dd($user);
        return view('rols.show', compact('rol'));
    }

    //metodo para editar rol
    public function edit(Rol $rol){
        return view('rols.edit', compact('rol'));
    }

    //metodo update para actualizar rol
    public function update(Request $request, $id_rol){
        $rol = Rol::findOrFail($id_rol);
        $data = $request->only('tipo_rol');

        $data = $request->all();

        $rol->update($data);
        return redirect()->route('rols.index')->with('success','Rol actualizado correctamente');

    }
}
