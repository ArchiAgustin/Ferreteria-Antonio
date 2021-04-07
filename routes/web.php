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


Route::get('/', 'TiendaController@index')->name('home');
Route::get('/add', 'TiendaController@add')->name('add');
Route::get('/tienda/{id}', 'TiendaController@show')->name('show');
Route::get('/listar', 'TiendaController@listar')->name('listar');
Route::get('/editar/{id}', 'TiendaController@editar')->name('editar');
Route::post('/actualizar/{id}', 'TiendaController@actualizar')->name('actualizar');
Route::get('/eliminar/{id}', 'TiendaController@eliminar')->name('elimiar');
Route::post('/addproducto', 'TiendaController@addproducto')->name('addproducto');