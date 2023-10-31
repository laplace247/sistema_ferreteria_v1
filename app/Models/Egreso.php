<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    protected $table = 'egresos';
    protected $fillable = ['id','tipo_documento','cliente_id','serie','fecha','impuesto','total','total_impuesto','user_id'];}
