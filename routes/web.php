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


/*
Route::get('/', function () {
    return view('welcome');
});*/

/*
Route::get('/', function () {
    return 'Hola mundo!';
});*/

/*Route::get('/', function () {
    return [
        'Clases' => [
            'Instalacion laravel',
            'Routes de Laravel',
            'Views de Laravel',
            ]
        ];
});*/

/*Route::get('clases', function(){
    return 'Aqui se van a visualizar todas las clases';
});

Route::get('clases/temas', function(){
    return 'Aqui se van a visualizar todos los temas';
});*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('notas', function(){
    return 'Aqui se van a visualizar las notas';
});

Route::get('notas/{id}/editar', function($id){
    return 'Aqui vamos a editar la nota: ' .$id;   
});

Route::get('notas/{id}/detalle', function($id){
    return 'Aqui vamos a visualizar el detalle de la nota: ' .$id;   
});

Route::get('notas/crear', function(){
    return 'Aqui se va crear una nueva nota';   
});

