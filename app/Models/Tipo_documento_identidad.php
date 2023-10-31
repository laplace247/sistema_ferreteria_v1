<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_documento_identidad extends Model
{
    protected $table = 'tipo_documento_identidad';
    protected $fillable = ['id','descripcion'];
}
