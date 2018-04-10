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
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    Route::get('filmes/gerarListaM3U', 'FilmeController@gerarListaM3U'); 
    Route::get('temporadas/create/{serie}', 'TemporadaController@create');
    Route::get('episodios/create/{temporada}', 'EpisodioController@create'); 
    
    Route::resource('filmes', 'FilmeController');
    Route::resource('generos', 'GeneroController');
    Route::resource('series', 'SerieController');
    Route::resource('temporadas', 'TemporadaController');
    Route::resource('episodios', 'EpisodioController');

});


Route::resource('login', 'LoginController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
