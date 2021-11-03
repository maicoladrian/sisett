<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Informacion_Personal;
use App\Models\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{
    //
    //
    public function create(){

        $cargos = Cargo::all();

        return view('personales.create', compact('cargos'));
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


            $personal = new Personal();
            $personal->codigo_control = $request->codigo_control;
            $personal->mac_pc = $request->mac_pc;
            $personal->personal_id_informacion_personal = $informacion_personal->id_informacion_personal;
            $personal->personal_id_cargo = $request->personal_id_cargo;
            $personal->save();

            DB::commit();

            return redirect()->route('personales.index')->with('success', 'Personal registrado correctamente');

        } catch (\Exception $e){
            DB::rollBack();
        }
        
        
    }

    //
    public function index(){
        // $rols = Rol::all();
        // $usuarios = Usuario::paginate(5);

        $personales = Personal::join('informacion_personal','personal.personal_id_informacion_personal','=','informacion_personal.id_informacion_personal')
            ->join('cargo','personal.personal_id_cargo','=','cargo.id_cargo')
            ->select('personal.id_personal','personal.codigo_control','personal.mac_pc','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.ci','informacion_personal.celular','cargo.descripcion_cargo','personal.created_at')
            ->paginate(5);

        return view('personales.index', compact('personales'));
    }

    

    public function show($id_personal){
        // $rol = Rol::findOrFail($id_rol);
        $personal = Personal::findOrFail($id_personal)
        ->join('informacion_personal','personal.personal_id_informacion_personal','=','informacion_personal.id_informacion_personal')
        ->join('cargo','personal.personal_id_cargo','=','cargo.id_cargo')
        ->select('personal.id_personal','personal.codigo_control','personal.mac_pc','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.ci','informacion_personal.celular','cargo.descripcion_cargo','personal.created_at')
        ->where('personal.id_personal', '=' , $id_personal)
        ->get();
        // dd($rol);

        return view('personales.show', compact('personal'));

    }

    //metodo para editar personal
    public function edit($id_personal){

        $cargos = Cargo::all();

        $personal = Personal::findOrFail($id_personal)
        ->join('informacion_personal','personal.personal_id_informacion_personal','=','informacion_personal.id_informacion_personal')
        ->join('cargo','personal.personal_id_cargo','=','cargo.id_cargo')
        ->select('personal.*','informacion_personal.*','cargo.*')
        ->where('personal.id_personal', '=' , $id_personal)
        ->get();
        return view('personales.edit', compact('personal', 'cargos'));
    }

    //metodo update para actualizar personal
    public function update(Request $request, $id_personal){

        $personal = Personal::findOrFail($id_personal);

        $para_infor = Personal::findOrFail($id_personal)
        ->join('informacion_personal','personal.personal_id_informacion_personal','=','informacion_personal.id_informacion_personal')
        ->join('cargo','personal.personal_id_cargo','=','cargo.id_cargo')
        ->select('personal.*','informacion_personal.*','cargo.*')
        ->where('personal.id_personal', '=' , $id_personal)
        ->get();
        $informacion_personal = Informacion_Personal::findOrFail($para_infor[0]['personal_id_informacion_personal']);
        
        $data1 = $request->only('codigo_control', 'mac_pc','personal_id_cargo');
        $data2 = $request->only('ap_paterno', 'ap_materno','nombres', 'ci', 'celular');

        $data1 = $request->all();
        $data2 = $request->all();

        $informacion_personal->update($data2);
        $personal->update($data1);
        
        return redirect()->route('personales.index')->with('success','Personal actualizado correctamente');

    }
    
}
