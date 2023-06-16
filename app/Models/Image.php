<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'ejercicio_cinco'; 
    protected $fillable = ['nombre_archivo', 'titulo', 'descripcion'];
}
