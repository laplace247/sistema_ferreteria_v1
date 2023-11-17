<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngresoController extends Controller
{
    public function index()
    {
        $articulos = array(
            (object)[
                "id" => 1,
                "nombre" => "Alicate de pico de loro azul",
                "descripcion" => "Tiene buena presion en los agarres",
                
            ],
            (object)[
                "id" => 2,
                "nombre" => "Martillo de mango de acero inoxidable",
                "descripcion" => "Tiene alta durabilidad",
            ]
        );
        return view("categoria.index", compact("categoria"));
    }
}
