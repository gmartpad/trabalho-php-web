<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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

Route::get('/', function(){
    return Redirect::to('/produtos');
});

Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index');

Route::post('/produtos', 'App\Http\Controllers\ProdutoController@store');

Route::get('/produtos/create', 'App\Http\Controllers\ProdutoController@create');
