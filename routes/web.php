<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MatriculaController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();


Route::get('/', function () {
    //return redirect(route('login'));
    return redirect(route('home'));
});

Route::get('/home', function() {
    return view('home');
})->name('home');

//CRUD ARTICULOS
Route::get('articulos', function(){
    $articulos = [
        (object)[
            'id' => 1,
            'categoria' => (object)['id' => 1, 'nombre' => 'Herramientas'],
            'codigo' => '001',
            'nombre' => 'Martillo',
            'precio_venta' => 25.50,
            'precio_compra' => 15.00,
            'stock' => 35,
            'descripcion' => 'Leer más sobre artículo 1',
        ],
        (object)[
            'id' => 2,
            'categoria' => (object)['id' => 2, 'nombre' => 'Materiales de construcción'],
            'codigo' => '002',
            'nombre' => 'Ladrillos',
            'precio_venta' => 0.80,
            'precio_compra' => 0.50,
            'stock' => 20,
            'descripcion' => 'Leer más sobre artículo 2',
        ],
        (object)[
            'id' => 3,
            'categoria' => (object)['id' => 3, 'nombre' => 'Pinturas'],
            'codigo' => '003',
            'nombre' => 'Pintura blanca',
            'precio_venta' => 30.00,
            'precio_compra' => 20.00,
            'stock' => 2,
            'descripcion' => 'Leer más sobre artículo 3',
        ],
        (object)[
            'id' => 4,
            'categoria' => (object)['id' => 4, 'nombre' => 'Electricidad'],
            'codigo' => '004',
            'nombre' => 'Cable eléctrico',
            'precio_venta' => 10.00,
            'precio_compra' => 7.50,
            'stock' => 18,
            'descripcion' => 'Leer más sobre artículo 4',
        ],
        (object)[
            'id' => 5,
            'categoria' => (object)['id' => 5, 'nombre' => 'Fontanería'],
            'codigo' => '005',
            'nombre' => 'Tubería de PVC',
            'precio_venta' => 5.00,
            'precio_compra' => 3.00,
            'stock' => 12,
            'descripcion' => 'Leer más sobre artículo 5',
        ]
    ];
    return view("articulos.index", ['articulos' => $articulos]);
})->name("articulos.index");

Route::get('articulos/create', function() {
    $categorias = [
        (object)[
            'id' => 1,
            'nombre' => 'Herramientas',
            'descripcion' => 'Descripción de categoría de Herramientas',
            'created_at' => '2024-03-28 12:35:00'
        ],
        (object)[
            'id' => 2,
            'nombre' => 'Materiales de construcción',
            'descripcion' => 'Descripción de categoría de Materiales de construcción',
            'created_at' => '2024-03-28 15:35:00'
        ],
        (object)[
            'id' => 3,
            'nombre' => 'Pinturas',
            'descripcion' => 'Descripción de categoría de Pinturas',
            'created_at' => '2024-03-28 16:30:00'
        ],
        (object)[
            'id' => 4,
            'nombre' => 'Electricidad',
            'descripcion' => 'Descripción de categoría de Electricidad',
            'created_at' => '2024-03-29 10:00:00'
        ],
        (object)[
            'id' => 5,
            'nombre' => 'Fontanería',
            'descripcion' => 'Descripción de categoría de Fontanería',
            'created_at' => '2024-03-30 20:00:00'
        ]
    ];
    return view("articulos.create", compact("categorias"));
})->name("articulos.create");

Route::get('articulos/{idArticulo}', function($id) {
    $articulos = [
        (object)[
            'id' => 1,
            'categoria' => (object)['id' => 1, 'nombre' => 'Herramientas'],
            'codigo' => '001',
            'nombre' => 'Martillo',
            'precio_venta' => 25.50,
            'precio_compra' => 15.00,
            'stock' => 35,
            'descripcion' => 'Leer más sobre artículo 1',
        ],
        (object)[
            'id' => 2,
            'categoria' => (object)['id' => 2, 'nombre' => 'Materiales de construcción'],
            'codigo' => '002',
            'nombre' => 'Ladrillos',
            'precio_venta' => 0.80,
            'precio_compra' => 0.50,
            'stock' => 20,
            'descripcion' => 'Leer más sobre artículo 2',
        ],
        (object)[
            'id' => 3,
            'categoria' => (object)['id' => 3, 'nombre' => 'Pinturas'],
            'codigo' => '003',
            'nombre' => 'Pintura blanca',
            'precio_venta' => 30.00,
            'precio_compra' => 20.00,
            'stock' => 2,
            'descripcion' => 'Leer más sobre artículo 3',
        ],
        (object)[
            'id' => 4,
            'categoria' => (object)['id' => 4, 'nombre' => 'Electricidad'],
            'codigo' => '004',
            'nombre' => 'Cable eléctrico',
            'precio_venta' => 10.00,
            'precio_compra' => 7.50,
            'stock' => 18,
            'descripcion' => 'Leer más sobre artículo 4',
        ],
        (object)[
            'id' => 5,
            'categoria' => (object)['id' => 5, 'nombre' => 'Fontanería'],
            'codigo' => '005',
            'nombre' => 'Tubería de PVC',
            'precio_venta' => 5.00,
            'precio_compra' => 3.00,
            'stock' => 12,
            'descripcion' => 'Leer más sobre artículo 5',
        ]
    ];
    $articulo = collect($articulos)->firstWhere('id', $id);
    return view("articulos.show", ['articulo' => $articulo]);
})->name("articulos.show");

