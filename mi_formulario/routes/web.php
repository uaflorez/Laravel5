<?php

use App\Http\Controllers\FormularioController;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', 'FormularioController@index');
Route::get('form', 'FormularioController@form')->name('form');
Route::get('competencias', function(){
	return dd(\App\Competencia::all());
});

// Route::get('form','PageController@form')->name('form');
// Route::get('/', 'PageController@show');
