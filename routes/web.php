<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;

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

Route::get('/',[UsuarioController::class,'index'])->name('welcome');
Route::resource('peliculas', PeliculaController::class);
Route::resource('usuario',UsuarioController::class);
// Route::get('/', [UsuarioController::class,'index'])->name('welcome');
// Route::get('peliculas/nuevo',[PeliculaController::class,'nuevo'])->name('peliculas.nuevo');
