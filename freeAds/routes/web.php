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


Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('/home/users', 'UserController@index');
//Route::get('/home/users/show/{user}', 'UserController@show');


Route::get('users/{user}/destroy', 'UserController@destroyForm');

Route::resource('users', 'UserController');

//Route::resource('annonces', 'AnnonceController');
//Route::get('annonces/{annonces}/edit', 'AnnonceController@edit');


Route::resource('admin/posts', 'Admin\\PostsController');