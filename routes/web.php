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

use Illuminate\Support\Facades\Route;

Route::prefix('blogs')->group(function () {
    Route::get('/', 'PostController@index')->name('blogs.index');
    Route::get('/list', 'PostController@list')->name('blogs.list');
    Route::get('/create', 'PostController@create')->name('blogs.create');
    Route::post('/create', 'PostController@store')->name('blogs.store');
    Route::get('/{id}/detail', 'PostController@detail')->name('blogs.detail');
    Route::get('/{id}/delete', 'PostController@destroy')->name('blogs.delete');
    Route::get('/{id}/edit', 'PostController@edit')->name('blogs.edit');
    Route::post('/{id}/update', 'PostController@update')->name('blogs.update');
});
