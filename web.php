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
//creamos las rutas
Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return "Inicio";
})->name('bienvenida');

Route::get('/nuestros-servicios', function () {
    return "Seccion de servicios";
})->name('servicios');

Route::get('/quienes-somos', function () {
    return "Quienes Somos";
})->name('nosotros');

Route::get('/contactanos', function () {
    return "Seccion de contactos";
})->name('contacto');

//accedemos a las rutas a traves de los nombres
Route::get('/', function (){
    echo "<a href='".route('bienvenida')."'>Inicio</a><br>";
    echo "<a href='".route('servicios')."'>Nuestros Servicios</a><br>";
    echo "<a href='".route('nosotros')."'>Quienes Somos</a><br>";
    echo "<a href='".route('contacto')."'>Cóntactos</a><br>";

});
