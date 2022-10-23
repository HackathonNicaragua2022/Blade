<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('categorias', function () {
    return view('listCategorias');
});

Route::get('detallesdelnegocio', function () {
    return view('detallesNegocio');
});

Route::get('detallesdelproducto', function () {
    return view('detallesProducto');
});
