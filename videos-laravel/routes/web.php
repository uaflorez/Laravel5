<?php

use Illuminate\Support\Facades\Route;
//use App\Models\Video;
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

/*$videos  = Video::all();
    foreach($videos as $video){
        echo $video->title. '<br/>';
        //echo $video->user->email;
        foreach ($video->comments as $comment){
            echo $comment->body;
        }
    }
    die();*/

