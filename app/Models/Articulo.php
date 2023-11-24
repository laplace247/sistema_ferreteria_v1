<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
    protected $fillable = ['id','codigo','nombre','descripcion','precio_venta','precio_compra','imagen','categoria_id','stock','user_id'];

    public function egresos_detalles()
    {
        return $this->hasMany(Egreso_detalles::class,'articulo_id');
    }
}
