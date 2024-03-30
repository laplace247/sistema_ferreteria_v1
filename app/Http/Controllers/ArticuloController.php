<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ArticuloController extends Controller
{
    public $articulos;

    public function __construct()
    {
        $this->middleware('auth');

        $this->articulos = [
            (object)[
                'id' => 1,
                'categoria' => (object)['nombre' => 'Herramientas'],
                'codigo' => '001',
                'nombre' => 'Martillo',
                'precio_venta' => 25.50,
                'precio_compra' => 15.00,
                'stock' => 35,
                'descripcion' => 'Leer más sobre artículo 1',
            ],
            (object)[
                'id' => 2,
                'categoria' => (object)['nombre' => 'Materiales de construcción'],
                'codigo' => '002',
                'nombre' => 'Ladrillos',
                'precio_venta' => 0.80,
                'precio_compra' => 0.50,
                'stock' => 20,
                'descripcion' => 'Leer más sobre artículo 2',
            ],
            (object)[
                'id' => 3,
                'categoria' => (object)['nombre' => 'Pinturas'],
                'codigo' => '003',
                'nombre' => 'Pintura blanca',
                'precio_venta' => 30.00,
                'precio_compra' => 20.00,
                'stock' => 2,
                'descripcion' => 'Leer más sobre artículo 3',
            ],
            (object)[
                'id' => 4,
                'categoria' => (object)['nombre' => 'Electricidad'],
                'codigo' => '004',
                'nombre' => 'Cable eléctrico',
                'precio_venta' => 10.00,
                'precio_compra' => 7.50,
                'stock' => 18,
                'descripcion' => 'Leer más sobre artículo 4',
            ],
            (object)[
                'id' => 5,
                'categoria' => (object)['nombre' => 'Fontanería'],
                'codigo' => '005',
                'nombre' => 'Tubería de PVC',
                'precio_venta' => 5.00,
                'precio_compra' => 3.00,
                'stock' => 12,
                'descripcion' => 'Leer más sobre artículo 5',
            ]
        ];
    }

    public function index()
    {
        return view("articulos.index", ['articulos' => $this->articulos]);
    }

    public function show($id)
    {
        $articulo = collect($this->articulos)->firstWhere('id', $id);

        return view("articulos.show", ['articulo' => $articulo]);
    }

    public function create()
    {
        $categorias = [
            (object)['id' => 1, 'nombre' => 'Herramientas'],
            (object)['id' => 2, 'nombre' => 'Materiales de construcción'],
            (object)['id' => 3, 'nombre' => 'Pinturas'],
            (object)['id' => 4, 'nombre' => 'Electricidad'],
            (object)['id' => 5, 'nombre' => 'Fontanería']
        ];
        return view("articulos.create", compact("categorias"));
    }

    public function edit($id)
    {
        
    }
}