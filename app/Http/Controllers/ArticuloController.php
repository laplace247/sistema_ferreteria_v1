<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = array(
            (object)[
                "id" => 1,
                "codigo" => "Cod001",
                "nombre" => "Alicate de pico de loro azul",
                "precio_venta" => "20.50",
                "precio_compra" => "15.50",
                
            ],
            (object)[
                "id" => 2,
                "codigo" => "Cod002",
                "nombre" => "Martillo de mango de acero inoxidable",
                "precio_venta" => "20.50",
                "precio_compra" => "15.50",
            ]
        );
        return view("articulos.index", compact("articulos"));
    }
}
