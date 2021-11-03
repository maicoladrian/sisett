<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $table = 'personal';
    protected $primaryKey = 'id_personal';
    protected $fillable = [
        'codigo_control',
        'mac_pc',
        'personal_id_informacion_personal',
        'personal_id_cargo'
    ];
}
