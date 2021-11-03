<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $table = 'horario';
    protected $primaryKey = 'id_horario';
    protected $fillable = [
        'hora_entrada_m',
        'hora_salida_m',
        'hora_entrada_t',
        'hora_salida_t',
        'fecha_horario'
    ];
}
