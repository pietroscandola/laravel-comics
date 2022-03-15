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

// Characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// Comics
Route::get('/comics', function () {
    return view('comics');
})->name('comics');

// Movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// TV
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// Games
Route::get('/games', function () {
    return view('games');
})->name('games');

// Collectibles
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// Videos
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// Fans
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// Fans
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// Shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
