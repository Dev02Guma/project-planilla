<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//PRODUCTOS CRUD
Route::post('guardarProducto', 'escoApiController@guardarProducto')->name('guardarProducto');
Route::get('getProducto', 'escoApiController@getProducto')->name('getProducto');
Route::put('eliminarProducto', 'escoApiController@eliminarProducto')->name('eliminarProducto');
Route::post('editarProducto', 'escoApiController@editarProducto')->name('editarProducto');


//LLOTE DEL PRODUCTO
Route::post('guardarLoteProducto', 'escoApiController@guardarLoteProducto')->name('guardarLoteProducto');
Route::get('getLoteProducto', 'escoApiController@getLoteProducto')->name('getLoteProducto');
Route::post('editarDetalleProducto', 'escoApiController@editarDetalleProducto')->name('editarDetalleProducto');


//COLOR CRUD
Route::post('guardarColores', 'escoApiController@guardarColores')->name('guardarColores');
Route::get('getColores', 'escoApiController@getColores')->name('getColores');

//MARCA CRUD
Route::post('guardarMarca', 'escoApiController@guardarMarca')->name('guardarMarca');
Route::get('getMarca', 'escoApiController@getMarca')->name('getMarca');

//ACABADO CRUD
Route::post('guardarAcabado', 'escoApiController@guardarAcabado')->name('guardarAcabado');
Route::get('getAcabado', 'escoApiController@getAcabado')->name('getAcabado');

//BODEGA CRUD
Route::post('guardarBodega', 'escoApiController@guardarBodega')->name('guardarBodega');
Route::get('getBodega', 'escoApiController@getBodega')->name('getBodega');

//PRESENTACION CRUD
Route::post('guardarPresentacion', 'escoApiController@guardarPresentacion')->name('guardarPresentacion');
Route::get('getPresentacion', 'escoApiController@getPresentacion')->name('getPresentacion');

//PRODUCTOS CRUD