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

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home')->middleware('auth');
Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');

Route::get('/admin/home', 'admin\HomeController@index')->name('admin_home');

Route::resources([
    'admin/posts' => 'admin\PostsController',
    'admin/users'=> 'admin\UsersController',
    'admin/categories' => 'admin\CategoriesController'
]);