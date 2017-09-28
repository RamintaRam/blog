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

//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => '/posts'], function () {
    Route::get('/', ['as' => 'app.posts.index','uses' => 'BlogPostsController@index']);
    Route::get('/create', ['as' => 'app.posts.create','uses' => 'BlogPostsController@create']);
    Route::post('/create', ['as' => 'app.posts.store', 'uses' => 'BlogPostsController@store']);
    Route::group(['prefix' => '{id}'], function () {
        Route::get('/edit', ['as' => 'app.posts.edit', 'uses' => 'BlogPostsController@edit']);
        Route::post('/edit', ['as' => 'app.posts.update', 'uses' => 'BlogPostsController@update']);
        Route::get('/', ['as' => 'app.posts.show', 'uses' => 'BlogPostsController@show']);
        Route::delete('/', ['as' => 'app.posts.delete', 'uses' => 'BlogPostsController@destroy']);
    });
});


Route::group(['prefix' => '/my-posts'], function () {
    Route::get('/', ['as' => 'app.my-posts.index','uses' => 'MyPostsController@index']);
    Route::get('/create', ['as' => 'app.my-posts.create','uses' => 'MyPostsController@create']);
    Route::post('/create', ['as' => 'app.my-posts.store', 'uses' => 'MyPostsController@store']);
    Route::group(['prefix' => '{id}'], function () {
        Route::get('/edit', ['as' => 'app.my-posts.edit', 'uses' => 'MyPostsController@edit']);
        Route::post('/edit', ['as' => 'app.my-posts.update', 'uses' => 'MyPostsController@update']);
        Route::get('/', ['as' => 'app.my-posts.show', 'uses' => 'MyPostsController@show']);
        Route::delete('/', ['as' => 'app.my-posts.delete', 'uses' => 'MyPostsController@destroy']);
    });
});
