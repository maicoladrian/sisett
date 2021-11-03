<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion_UE;
use Illuminate\Http\Request;

class Clasificacion_UEController extends Controller
{
    //
    public function create(){
        return view('clasificaciones.create');
    }

    public function store(Request $request){
        Clasificacion_UE::create($request->all());

        return redirect()->route('clasificaciones.index')->with('success','Clasificacion creado correctamente');
    }

    public function index(){
        // $users = User::all();
        $clasificaciones = Clasificacion_UE::paginate(5);
        return view('clasificaciones.index', compact('clasificaciones'));
    }


    //1ra forma de traer un usuario por su id
    // public function show($id){
    //     $user = User::findOrFail($id);
    //     // dd($user);
    //     return view('users.show', compact('user'));
    // }

    //segunda forma
    public function show(Clasificacion_UE $clasificacion){
        // $user = User::findOrFail($id);
        // dd($user);
        return view('clasificaciones.show', compact('clasificacion'));
    }
}
