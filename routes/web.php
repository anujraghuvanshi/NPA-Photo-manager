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
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
	return view('admin.index');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
	Route::group(['prefix' => 'albums'], function(){
		Route::get('/',['as' => 'albums.index', 'uses' => 'AlbumsController@index']);
		Route::get('/create',['as' => 'albums.create', 'uses' => 'AlbumsController@create']);
		Route::post('/store',['as' => 'albums.store', 'uses' => 'AlbumsController@store']);
		Route::get('/show/{id}',['as' => 'albums.view', 'uses' => 'AlbumsController@show']);
		Route::get('/share/{id}',['as' => 'album.share', 'uses' => 'AlbumsController@shareToUsers']);
	});

	Route::group(['prefix' => 'photos'], function(){
		Route::get('/create/{id}',['as' => 'photos.create', 'uses' => 'PhotosController@create']);
		Route::post('/store',['as' => 'photos.store', 'uses' => 'PhotosController@store']);
		Route::get('/{id}',['as' => 'photos.show', 'uses' => 'PhotosController@show']);
		Route::delete('/{id}',['as' => 'photos.delete', 'uses' => 'PhotosController@destroy']);
	});
});