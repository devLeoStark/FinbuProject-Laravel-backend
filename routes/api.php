<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::namespace('Api')->group(function() {
// show all users
    Route::get('/users', [
        'as' => 'get-users',
        'uses' => 'FinbuController@ShowUserPage'
    ]);
// show one user with email
    Route::get('/users/{user_id}', [
        'as' => 'get-user',
        'uses' => 'FinbuController@GetUser'

    ]);
// add user
    Route::post('/users', [
        'as' => 'add-user',
        'uses' => 'FinbuController@AddUser'
    ]);
// user login
    Route::GET('/user-login/{email}', [
        'as' => 'user-login',
        'uses' => 'FinbuController@UserLogin'
    ]);
// show all news
    Route::GET('/home', [
        'as' => 'show-all-news',
        'uses' => 'FinbuController@ShowNews'
    ]);
// add new
    Route::POST('/add-news', [
        'as' => 'add-news',
        'uses' => 'FinbuController@AddNews'
    ]);
    Route::GET('/add-news', [
        'as' => 'add-news',
        'uses' => 'FinbuController@AddNews'
    ]);
// insert like
    Route::POST('/insert-like', [
        'as' => 'insert-like',
        'uses' => 'FinbuController@InsertLike'
    ]);
// show news of user
    Route::GET('/news-of-user/{user_id}', [
        'as' => 'get-news-of-user',
        'uses' => 'FinbuController@GetNewsOfUser'
    ]);

    // show like amount of news
    Route::GET('/like-amount/{news_id}/{user_id}', [
        'as' => 'get-like-amount',
        'uses' => 'FinbuController@LikeAmount'
    ]);
});


