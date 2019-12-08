<?php

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

//Route::get('/', function () {
  //  return view('index');
//});

Route::get('/sobre', function () {
    return view('pages.sobre');
});
Route::get('/equipe', function () {
    return view('pages.equipe');
});
Route::get('/eventos', function () {
    return view('eventos.index');
});
Route::get('/noticias', function () {
    return view('noticias.index');
});
Route::get('/contato', function () {
    return view('pages.contato');
});


Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::post('/contato', 'ComentariosController@store')->name('criarComentario');
Route::resource('eventos', 'EventsController');
Route::resource('noticias','NoticiasController');
Route::get('/', function () {
    $noticias = DB::table('posts')->orderBy('created_at','desc')->take(3)->get();;
    return view('index',compact('noticias'));
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
