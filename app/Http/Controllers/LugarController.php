<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;

class LugarController extends Controller
{
    //
    public function create(){
        return view('lugares.create');
    }

    public function store(Request $request){
        Lugar::create($request->all());

        return redirect()->route('lugares.index')->with('success','Lugar creado correctamente');
    }

    public function index(){
        // $users = User::all();
        $lugares = Lugar::paginate(5);
        return view('lugares.index', compact('lugares'));
    }


    //1ra forma de traer un usuario por su id
    // public function show($id){
    //     $user = User::findOrFail($id);
    //     // dd($user);
    //     return view('users.show', compact('user'));
    // }

    //segunda forma
    public function show(Lugar $lugar){
        // $user = User::findOrFail($id);
        // dd($user);
        return view('lugares.show', compact('lugar'));
    }

    //metodo para editar lugar
    public function edit(Lugar $lugar){
        return view('lugares.edit', compact('lugar'));
    }

    //metodo update para actualizar lugar
    public function update(Request $request, $id_lugar){
        $lugar = Lugar::findOrFail($id_lugar);
        $data = $request->only('descripcion_lugar');

        $data = $request->all();

        $lugar->update($data);
        return redirect()->route('lugares.index')->with('success','Lugar actualizado correctamente');

    }
}
