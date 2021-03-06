<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/produtos', 'App\Http\Controllers\ProdutoControlador@index')->name('produtos');

Route::get('/departamentos', 'App\Http\Controllers\DepartamentoControlador@index')->name('departamento');

Route::get('/usuario', function () {
    return view('usuario');
});