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

Route::get('/', function () {
    return view('welcome');
});


Route::get('matricula', [MatriculaController::class,'index'])->name('matricula.index');
Route::post('matricula/alumno/search', [MatriculaController::class,'search'])->name('matricula.alumno.search');
Route::get('matricula/curso', [MatriculaController::class,'cursoIndex'])->name('matricula.curso.index');
Route::post('matricula/curso/search', [MatriculaController::class,'cursoSearch'])->name('matricula.curso.search');
Route::post('matricula/curso/matricular', [MatriculaController::class,'cursoMatricular'])->name('matricula.curso.matricular');

Route::get('/main', [MainController::class,'index'])->name('main.index');

Route::get('/', [LoginController::class,'index'])->name('login.index');
Route::get('/login', [LoginController::class,'index'])->name('login.index');
Route::post('/login', [LoginController::class,'login'])->name('login.login');
Route::get('/login/logout', [LoginController::class,'logout'])->name('login.logout');

//CRUD ARTICULOS
Route::get('alumnos', [ArticuloController::class, 'index'])->name("alumnos.index");
Route::get('alumnos/create', [ArticuloController::class, 'create'])->name("alumnos.create");
Route::post('alumnos', [ArticuloController::class, 'store'])->name('alumnos.store');
Route::get('alumnos/{idAlumno}', [ArticuloController::class, 'show'])->name("alumnos.show");
Route::get('alumnos/{idAlumno}/edit', [ArticuloController::class, 'edit'])->name("alumnos.edit");
Route::put('alumnos/{idAlumno}', [ArticuloController::class, 'update'])->name('alumnos.update');
Route::delete('alumnos/{idAlumno}', [ArticuloController::class, 'destroy'])->name('alumnos.destroy');

//CRUD CATEGORIA
