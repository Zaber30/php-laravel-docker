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
Route::get('/out',function(){
    return'zaber how are you';
});
Route::get('/nice',function(){
    return 'this is another way';
});
Route::get('/play',function(){
    return 'i am playing with docker';
});

Route::get('/home', 'HomeController@index')->name('home');
