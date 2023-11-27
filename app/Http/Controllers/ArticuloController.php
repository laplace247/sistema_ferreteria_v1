<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = Articulo::all();
        return view("articulos.index", compact("articulos"));
    }

    public function show($id)
    {
        $articulo = Articulo::findOrFail($id);
        return view("articulos.show", compact("articulo"));
    }

    public function create()
    {
        return view("articulos.create");
    }

    public function edit($id)
    {
        $articulo = Articulo::findOrFail($id);
        return view("articulos.edit", compact("articulo"));
    }

    public function destroy()
    {
        
    }
}
