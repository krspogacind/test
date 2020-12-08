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


Route::get('/world', function () {
    return 'Hello world';
})->name('get_world');

Route::post('/hello', function () {
    return 'Hello world';
})->name('post_world');

Route::put('/world', function () {
    return 'Hello world';
})->name('put_world');

Route::patch('/world', function () {
    return 'Hello world';
})->name('patch_world');

Route::delete('/world', function () {
    return 'Hello world';
})->name('delete_world');