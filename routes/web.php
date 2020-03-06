<?php
/*
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
//*********vista welcome
/*

Route::get('/', function () {
    return view('welcome');
});*/
/*
Route::get('/', function () {
    return "hola desde la pagina de inicio";
});
*/
Route::get('contacto', function () {
    return "hola desde la pagina contacto";
});

Route::get('saludo/{nombre?}', function ($nombre ="Invitado") {
    return "Saludos " . $nombre;
});

Route::get('/', function () {
    return view('welcome');
})->name('home');