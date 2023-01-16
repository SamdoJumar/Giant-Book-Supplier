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
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/Anime', function () {
    return view('category1');
});

Route::get('/Novel', function () {
    return view('category2');
});

Route::get('/Sejarah', function () {
    return view('category3');
});

Route::get('/detail1', function () {
    return view('detail1');
});

Route::get('/detail2', function () {
    return view('detail2');
});

Route::get('/detail4', function () {
    return view('detail4');
});

Route::get('/detail3', function () {
    return view('detail3');
});

Route::get('/publisher', function () {
    return view('publisher');
});
