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

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('store', 'StoreController@index')->name('store');

Route::get('/list', function () {
    return view('list');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/about', function () {
    return view('about');
});