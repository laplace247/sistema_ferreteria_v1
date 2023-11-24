<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['id','nombre','numero','tipo_documento_identidad','telefono','correo_electronico','user_id'];

    public function egresos()
    {
        return $this->hasMany(Egreso::class,'cliente_id');
    }
}
