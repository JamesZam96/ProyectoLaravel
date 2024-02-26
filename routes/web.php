<?php

use App\Http\Controllers\acontroller;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\fncontroller;
use App\Http\Controllers\qecontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/ruta1', function () {
    return 'Hola soy J';
});

// Numeros primos
Route::get('/primenumber',[CursoController::class,'create']);
Route::post('/primenumber',[CursoController::class,'store'])->name('curso.store');

// Numeros amigos
Route::get('/friendlynumbers',[fncontroller::class,'create']);
Route::post('/friendlynumbers',[fncontroller::class,'store'])->name('fn.store');

// Promedio
Route::get('/average',[acontroller::class,'create']);
Route::post('/average',[acontroller::class,'store'])->name('a.store');

// Funcion cuadratica
Route::get('/quadraticecuation',[qecontroller::class,'create']);
Route::post('/quadraticecuation',[qecontroller::class,'store'])->name('qe.store');

//Route::get('/ruta3/{dato1}/{dato2}',[CursoController::class,'amigos']);

//Route::get('/formulario',[CursoController::class,'create']);
//Route::post('/formulario',[CursoController::class,'store'])->name('curso.store');
