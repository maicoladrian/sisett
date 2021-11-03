<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function create(){
        $roles = Rol::all();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request){
        // User::create($request->all());

        User::create($request->only('name','username','email','users_id_rol')
        +[
            'password' => bcrypt($request->input('password'))
        ]);

        return redirect()->route('users.index')->with('success','Usuario creado correctamente');
    }

    public function index(){
        // $users = User::all();
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }


    //1ra forma de traer un usuario por su id
    // public function show($id){
    //     $user = User::findOrFail($id);
    //     // dd($user);
    //     return view('users.show', compact('user'));
    // }

    //segunda forma
    public function show(User $user){
        // $user = User::findOrFail($id);
        // dd($user);
        return view('users.show', compact('user'));
    }

}