Route::get('articulos/{idArticulo}/edit', function($id) {
    $articulos = [
        (object)[
            'id' => 1,
            'categoria' => (object)['id' => 1, 'nombre' => 'Herramientas'],
            'codigo' => '001',
            'nombre' => 'Martillo',
            'precio_venta' => 25.50,
            'precio_compra' => 15.00,
            'stock' => 35,
            'descripcion' => 'Leer más sobre artículo 1',
        ],
        (object)[
            'id' => 2,
            'categoria' => (object)['id' => 2, 'nombre' => 'Materiales de construcción'],
            'codigo' => '002',
            'nombre' => 'Ladrillos',
            'precio_venta' => 0.80,
            'precio_compra' => 0.50,
            'stock' => 20,
            'descripcion' => 'Leer más sobre artículo 2',
        ],
        (object)[
            'id' => 3,
            'categoria' => (object)['id' => 3, 'nombre' => 'Pinturas'],
            'codigo' => '003',
            'nombre' => 'Pintura blanca',
            'precio_venta' => 30.00,
            'precio_compra' => 20.00,
            'stock' => 2,
            'descripcion' => 'Leer más sobre artículo 3',
        ],
        (object)[
            'id' => 4,
            'categoria' => (object)['id' => 4, 'nombre' => 'Electricidad'],
            'codigo' => '004',
            'nombre' => 'Cable eléctrico',
            'precio_venta' => 10.00,
            'precio_compra' => 7.50,
            'stock' => 18,
            'descripcion' => 'Leer más sobre artículo 4',
        ],
        (object)[
            'id' => 5,
            'categoria' => (object)['id' => 5, 'nombre' => 'Fontanería'],
            'codigo' => '005',
            'nombre' => 'Tubería de PVC',
            'precio_venta' => 5.00,
            'precio_compra' => 3.00,
            'stock' => 12,
            'descripcion' => 'Leer más sobre artículo 5',
        ]
    ];
    $categorias = [
        (object)[
            'id' => 1,
            'nombre' => 'Herramientas',
            'descripcion' => 'Descripción de categoría de Herramientas',
            'created_at' => '2024-03-28 12:35:00'
        ],
        (object)[
            'id' => 2,
            'nombre' => 'Materiales de construcción',
            'descripcion' => 'Descripción de categoría de Materiales de construcción',
            'created_at' => '2024-03-28 15:35:00'
        ],
        (object)[
            'id' => 3,
            'nombre' => 'Pinturas',
            'descripcion' => 'Descripción de categoría de Pinturas',
            'created_at' => '2024-03-28 16:30:00'
        ],
        (object)[
            'id' => 4,
            'nombre' => 'Electricidad',
            'descripcion' => 'Descripción de categoría de Electricidad',
            'created_at' => '2024-03-29 10:00:00'
        ],
        (object)[
            'id' => 5,
            'nombre' => 'Fontanería',
            'descripcion' => 'Descripción de categoría de Fontanería',
            'created_at' => '2024-03-30 20:00:00'
        ]
    ];
    $articulo = collect($articulos)->firstWhere('id', $id);
    return view("articulos.edit", [
        'articulo'   => $articulo,
        'categorias' => $categorias,
    ]);
})->name("articulos.edit");

//CRUD CATEGORIA
Route::get('categorias', function() {
    $categorias = [
        (object)[
            'id' => 1,
            'nombre' => 'Herramientas',
            'descripcion' => 'Descripción de categoría de Herramientas',
            'created_at' => '2024-03-28 12:35:00'
        ],
        (object)[
            'id' => 2,
            'nombre' => 'Materiales de construcción',
            'descripcion' => 'Descripción de categoría de Materiales de construcción',
            'created_at' => '2024-03-28 15:35:00'
        ],
        (object)[
            'id' => 3,
            'nombre' => 'Pinturas',
            'descripcion' => 'Descripción de categoría de Pinturas',
            'created_at' => '2024-03-28 16:30:00'
        ],
        (object)[
            'id' => 4,
            'nombre' => 'Electricidad',
            'descripcion' => 'Descripción de categoría de Electricidad',
            'created_at' => '2024-03-29 10:00:00'
        ],
        (object)[
            'id' => 5,
            'nombre' => 'Fontanería',
            'descripcion' => 'Descripción de categoría de Fontanería',
            'created_at' => '2024-03-30 20:00:00'
        ]
    ];
    return view("categorias.index", compact("categorias"));
})->name("categorias.index");

Route::get('categorias/create', function() {

})->name("categorias.create");

Route::get('categorias/{idCategoria}/edit', function() {

})->name("categorias.edit");