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
// Beranda

Route::get('/', function () {
    return view('index');
});


// Category
Route::get('/category', 'CategoryController@index');

Route::get('/category/create/', 'CategoryController@create');

Route::post('/category/store/', 'CategoryController@store');

Route::get('/category/edit/{id}', 'CategoryController@edit');

Route::post('/category/update/{id}', 'CategoryController@update');

Route::delete('/category/delete/{id}', 'CategoryController@delete');


// Article

Route::get('/article', 'ArticleController@index');

Route::get('/article/create/', 'ArticleController@create');

Route::post('/article/store/', 'ArticleController@store');

Route::get('/article/edit/{id}', 'ArticleController@edit');

Route::post('/article/update/{id}', 'ArticleController@update');

Route::delete('/article/delete/{id}', 'ArticleController@delete');



// User

Route::get('/user', 'UserController@index');

Route::get('/user/create/', 'UserController@create');

Route::get('/user/edit/', 'UserController@edit');
