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
    return view('login');
});
Route::post('tablero','AutenticarController@validar');
//emisor
Route::get('tablero/emisor','EmisorController@index');
Route::get('tablero/emisor/create','EmisorController@redactar');
Route::get('tablero/emisor/edit','EmisorController@editar');
Route::get('tablero/emisor/show','EmisorController@mostrar');
//revisor
Route::get('tablero/Revisor','RevisorController@index');
Route::get('tablero/Revisor/create','RevisorController@redactar');
Route::get('tablero/Revisor/edit','RevisorController@editar');
Route::get('tablero/Revisor/show','RevisorController@mostrar');
//difusor
Route::get('tablero/Difusor','DifusorController@index');
Route::get('tablero/Difusor/create','DifusorController@redactar');
Route::get('tablero/Difusor/edit','DifusorController@editar');
Route::get('tablero/Difusor/show','DifusorController@mostrar');
//informatico
Route::get('tablero/informatico','InformaticoController@index');
Route::get('tablero/informatico/create','InformaticoController@crear');
Route::get('tablero/informatico/edit','InformaticoController@editar');
Route::get('tablero/informatico/show','InformaticoController@mostrar');


