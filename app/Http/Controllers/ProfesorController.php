<?php

namespace App\Http\Controllers;

use App\Models\Informacion_Personal;
use App\Models\Profesor;
use App\Models\Rol;
use App\Models\Unidad_Educativa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfesorController extends Controller
{

    //
    public function create(){

        $unidades = Unidad_Educativa::all();

        $roles = Rol::all();

        return view('profesores.create', compact('unidades','roles'));
    }

    public function store(Request $request){
        // Usuario::create($request->all());

        try{
            DB::beginTransaction();

            $informacion_personal = new Informacion_Personal();
            $informacion_personal->ap_paterno = $request->ap_paterno;
            $informacion_personal->ap_materno = $request->ap_materno;
            $informacion_personal->nombres = $request->nombres;
            $informacion_personal->ci = $request->ci;
            $informacion_personal->celular = $request->celular;
            $informacion_personal->save();


            $profesor = new Profesor();
            $profesor->profesor_id_informacion_personal = $informacion_personal->id_informacion_personal;
            $profesor->profesor_id_unidad_educativa = $request->profesor_id_unidad_educativa;
            $profesor->profesor_id_rol = $request->profesor_id_rol;
            $profesor->save();

            DB::commit();

            return redirect()->route('profesores.index')->with('success', 'Profesor registrado correctamente');

        } catch (\Exception $e){
            DB::rollBack();
        }
        
        
    }

    //
    public function index(){
        // $rols = Rol::all();
        // $usuarios = Usuario::paginate(5);

        $profesores = Profesor::join('informacion_personal','profesor.profesor_id_informacion_personal','=','informacion_personal.id_informacion_personal')
            ->join('unidad_educativa','profesor.profesor_id_unidad_educativa','=','unidad_educativa.id_unidad_educativa')
            ->join('rol','profesor.profesor_id_rol','=','rol.id_rol')
            ->select('profesor.id_profesor','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.ci','informacion_personal.celular','unidad_educativa.nombre_unidad_educativa','rol.tipo_rol','profesor.created_at')
            ->paginate(5);

        return view('profesores.index', compact('profesores'));
    }

    

    public function show($id_profesor){
        // $rol = Rol::findOrFail($id_rol);
        $profesor = Profesor::findOrFail($id_profesor)
        ->join('informacion_personal','profesor.profesor_id_informacion_personal','=','informacion_personal.id_informacion_personal')
        ->join('unidad_educativa','profesor.profesor_id_unidad_educativa','=','unidad_educativa.id_unidad_educativa')
        ->join('rol','profesor.profesor_id_rol','=','rol.id_rol')
        ->select('profesor.id_profesor','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.ci','informacion_personal.celular','unidad_educativa.nombre_unidad_educativa','rol.tipo_rol','profesor.created_at')
        ->where('profesor.id_profesor', '=' , $id_profesor)
        ->get();
        // dd($rol);

        

        // $usuario = Usuario::join('informacion_personal','usuario.usuario_id_informacion_personal','=','informacion_personal.id_informacion_personal')
        //     ->join('rol','usuario.usuario_id_rol','=','rol.id_rol')
        //     ->select('usuario.id_usuario','usuario.usuario','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.celular','informacion_personal.correo','rol.tipo_rol','usuario.created_at')
        //     ->where('usuario.id_usuario', '=' , $id_usuario)
        //     ->get();

        // dd($usuario);
        // dd($id_usuario);
        // echo $usuario;
        // echo $id_usuario;

        // return view('usuario.show', compact('usuario'));
        return view('profesores.show', compact('profesor'));

    }
}
