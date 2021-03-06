<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/articulos', 'App\Http\Controllers\ArticuloController@index')->name('articulos.index');
Route::get('/articulos/create', 'App\Http\Controllers\ArticuloController@create')->name('articulos.create');
Route::post('/articulos', 'App\Http\Controllers\ArticuloController@store')->name('articulos.store');
Route::get('/articulos/{articulo}/edit', 'App\Http\Controllers\ArticuloController@edit')->name('articulos.edit');
Route::put('/articulos/{articulo}', 'App\Http\Controllers\ArticuloController@update')->name('articulos.update');
Route::delete('/articulos/{articulo}', 'App\Http\Controllers\ArticuloController@destroy')->name('articulos.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
