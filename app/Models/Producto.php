<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'descripcion', 'precioU', 'precioV', 'cantidadP'];
    //protected $table = 'productos';
    //public $timestamps = false;

}

