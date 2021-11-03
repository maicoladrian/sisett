<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacion_UE extends Model
{
    use HasFactory;

    protected $table = 'clasificacion_ue';
    protected $primaryKey = 'id_clasificacion_ue';
    protected $fillable = [
        'detalle_clasificacion_ue',
    ];
}
