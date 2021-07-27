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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/film/create',"App\Http\Controllers\FilmController@create")->name('film.create');

Route::post('film/store',"App\Http\Controllers\FilmController@store")->name('film.store');

Route::get('/film',"App\Http\Controllers\FilmController@index")->name('film.index');

Route::get('/film/{id}/edit',"App\Http\Controllers\FilmController@edit")->name('film.edit');

Route::put('/film/{id}/update',"App\Http\Controllers\FilmController@update")->name('film.update');

Route::delete('/film/{id}/delete',"App\Http\Controllers\FilmController@destroy")->name('film.delete');

Route::get('/film/{id}/show',"App\Http\Controllers\FilmController@show")->name('film.show');

Route::post('/comment/store',"App\Http\Controllers\CommentController@store")->name('comment.store');