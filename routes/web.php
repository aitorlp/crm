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


Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UserController')->middleware('auth');
Route::resource('roles', 'RoleController')->middleware('auth');

//Rutas para nuestra sección de notas
Route::resource('/notas/todas', 'NotasController')->middleware('auth');
Route::get('/notas/favoritas', 'NotasController@favoritas')->middleware('auth');
Route::get('/notas/archivadas', 'NotasController@archivadas')->middleware('auth');

//Rutas para nuestra sección de empresa
Route::resource('empresas', 'BusinessController')->middleware('auth');

//Rutas para nuestra sección de clientes
Route::resource('clientes', 'CustomersController')->middleware('auth');
