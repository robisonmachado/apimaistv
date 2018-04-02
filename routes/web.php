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

Route::get('filmes/gerarListaM3U', 'FilmeController@gerarListaM3U'); 

Route::resource('filmes', 'FilmeController');
Route::resource('generos', 'GeneroController');
Route::resource('series', 'SerieController');
Route::resource('temporadas', 'TemporadaController');

/*
Route::get('/filme/edit/{id}', function () {
    dd('filme works!');
});

Route::get('/filme/create', 'FilmeController@create');

Route::post('/filme/store', 'FilmeController@store');

*/
