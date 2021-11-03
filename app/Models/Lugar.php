<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    use HasFactory;

    protected $table = 'lugar';
    protected $primaryKey = 'id_lugar';
    protected $fillable = [
        'descripcion_lugar',
    ];
}
