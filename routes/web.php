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
Route::get('/',[
    'as' => 'login',
    'uses' => 'FinbuController@Login'
]);
Route::post('/login-admin',[
    'as' => 'login-admin',
    'uses' => 'FinbuController@LoginAccess'
]);

Route::get('/admin',[
    'as' => 'show-home',
    'uses' => 'FinbuController@ShowHomePage'
]);

Route::get('/user',[
    'as' => 'show-user',
    'uses' => 'FinbuController@ShowUserPage'
]);

Route::post('/user',[
    'as' => 'add-user',
    'uses' => 'FinbuController@AddUser'
]);
Route::GET('/blogs',[
    'as' => 'show-blogs-page',
    'uses' => 'FinbuController@ShowBlogsPage'
]);


