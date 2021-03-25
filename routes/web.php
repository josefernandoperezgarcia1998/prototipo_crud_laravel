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


Route::get('autenticar', function () {
    return view('autenticar');
});

Route::get('supervisor', function () {
    return view('tableros.tablero');
});

/* Rutas para categorias */
Route::get('vcategorias', 'App\Http\Controllers\CategoriasController@index');
Route::get('vcategorias/create', 'App\Http\Controllers\CategoriasController@create');
Route::get('vcategorias/{product}', 'App\Http\Controllers\CategoriasController@show');
Route::get('vcategorias/{product}/edit', 'App\Http\Controllers\CategoriasController@edit');
Route::delete('vcategorias/{product}', 'App\Http\Controllers\CategoriasController@destroy');
