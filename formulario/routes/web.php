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

Route::get('formulario','FormularioController@index'); 

Route::post('recibir','PrimerController@recibirPost');

Route::get('articulos', function(){
    dd(\App\Models\Article::all());
});
Route::get('/test', ['middleware' => 'domingo', function(){
    return 'Probando ruta con middleware';
}]);

Route::get('respuesta', function(){
    return response('Hola respuesta', 200);
    });
    
Route::get('respuesta2', function(){
    return response('Esto es un error', 404);
});        

Route::get('respuesta3', function(){
    return response("1,2,3,4\n5,6,7,8", 200)
    ->header('Content-Type', 'text/csv');
});

Route::get('respuesta5', function(){
    return response("Esta página se refrescará en 5 segundos hacia...", 200)
    ->header('Cache-Control', 'max-age=3600')
    ->header('Refresh', '5; url=http://www.desarrolloweb.com');
});

    

// Route::match(['get', 'post', 'put'], '/testing', function () {
//     echo 'Ruta testing para los verbos GET, POST, PUT';
// });
// Route::get('colaboradores/{nombre}', function($nombre){
//     return "Mostrando el colaborador $nombre";
// });
// Route::get('algo', function () {
//     return view('algo');
// });
// Route::get('/otro', function(){
//     return view('otro.index');
// });
// Route::get('/calendario', function(){
//     return view('calendario.eventos', [
//         'mes' => $mes,
//         'ano' => $ano,
//         'eventos' => $eventos
//         ]);
// });
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/test', function(){
//     echo 'Esto es una simple prueba!!';
// });
// Route::any("/cualquiercosa", function(){
//     echo 'La ruta /cualquiercosa asociada a cualquier verbo';
// });
    

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

