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

Route::get('/home', 'HomeController@get')->name('get_world');

Route::post('/home', 'HomeController@post')->name('post_world');

Route::put('/home', 'HomeController@put')->name('put_world');

Route::patch('/home', 'HomeController@patch')->name('patch_world');

Route::delete('/home', 'HomeController@delete')->name('delete_world');

Route::resource('photos', 'PhotoController');
