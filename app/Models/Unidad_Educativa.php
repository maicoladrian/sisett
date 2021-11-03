<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad_Educativa extends Model
{
    use HasFactory;
    protected $table = 'unidad_educativa';
    protected $primaryKey = 'id_unidad_educativa';
    protected $fillable = [
        'nombre_unidad_educativa',
        'antecedentes',
        'unidad_educativa_id_clasificacion',
        'unidad_educativa_id_lugar'
    ];
}
