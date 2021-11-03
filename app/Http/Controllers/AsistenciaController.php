<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Horario;
use App\Models\Personal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsistenciaController extends Controller
{
    //
    //
    public function create(){

        $horarios = Horario::all();

        $personales = Personal::all();

        return view('asistencias.create', compact('horarios','personales'));
    }

    public function store(Request $request){
        // Usuario::create($request->all());

        try{
            DB::beginTransaction();

            $asistencia = new Asistencia();
            $asistencia->fecha = $request->fecha;
            $asistencia->hora = $request->hora;
            $asistencia->asistencia_id_personal = $request->asistencia_id_personal;
            $asistencia->asistencia_id_horario = $request->asistencia_id_horario;
            $asistencia->save();

            DB::commit();

            return redirect()->route('asistencias.index')->with('success', 'Asistencia registrada correctamente');

        } catch (\Exception $e){
            DB::rollBack();
        }
        
        
    }

    //
    public function index(){
        // $rols = Rol::all();
        // $usuarios = Usuario::paginate(5);

        $asistencias = Asistencia::join('personal','asistencia.asistencia_id_personal','=','personal.id_personal')
            ->join('informacion_personal','personal.personal_id_informacion_personal','=','informacion_personal.id_informacion_personal')
            ->join('horario','asistencia.asistencia_id_horario','=','horario.id_horario')
            ->select('asistencia.id_asistencia','asistencia.fecha','asistencia.hora','personal.codigo_control','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','horario.hora_entrada_m','horario.hora_salida_m','horario.hora_entrada_t','horario.hora_salida_t','asistencia.created_at')
            ->paginate(5);

        return view('asistencias.index', compact('asistencias'));
    }

    

    public function show($id_asistencia){
        // $rol = Rol::findOrFail($id_rol);
        $asistencia = Asistencia::findOrFail($id_asistencia)
        ->join('personal','asistencia.asistencia_id_personal','=','personal.id_personal')
        ->join('informacion_personal','personal.personal_id_informacion_personal','=','informacion_personal.id_informacion_personal')
        ->join('horario','asistencia.asistencia_id_horario','=','horario.id_horario')
        ->select('asistencia.id_asistencia','asistencia.fecha','asistencia.hora','personal.codigo_control','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','horario.hora_entrada_m','horario.hora_salida_m','horario.hora_entrada_t','horario.hora_salida_t','asistencia.created_at')
        ->where('asistencia.id_asistencia', '=' , $id_asistencia)
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
        return view('asistencias.show', compact('asistencia'));

    }

    //metodo para realizar el control de la asistencia del personal por el codigo de personal
    public function control(Request $request){
        //en el request solamente esta llegando el codigo de personal ej. 3852998AJJ

        $codigo_control = $request->codigo_control;
        $personal = Personal::where('codigo_control', '=' , $codigo_control)->first();
        if($personal){
            // dd($personal);
            //obtenemos el ultimo horario vigente
            $horario = Horario::all();
            // dd($horario);
            // var_dump($horario->last())

            //obtenemos la fecha y hora actual
            $fechaActual = Carbon::now();
            $fechaActual = $fechaActual->format('Y-m-d');
            $horaActual = Carbon::now();
            $horaActual = $horaActual->format('H:i:s');

            
            try{
                DB::beginTransaction();
    
                $asistencia = new Asistencia();
                $asistencia->fecha = $fechaActual;
                $asistencia->hora = $horaActual;
                $asistencia->asistencia_id_personal = $personal->id_personal;
                $asistencia->asistencia_id_horario = $horario->last()->id_horario;
                $asistencia->save();
    
                DB::commit();
    
                return redirect()->route('inicio.control')->with('success', 'Asistencia registrada correctamente');
    
            } catch (\Exception $e){
                DB::rollBack();
            }
        }
        else{
            return redirect()->route('inicio.control')->with('error', 'El codigo de personal no existe');
        }

    }
}
