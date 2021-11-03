<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicacionController extends Controller
{
    //metodo para  traer la vista del formulario
    public function create(){

        return view('publicaciones.create');
    }

    //metodo para guardar en la base de datos
    public function store(Request $request){
        // Usuario::create($request->all());

        try{
            DB::beginTransaction();

            $publicacion = new Publicacion();
            $publicacion->titulo = $request->titulo;
            $publicacion->descripcion = $request->descripcion;
            $publicacion->url_doc = $request->url_doc;
            $publicacion->fecha_hora_publicacion = now();
            $publicacion->publicacion_id_users = $request->publicacion_id_users;
            $publicacion->save();

            DB::commit();

            return redirect()->route('publicaciones.index')->with('success', 'Publicación creado correctamente');

        } catch (\Exception $e){
            DB::rollBack();
        }
    }

    //metodo para devolver los registros paginados
    public function index(){
        // $rols = Rol::all();
        // $usuarios = Usuario::paginate(5);

        $publicaciones = Publicacion::join('users','publicacion.publicacion_id_users','=','users.id')
            ->join('rol','users.id','=','rol.id_rol')            
            ->select('publicacion.id_publicacion','publicacion.titulo','publicacion.descripcion','publicacion.url_doc','publicacion.fecha_hora_publicacion','users.username','rol.tipo_rol')
            ->paginate(5);

        return view('publicaciones.index', compact('publicaciones'));
    }

    //metodo para mostrar informacion de un registro
    public function show($id_publicacion){
        // $rol = Rol::findOrFail($id_rol);
        $publicacion = Publicacion::findOrFail($id_publicacion)
        ->join('users','publicacion.publicacion_id_users','=','users.id')
        ->join('rol','users.id','=','rol.id_rol')            
        ->select('publicacion.id_publicacion','publicacion.titulo','publicacion.descripcion','publicacion.url_doc','publicacion.fecha_hora_publicacion','users.username','rol.tipo_rol')
        ->where('publicacion.id_publicacion', '=' , $id_publicacion)
        ->get();
        // dd($publicacion);

        return view('publicaciones.show', compact('publicacion'));

    }
}
