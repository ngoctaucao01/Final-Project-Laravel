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

Route::get('/admin/foods/index', 'Admin\ProductsController@index');
Route::post('/admin/foods/index', 'Admin\ProductsController@store');
Route::delete('/admin/foods/index{id}', 'Admin\ProductsController@destroy');
Route::get('/admin/foods/edit/{id}', 'Admin\ProductsController@edit');

Route::patch('/admin/foods/{id}', 'Admin\ProductsController@update');

Route::get('auth/register', 'Auth\RegisterController@index')->name('auth.register');
Route::post('auth/register', 'Auth\RegisterController@create');

Route::get('/admin/users/index', 'Admin\ManagementUserController@index')->name('admin.users.index');
Route::delete('/admin/users/index/{id}', 'Admin\ManagementUserController@destroy');

Route::get('/admin/users/edit/{id}', 'Admin\ManagementUserController@edit');
Route::patch('/admin/users/{id}', 'Admin\ManagementUserController@update');

Route::get('/user/home', 'User\CartsController@index');