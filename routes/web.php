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
    Route::resource('users', 'UserController')->middleware('auth');
    Route::resource('localidads', 'localidadController');
	Route::resource('auditaHallazgos', 'audita_hallazgoController');
	Route::resource('empresas', 'empresasController');
	Route::resource('documentos', 'documentosController');
    Route::resource('localidads', 'localidadController');
    Route::post('comentarios', 'info_comentariosController@store')->name('comentarios');
    Route::post('comentarios2', 'info_comentariosController@update')->name('comentarios2');
    Route::resource('infoComentarios', 'info_comentariosController');
    Route::get('/auditaHallazgos', 'audita_hallazgoController@show2')->name('auditaHallazgos2');
    Route::get('/informeGenerals', 'info_comentariosController@create')->name('informeGenerals');

});


Route::group(['middleware' => 'auth','prefix'=>'api/v1/'], function () {
	Route::get('guardar_informe', 'hallazgosController@guarda_informe');
    Route::get('borra_doc','documentosController@destroy2');
    Route::get('borra_emp','empresasController@destroy');
    Route::get('borra_loc','localidadController@destroy');
    Route::get('/borrar_comen','info_comentariosController@destroy');
    Route::get('/edita_comen','info_comentariosController@edita_comen');
    Route::get('/muestra_hallazgo','hallazgosController@muestra_hallazgo');
    Route::get('/ver_hallazgo','hallazgosController@ver_hallazgo');

    



});

#Route::get('/home', 'HomeController@index');







