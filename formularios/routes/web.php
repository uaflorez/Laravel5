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




Route::view('/about','about')->name('about');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');



Route::get('/contact','MessagesController@index')->name('contact');
Route::post('/contact','MessagesController@store');



Route::get('/', function(){
    return view('home');
})->name('home');