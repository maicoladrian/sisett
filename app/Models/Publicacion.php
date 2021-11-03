<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    protected $table = 'publicacion';
    protected $primaryKey = 'id_publicacion';
    protected $fillable = [
        'titulo',
        'descripcion',
        'url_doc',
        'fecha_hora_publicacion',
        'publicacion_id_users'
    ];
}
