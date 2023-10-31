<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso_detalles extends Model
{
    protected $table = 'ingresos_detalles';
    protected $fillable = ['id','ingreso_id','articulo_id','cantidad','precio_compra','impuesto','total','total_impuesto','user_id'];
}
