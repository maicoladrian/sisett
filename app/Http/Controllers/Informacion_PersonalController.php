<?php

namespace App\Http\Controllers;

use App\Models\Informacion_Personal;
use Illuminate\Http\Request;

class Informacion_PersonalController extends Controller
{
    //
    public function create(){
        return view('informaciones.create');
    }

    public function store(Request $request){
        Informacion_Personal::create($request->all());

        // Rol::create($request->only('name','username','email')
        // +[
        //     'password' => bcrypt($request->input('password'))
        // ]);

        return redirect()->route('informaciones.index')->with('success','Rol creado correctamente');
    }

    public function index(){
        // $users = User::all();
        $informaciones = Informacion_Personal::paginate(5);
        return view('informaciones.index', compact('informaciones'));
    }


    //1ra forma de traer un usuario por su id
    // public function show($id){
    //     $user = User::findOrFail($id);
    //     // dd($user);
    //     return view('users.show', compact('user'));
    // }

    //segunda forma
    public function show(Informacion_Personal $informacion){
        // $user = User::findOrFail($id);
        // dd($user);
        return view('informaciones.show', compact('informacion'));
    }
}
