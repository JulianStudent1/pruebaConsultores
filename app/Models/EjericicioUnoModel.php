<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EjericicioUnoModel extends Model
{
    protected $table = 'ejercicio_uno'; 
    public $timestamps = false;
    protected $fillable = ['nombre', 'correo', 'contrasena','fecha_registro'];
}
