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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD ARTICULOS
Route::get('articulos', [ArticuloController::class, 'index'])->name("articulos.index");
Route::get('articulos/create', [ArticuloController::class, 'create'])->name("articulos.create");
Route::post('articulos', [ArticuloController::class, 'store'])->name('articulos.store');
Route::get('articulos/{idAlumno}', [ArticuloController::class, 'show'])->name("articulos.show");
Route::get('articulos/{idAlumno}/edit', [ArticuloController::class, 'edit'])->name("articulos.edit");
Route::put('articulos/{idAlumno}', [ArticuloController::class, 'update'])->name('articulos.update');
Route::delete('articulos/{idAlumno}', [ArticuloController::class, 'destroy'])->name('articulos.destroy');

//CRUD CATEGORIA
