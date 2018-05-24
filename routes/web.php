<?php

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

Route::get('/sobre-nosotros', function () {
	return "Esta es la pagina que habla sobre nosotros";
});

Route::get('/contacto', function () {
    return "Aqui podras contactarnos";
});

Route::get('/foro', function () {
    return "Aqui esta el foro";
});

Route::get('/post/{id}/{nombre}', function ($id, $nombre) {
    return "Este es el post n° " . $id . ", creada por: " . $nombre;
})->where('nombre', '[a-z]+');
