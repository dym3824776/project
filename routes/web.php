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

Route::get('user/profile', function () {
    echo 1111;
})->name('profile');

Route::get('user/{name}', function ($name) {
    echo $name;
})->where('name', '[A-Za-z]+');

Route::get('foo',function(){
   return 'Hello World';
});



Route::get('/', 'Home\IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
