<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    //
    public function create(){
        return view('cargos.create');
    }

    public function store(Request $request){
        Cargo::create($request->all());

        // Rol::create($request->only('name','username','email')
        // +[
        //     'password' => bcrypt($request->input('password'))
        // ]);

        return redirect()->route('cargos.index')->with('success','Cargo creado correctamente');
    }

    public function index(){
        // $users = User::all();
        $cargos = Cargo::paginate(5);
        return view('cargos.index', compact('cargos'));
    }


    //1ra forma de traer un usuario por su id
    // public function show($id){
    //     $user = User::findOrFail($id);
    //     // dd($user);
    //     return view('users.show', compact('user'));
    // }

    //segunda forma
    public function show(Cargo $cargo){
        // $user = User::findOrFail($id);
        // dd($user);
        return view('cargos.show', compact('cargo'));
    }

    //metodo para editar cargo
    public function edit(Cargo $cargo){
        return view('cargos.edit', compact('cargo'));
    }

    //metodo update para actualizar cargo
    public function update(Request $request, $id_cargo){
        $cargo = Cargo::findOrFail($id_cargo);
        $data = $request->only('descripcion_cargo');

        $data = $request->all();

        $cargo->update($data);
        return redirect()->route('cargos.index')->with('success','Cargo actualizado correctamente');

    }
}
