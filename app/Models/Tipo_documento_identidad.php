<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_documento_identidad extends Model
{
    protected $table = 'tipo_documento_identidades';
    protected $fillable = ['id','descripcion'];

    public function proveedores()
    {
        return $this->hasMany(Proveedor::class,'tipo_documento_identidad_id');
    }

    public function clientes()
    {
        return $this->hasMany(Cliente::class,'tipo_documento_identidad_id');
    }
}
