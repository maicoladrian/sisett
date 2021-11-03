<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesor';
    protected $primaryKey = 'id_profesor';
    protected $fillable = [
        'profesor_id_informacion_personal',
        'profesor_id_unidad_educativa',
        'profesor_id_rol'
    ];
}
