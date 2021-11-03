<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HorarioController extends Controller
{
    //
    public function create(){
        return view('horarios.create');
    }

    //metodo para guardar en la base de datos
    public function store(Request $request){
        // Usuario::create($request->all());

        try{
            DB::beginTransaction();

            $horario = new Horario();
            $horario->hora_entrada_m = $request->hora_entrada_m;
            $horario->hora_salida_m = $request->hora_salida_m;
            $horario->hora_entrada_t = $request->hora_entrada_t;
            $horario->hora_salida_t = $request->hora_salida_t;
            $horario->fecha_horario = now();
            $horario->save();

            DB::commit();

            return redirect()->route('horarios.index')->with('success', 'Horario creado correctamente');

        } catch (\Exception $e){
            DB::rollBack();
        }
    }

    public function index(){
        // $users = User::all();
        $horarios = Horario::paginate(5);
        return view('horarios.index', compact('horarios'));
    }


    //1ra forma de traer un usuario por su id
    // public function show($id){
    //     $user = User::findOrFail($id);
    //     // dd($user);
    //     return view('users.show', compact('user'));
    // }

    //segunda forma
    public function show(Horario $horario){
        // $user = User::findOrFail($id);
        // dd($user);
        return view('horarios.show', compact('horario'));
    }
}
