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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('isnotadmin');

Route::get('/contact', "App\Http\Controllers\ContactController@index")->name('contact');

// Route::resource("film","App\Http\Controllers\FilmController")->middleware('Admin');

Route::get('/film/create',"App\Http\Controllers\FilmController@create")->name('film.create')->middleware('Admin');

Route::post('film/store',"App\Http\Controllers\FilmController@store")->name('film.store')->middleware('Admin');

Route::get('/film',"App\Http\Controllers\FilmController@index")->name('film.index')->middleware('Admin');

Route::get('/film/{id}/edit',"App\Http\Controllers\FilmController@edit")->name('film.edit')->middleware('Admin');

Route::put('/film/{id}/update',"App\Http\Controllers\FilmController@update")->name('film.update')->middleware('Admin');

Route::delete('/film/{id}/delete',"App\Http\Controllers\FilmController@destroy")->name('film.destroy')->middleware('Admin');

Route::get('/film/{id}/show',"App\Http\Controllers\FilmController@show")->name('film.show');

Route::post('/comment/store',"App\Http\Controllers\CommentController@store")->name('comment.store');

Route::delete('/comment/{id}/delete',"App\Http\Controllers\CommentController@destroy")->name('comment.destroy')->middleware('Admin');

Route::get('/watchList',"App\Http\Controllers\WatchListController@index")->name('lists.index');

Route::get('/reviews',"App\Http\Controllers\ReviewsController@index")->name('reviews');

Route::post('/watchList/store',"App\Http\Controllers\WatchListController@store")->name('watchlist.store');

Route::delete('/watchList/{id}/destroy',"App\Http\Controllers\WatchListController@destroy")->name('watchlist.destroy');