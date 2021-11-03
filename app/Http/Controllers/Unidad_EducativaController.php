<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion_UE;
use App\Models\Lugar;
use App\Models\Unidad_Educativa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Unidad_EducativaController extends Controller
{
    //

    //
    public function create(){

        $clasificaciones = Clasificacion_UE::all();

        $lugares = Lugar::all();

        return view('unidades.create', compact('clasificaciones','lugares'));

        // $unidades = Unidad_Educativa::all();

        // return view('unidades.create', compact('unidades'));
    }

    public function store(Request $request){
        // Usuario::create($request->all());

        try{
            DB::beginTransaction();

            $unidad = new Unidad_Educativa();
            $unidad->nombre_unidad_educativa = $request->nombre_unidad_educativa;
            $unidad->antecedentes = $request->antecedentes;
            $unidad->unidad_educativa_id_clasificacion_ue = $request->unidad_educativa_id_clasificacion_ue;
            $unidad->unidad_educativa_id_lugar = $request->unidad_educativa_id_lugar;
            $unidad->save();

            DB::commit();

            return redirect()->route('unidades.index')->with('success', 'Unidad Educativa creado correctamente');

        } catch (\Exception $e){
            DB::rollBack();
        }
        
        
    }

    public function index(){
        // $rols = Rol::all();
        // $usuarios = Usuario::paginate(5);

        $unidades = Unidad_Educativa::join('clasificacion_ue','unidad_educativa.unidad_educativa_id_clasificacion_ue','=','clasificacion_ue.id_clasificacion_ue')
            ->join('lugar','unidad_educativa.unidad_educativa_id_lugar','=','lugar.id_lugar')
            ->select('unidad_educativa.id_unidad_educativa','unidad_educativa.nombre_unidad_educativa','unidad_educativa.antecedentes','clasificacion_ue.detalle_clasificacion_ue','lugar.descripcion_lugar','unidad_educativa.created_at')
            ->paginate(5);

        return view('unidades.index', compact('unidades'));
    }

    

    

    public function show($id_unidad_educativa){
        // $rol = Rol::findOrFail($id_rol);
        $unidad = Unidad_Educativa::findOrFail($id_unidad_educativa)
        ->join('clasificacion_ue','unidad_educativa.unidad_educativa_id_clasificacion_ue','=','clasificacion_ue.id_clasificacion_ue')
        ->join('lugar','unidad_educativa.unidad_educativa_id_lugar','=','lugar.id_lugar')
        ->select('unidad_educativa.id_unidad_educativa','unidad_educativa.nombre_unidad_educativa','unidad_educativa.antecedentes','clasificacion_ue.detalle_clasificacion_ue','lugar.descripcion_lugar','unidad_educativa.created_at')
        ->where('unidad_educativa.id_unidad_educativa', '=' , $id_unidad_educativa)
        ->get();
        // dd($rol);

        return view('unidades.show', compact('unidad'));

    }

    
}
