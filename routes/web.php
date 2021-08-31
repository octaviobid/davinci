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

Route::get('/', function(){

    return view('welcome');
});

Route::get('/hola', function(){

    return 'hola mundo';
});


Route::get('/hola/{name}', function($name){

    return 'hola mundo'.$name;
});

Route::view('/vista', 'vista');

Route::view('/vistab', 'vistab');
