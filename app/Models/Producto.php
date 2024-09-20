<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'marca_id', 'categoria_id', 'unidad_de_medida_id', 'precio_compra', 'precio_venta'];
}
