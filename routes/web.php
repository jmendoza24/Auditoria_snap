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
Route::group(['middleware' => ['auth']], function(){
	Route::get('/', 'HomeController@index');

	Route::get('/home', 'HomeController@index')->name('home');
	Route::post('uploadcsv', 'hallazgosController@upload_informe')->name('upload.informe');
	Route::resource('hallazgos', 'hallazgosController');

});
Route::resource('users', 'UserController')->middleware('auth');




#Route::get('/home', 'HomeController@index');


