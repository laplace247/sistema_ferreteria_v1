<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_documento extends Model
{
    protected $table = 'tipo_documento';
    protected $fillable = ['id','descripcion'];

    public function egresos()
    {
        return $this->hasMany(Egreso::class,'tipo_documento_id');
    }

    public function ingresos()
    {
        return $this->hasMany(Ingreso::class,'tipo_documento_id');
    }
}
