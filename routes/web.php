<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {return view('Login.form');});

Auth::routes();
Route::get('/', 'Auth\LoginController@showLoginForm');


Route::get('dashboard', 'DashboardController@getHome')->name('dashboard');
Route::get('lista-colaboradores', 'ColaboradorController@getColaboradores')->name('lista-colaboradores');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
