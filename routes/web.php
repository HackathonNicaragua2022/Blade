<?php

use Illuminate\Support\Facades\Route;

/*Lllamado a los controladores */
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// RUTAS DE ACCESO AL PÚBLICO EN GENERAL

Route::get('/', function () {
    return view('index');
});

Route::get('lista-categorias', function () {
    return view('listCategorias');
});

Route::get('detallesdelnegocio', function () {
    return view('detallesNegocio');
});

Route::get('detalles-producto', function () {
    return view('detallesProducto');
});


// RUTAS DE ACCESO AL PANEL DE ADMINISTRACIÓN

Route::get('/panel', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// RUTAS CON ACCESO RESTRINGIDO

Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('categorias', CategoriaController::class);
    // Route::resource('productos', ProductoController::class);
});


Auth::routes();
