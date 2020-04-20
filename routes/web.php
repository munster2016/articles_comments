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
    return view('articles');
});

Auth::routes();

Route::middleware('auth')->group(function ()
{
    Route::get('test', 'AndriiController@index');
});

Route::get('articles', 'ArticlesController@index')->name('articles.index');

Route::get('articlesOff/{articleId}', 'ArticlesController@showOff')->name('articles.showOff');



Route::middleware('auth')->group(function ()
{
    Route::get('articles/create', 'ArticlesController@create')->name('articles.create');
    Route::get('articles/{articleId}', 'ArticlesController@show')->name('articles.show');
    Route::post('articles', 'ArticlesController@store')->name('articles.store');

    Route::get('articles/{articleId}/destroy', 'ArticlesController@destroy')->name('articles.destroy');
    Route::get('articles/{articleId}/edit', 'ArticlesController@edit')->name('article.edit');
    Route::get('article/{articleId}', 'ArticlesController@update')->name('articles.update');

    Route::get('comments/{articleId}/create', 'Commentcontroller@create')->name('comments.create');
    Route::post('comments', 'Commentcontroller@store')->name('comments.store');
    Route::get('comments/{commentId}', 'Commentcontroller@destroy')->name('comments.destroy');
});
