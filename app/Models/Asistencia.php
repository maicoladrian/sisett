<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
    protected $table = 'asistencia';
    protected $primaryKey = 'id_asistencia';
    protected $fillable = [
        'fecha',
        'hora',
        'asistencia_id_personal',
        'asistencia_id_horario'
    ];
}
