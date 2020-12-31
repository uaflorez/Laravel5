<?php

use Illuminate\Support\Facades\Route;
use App\Evaluado;
use App\Competencia;
use App\Compeindica;
use App\Indicator;
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

Route::get('/', 'FormController@home')->name('home');
Route::get('entrevista', 'FormController@entrevista')->name('entrevista');
Route::post('entrevista', 'FormController@store')->name('entrevista.store');

Route::get('competencia','CompeController@competencia')->name('competencia');
Route::post('competencia','CompeController@store')->name('competencia.store');

Route::get('indicador','IndicaController@indicador')->name('indicator');
Route::post('indicador','IndicaController@store')->name('indicator.store');

Route::get('compeindica','CompeindicaController@compeindica')->name('compeindica');
Route::post('compeindica','CompeindicaController@store')->name('compeindica.store');