<?php

use Illuminate\Support\Facades\Route;
use App\Pelicula;

use App\mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return redirect()->route('pelicula.index');
});

Route::get('pelicula', function () {
    return view('peliculas.peliculaIndex');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('favorita', 'FavoritaController')->middleware("auth");

Route::resource('proxima', 'ProximaController')->middleware("auth");

Route::resource('pelicula', 'PeliculaController');

Route::resource('comentario', 'ComentarioController')->middleware("auth");

Route::get('meto', function () {
    return view('Metopay');
});
