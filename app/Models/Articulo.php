<?php

namespace App\Models;

class User
{
    protected $table = 'articulos';
    protected $fillable = ['id','codigo','nombre','descripcion','precio_venta','precio_compra','imagen','categoria_id','stock','user_id'];
}
