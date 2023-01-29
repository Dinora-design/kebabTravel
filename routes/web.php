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

Route::get('/', 'UserController@home')->name('/');
Route::get('/places-to-go/{menu?}', 'UserController@item')->name('places-to-go');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    // Menus
    Route::get('/menus', 'HomeController@home')->name('menus');
    Route::match(['get', 'post'], 'menus/add-menu', 'HomeController@addMenu')->name('menus/add-menu');
    Route::get('/menus/store/{id}', 'HomeController@edit')->name('menus/edit');
    Route::post('/menus/update/{id}', 'HomeController@update')->name('menus/update');
    Route::get('menus/delete-menu/{id}', 'HomeController@deleteMenu');
});

