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
Route::get('/', 'CompetenciasController@home');
Route::get('/competencias', 'CompetenciasController@index' );

Route::get('/indicador', 'IndicadoresController@index' );

Route::get('entrevista', 'EvaluadosController@entrevista')->name('entrevista');
Route::post('entrevista', 'EvaluadosController@store')->name('entrevista.store');
