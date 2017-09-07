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
Route::get('witaj', function () {
    return view('welcome');
});

Route::get('crm', function () {
    return View::make('pages.home');
});
Route::get('connect', function () {
    return View::make('includes.connect');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/crm/{name}', ['uses' =>'crm@toPage']);