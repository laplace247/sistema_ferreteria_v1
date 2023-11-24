<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['id','nombre','descripcion','user_id',];

    public function articulos()
    {
        return $this->hasMany(Articulo::class,'categoria_id');
    }
}
