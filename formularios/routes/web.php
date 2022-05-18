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



Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');

Route::resource('portfolio','ProjectController')
    ->parameters(['portfolio'=>'project'])
    ->names('projects');


Route::view('/contacto','contact')->name('contact');
Route::post('contact','MessageController@store')->name('messages.store');

//Auth::routes(['register' => false]);
