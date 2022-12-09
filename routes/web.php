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
    return view('pages/accueil');
})->name('Accueil');

Route::get('/dbconn', function () {
    return view('pages.dbconn');
})->name('BD');

Route::get('/header', function () {
    return view('header');
});

Route::get('/footer', function () {
    return view('footer');
});