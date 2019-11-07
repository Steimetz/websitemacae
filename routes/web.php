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

Route::get('/', function () {
    return view('index');
});

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


Route::resource('eventos', 'EventsController');
Route::resource('noticias','NoticiasController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
