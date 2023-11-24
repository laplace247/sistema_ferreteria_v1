<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = 'ingresos';
    protected $fillable = ['id','tipo_documento','proveedor_id','serie','numero','fecha','impuesto','total','total_impuesto','user_id'];

    public function ingreso_detalles()
    {
        return $this->hasMany(ingresos_detalles::class,'ingreso_id');
    }

}
