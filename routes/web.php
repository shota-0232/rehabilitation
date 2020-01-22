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

Route::get('/cource/list', 'CourcesController@cource')->name('cource.list');
Route::get('/cource/detail', 'CourcesController@detail')->name('cource.detail');

Route::get('/contact', 'ContactsController@index')->name('contact.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
