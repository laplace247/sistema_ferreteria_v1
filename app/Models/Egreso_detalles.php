<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso_detalles extends Model
{
    protected $table = 'egresos_detalles';
    protected $fillable = ['id','ingreso_id','articulo_id','cantidad','precio_venta','impuesto','total','total_impuesto','user_id'];

}
